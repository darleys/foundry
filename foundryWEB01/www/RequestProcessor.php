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
 * @copyright  Copyright (c) 2013 Virtuous Consulting Services.  (http://www.virtuouscs.com)
 * @Owner     Darley Stephen (http://www.darleys.org)
 * @Author     Darley Stephen (http://www.darleys.org)
 */
	if(isset($_POST['REQP'])) {
			$REQP = explode(UNIQUE_SEPERATOR,trim($_POST['REQP']));	
			$meth_args=Array();
			for($inc=0;$inc<count($REQP);) {		
				if($REQP[$inc]=="CALLBACK") {						
					if(explode(":",$REQP[$inc+1])) {
						$tARR = explode(":",$REQP[$inc+1]);
						$meth_args[] = $tARR[2];												
						call_user_func_array(array($tARR[0],$tARR[1]),$meth_args);
						break;			
					}else {
						call_user_func_array($REQP[$inc+1],$meth_args);			
						break;	
					}			
				}
				else { 					
					$VAL_TYPE=$REQP[$inc+1];						
					switch($VAL_TYPE) {
						case 'NA':					
							$meth_args[] = $REQP[$inc];								
						break;
						case 'ARRAY':						
							$meth_args[] = explode(",",$REQP[$inc]);								
						break;				
					}			
				}		
				$inc=$inc+2;
			}	
	}
	else {
		print_r($_POST);
	}
		
?>