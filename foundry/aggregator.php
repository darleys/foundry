<?php
/**
 * Foundry
 *
 * LICENSE
 *
Copyright 2010 Stephen Darley

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
 
 * @Owner     Stephen Darley (http://www.darleys.org)
 * @Author     Stephen Darley (http://www.darleys.org)
 */
	//require (FOUNDRY_PATH.DS.'designer'.DS.'index.php');
	if (!defined('DS')) {
		define('DS', DIRECTORY_SEPARATOR);
	}
	//require('/var/hosting/reachu.com.au/www/foundry/designer/components.php');
	
	//require('/var/hosting/reachu.com.au/www/foundry/designer/index.php')
	
	class Foundry_Aggregate {		
		public function Load($dirname) {						
			if ($handle = opendir($dirname)) {
				while (false !== ($data = readdir($handle))) {
					if($data != '.' AND $data != '..') {
						if(is_dir($dirname.DS.$data))  {
							$this->Load($dirname.DS.$data);
						}
						else
							if($dirname != dirname(__FILE__))	{
								require_once $dirname.DS.$data;
							}
					}			
				}		
				closedir($handle);
			}											
		}		
	}

	$Aggregate = new Foundry_Aggregate();
	$Aggregate->Load(dirname(__FILE__));

	function Foundry_AutoLoad($className){

		//echo "JJJJJJJJJJJJJJJJJJ"."<br>";
		//echo $className."<br>";
		//echo "KKKKKKKKKKKKKKKK"."<br>";
        $path=0;

		$fileNameFormats = array(
			  '%s.php',
			  '%s.class.php',
			  'class.%s.php',
			  '%s.inc.php'
			);
        if($_SESSION['requireA'][$className]) {require_once $_SESSION['requireA'][$className];return;}
        else {				
				$class_in_root = false;
				$aFiles = glob(THIS_PATH.DS.'*.php');											
				$caFiles = array_map("strtolower", $aFiles);																	
				foreach($fileNameFormats as $fileNameFormat){									
					$fIndex = array_search(strtolower(THIS_PATH.DS.sprintf($fileNameFormat, strtolower($className))), $caFiles);
					if($fIndex===0 OR $fIndex>0) {
						$class_in_root=true;
						$path = $aFiles[$fIndex];
						$requireA[$className]=$path;
						if($_SESSION['requireA']){
						   $requireA=$_SESSION['requireA'];
						   $requireA[$className] =$path;
							$_SESSION['requireA']=$requireA;
						}else {							
							$requireA[$className] =$path;
							$_SESSION['requireA']=$requireA;
						}
                        //echo $path."LLLLLLLL";
						require_once $path;
						return;
					}//END IF FOR File Exists 							
				}//END ForEach FilesFormats
						
				if(!$class_in_root) {
					$directories = Foundry_ManageDirectories::listDirectoriesByPath(THIS_PATH);					
					
					foreach($directories as $directory){	
						$aFiles = glob($directory.'*.php');											
						$caFiles = array_map("strtolower", $aFiles);
						foreach($fileNameFormats as $fileNameFormat){
							$fIndex = array_search($directory.sprintf($fileNameFormat, strtolower($className)), $caFiles);									
							if($fIndex===0 OR $fIndex>0) {
								$path = $aFiles[$fIndex];
								$requireA[$className]=$path;
								if($_SESSION['requireA']){
								   $requireA=$_SESSION['requireA'];
								   $requireA[$className] =$path;
									$_SESSION['requireA']=$requireA;
								}else {							
									$requireA[$className] =$path;
									$_SESSION['requireA']=$requireA;
								}
								require_once $path;
								return;
							}//END IF FOR File Exists 
							
						}//END ForEach FilesFormats
					}//END ForEach Child Directories
				}//END IF for Files not in Root
		}//END Else for Require Class/file Not in Session

        if($path==0 && strpos($className,'_')!==false) {
            $aiCOM="AI_".substr($className,strpos($className,'_')+1);
            $modal = substr($className,0,strpos($className,'_'));
            echo $modal;
           // echo "################".$aiCOM;
            $alien=eval("class $className extends $aiCOM {
                            public function __call(\$name, \$arguments) {
                                \$cmd='_'.\$name;
                                parent::setModal('$modal');
                                parent::\$cmd(\$arguments);
                            }
                            public static function __callStatic(\$name, \$arguments){
                                \$cmd='_'.\$name;
                                parent::setModal('$modal');
                                parent::\$cmd(\$arguments);
                            }
                        };");


            $requireA[$className]=$alien;
            if($_SESSION['requireA']){
                $requireA=$_SESSION['requireA'];
                $requireA[$className] =$alien;
                $_SESSION['requireA']=$requireA;
            }else {
                $requireA[$className] =$alien;
                $_SESSION['requireA']=$requireA;
            }

            return $alien;
            return true;
            exit;
            echo "##@@@";
        }

	}


    spl_autoload_register('Foundry_AutoLoad');




//spl_autoload_register('autoLoader');

	
	//echo LoadFoundry(dirname(__FILE__));


?>