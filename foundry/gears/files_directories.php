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
	class Foundry_ManageFiles {
		public function listFilesByPath($dirname) {
			static $files;
			if ($handle = opendir($dirname)) {		
				while (false !== ($data = readdir($handle))) {						
					if($data != '.' AND $data != '..') {														
						if(!is_dir($dirname.DS.$data))  {						
							$files[] = $dirname . DS. $data;													
						}						
					}			
				}
                closedir($handle);
				return $files;
			}
		}

	
		public function listFilesByName($dirname) {
			static $files,$temp;			
			if ($handle = opendir($dirname)) {		
				while (false !== ($data = readdir($handle))) {						
					if($data != '.' AND $data != '..') {
						if(!is_dir($dirname.DS.$data))  {						
							$temp[] = $data;													
						}						
					}			
				}
				$files=$temp;
				$temp=null;
				closedir($handle);
				return $files;				
				
			}
		}
		
		//NEED SERIOUS FIX with BASE PATH
		/*
		
		public function recursiveFilesByBasePath($dirname,$format) {
			
			
			static $files;
			static $basename = basename($dirname)
			echo "<br><br>$$$$4".$basename;			
			$basename = substr($dirname,
			if ($handle = opendir($dirname)) {		
				while (false !== ($data = readdir($handle))) {						
					if($data != '.' AND $data != '..') {						
						if(!is_dir($dirname.DS.$data))  {						
							$filename = $basename.DS.$data;
							if(substr($filename,strlen($filename)-3,strlen($filename)) == ".js")
								$files[] = $basename.DS.$data;													
						}else {
							$this->recursiveFilesByBasePath($dirname.DS.$data,$format);
						}
						
					}			
				}
				return $files;
				closedir($handle);
			}
			
		}	
		*/
		
		
	}

	class Foundry_ManageDirectories {
		public function listDirectoriesByPath($dirname) {
			static $directories;
			if ($handle = opendir($dirname)) {		
				while (false !== ($data = readdir($handle))) {						
					if($data != '.' AND $data != '..') {														
						if(is_dir($dirname.DS.$data))  {						
							$directories[] = $dirname . DS. $data .DS;						
							self::listDirectoriesByPath($dirname.DS.$data);
						}						
					}			
				}				
				closedir($handle);
			}
			return $directories;
		}

        public function listSLDirectoriesByPath($dirname) {
            static $directories;
            if ($handle = opendir($dirname)) {
                while (false !== ($data = readdir($handle))) {
                    if($data != '.' AND $data != '..') {
                        if(is_dir($dirname.DS.$data))  {
                            $directories[] = $dirname . DS. $data .DS;
                        }
                    }
                }
                closedir($handle);
            }
            return $directories;
        }
	}
	/*
	global $manageDirectories;
	$manageDirectories = new manageDirectories();
	global $manageFiles;
	$manageFiles = new manageFiles();
	*/
	
?>