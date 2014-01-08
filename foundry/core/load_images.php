<?php
/**
 * Foundry
 *
 * LICENSE
 *
Copyright 2013 Virtuous Consulting Services

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
	
	
		class foundry_images {
			function load($image_file) {
				if(file_exists(IMAGES_DIR.$image_file)) {
					$fhandle = fopen(IMAGES_DIR.$image_file,'r');
					echo fread($fhandle,filesize(IMAGES_DIR.$image_file));
				}else {
					return false;
				}					
			}
		}
	

	
	//'$db->DBCON1="ss";
	
?>