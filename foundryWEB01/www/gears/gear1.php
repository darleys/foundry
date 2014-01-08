<?php
/**
 * Foundry
 *
 * LICENSE
 *
Copyright 2010 Sydney IT Pty Ltd

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
 * @copyright  Copyright (c) 2013 Virtuous Consulting Services.  (http://www.virtuouscs.com)
 * @Owner     Darley Stephen (http://www.darleys.org)
 * @Author     Darley Stephen (http://www.darleys.org)
 */
	class gear1 extends Foundry_Core_Service {

		function idFile($fileExt) {
				//You CAN ALSO LOAD THE TABLE VALUES MYRACKTYPES AND MYRACK INITIALLY INTO A PERSISTENT OBJECT AND USE IT, INSTEAD OF CALLING THE DATABSE AGAIN & AGAIN
				$select_handle = self::$DB->query("select * from media_types where format='".$fileExt."'");
				if($select_row = mysql_fetch_assoc($select_handle)) {								
					return $select_row;			
				}else { return 0;}
		}

        function transformImage($iwidth,$iheight,$toWidth,$toHeight) {
            $rwidth=$toWidth;
            $rheight=$toHeight;
            if($iwidth<$toWidth && $iheight<$toHeight) {
                $rwidth=$iwidth;
                $rheight=$iheight;
            }
            if($iwidth<$toWidth && $iheight>$toHeight) {
                $jtrans=$iheight-$toHeight;
                $jtrans = ($jtrans/$iheight)*100;
                $jtrans = ($iwidth * $jtrans)/100;
                $rheight=$toHeight;
                $rwidth=$iwidth-$jtrans;
            }
            if($iwidth>$toWidth && $iheight<$toHeight) {
                $jtrans=$iwidth-$toWidth;
                $jtrans = ($jtrans/$iwidth)*100;
                $jtrans = ($iheight * $jtrans)/100;
                $rwidth=$toWidth;
                $rheight=$iheight-$jtrans;
            }
            if($iwidth>$toWidth && $iheight>$toHeight) {
                if($iwidth>$iheight) {
                    $jtrans=$iwidth-$toWidth;
                    $jtrans = ($jtrans/$iwidth)*100;
                    $jtrans = ($iheight * $jtrans)/100;
                    $rwidth=$toWidth;
                    $rheight=$iheight-$jtrans;
                }else {
                    $jtrans=$iheight-$toHeight;
                    $jtrans = ($jtrans/$iheight)*100;
                    $jtrans = ($iwidth * $jtrans)/100;
                    $rheight=$toHeight;
                    $rwidth=$iwidth-$jtrans;
                }
            }
            return array($rwidth,$rheight);
        }
		
		function listNumbers($id,$attributes,$from,$to,$incr) {
			$return_value = html::select($id,$attributes,"");
			for($inc=$from;$inc<$to;) {				
				$return_value.=html::option($inc,$inc,"");				
				$inc+=$incr;
			}			
			$return_value.= html::select_;				
			return $return_value;
		}	
		
		function checkSecret($password) {
			if(ctype_alnum($password) && strlen($password)>6 && strlen($password)< 16 && preg_match('`[A-Z]`',$password) && preg_match('`[a-z]`',$password) 
				&& preg_match('`[0-9]`',$password))
					return true;		
			else
				return false; 
		}
		
		function gender($id,$attributes,$selectedIndex) {
			$return_value = html::select($id,$attributes,"");		
			
			if($selectedIndex==0) {
				$return_value.=html::option(0,"Male",array("selected"=>"selected"));
				$return_value.=html::option(1,"Female","");
			}
			else { 
				$return_value.=html::option(0,"Male","");
				$return_value.=html::option(1,"Female",array("selected"=>"selected"));
			}
			
			$return_value.= html::select_;				
			echo $return_value;
		}
		
		function array_unique_multidimensional($input){
			$serialized = array_map('serialize', $input);
			$unique = array_unique($serialized);
			return array_intersect_key($input, $unique);
		}

		

	}
	
?>