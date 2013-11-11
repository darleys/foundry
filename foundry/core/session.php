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
	class foundry_session {		
		/*
		public function __call($name,$args) {											
			if(isset($_SESSION['mymy'])) 				
				return $_SESSION[$name];			
		}
		*/
		
		function get($session_name) {			
			if(isset($_SESSION[$session_name])) 				
				return $_SESSION[$session_name];		
			else 
				return false;				
		}
		
		function Load($session_name,$session_value) {				
			$_SESSION[$session_name] = $session_value;
			session_write_close();	
		}
		
		function issets($session_name) {			
				if($_SESSION[$session_name]) 
					return true;
				else 
					return false;
		}//END function isset
		
		function Discard($session_name) {
				unset($_SESSION[$session_name]); 
		}
		
		function __get($dt) {			
			if(isset($_SESSION[$dt])) 				
				return $_SESSION[$dt];
			else 
				return false;
		}		

		
	}	
	//global $session;
	//$session = new session();
?>