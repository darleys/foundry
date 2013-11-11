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
 * @copyright  Copyright (c) 2010 Sydney IT Pty Ltd  Australia. (http://www.sydneyitc.com.au)
 * @Owner     Darley Stephen (http://www.darleys.org)
 * @Author     Darley Stephen (http://www.darleys.org)
 */
	class base_loader {
		public function loadBaseJs() {
			//global $manageFiles;
			$baseJsFiles = Foundry_ManageFiles::listFilesByName(COMMON_DIR.DS.'base_js');
            $rVal="";
			foreach($baseJsFiles as $baseJsFile) 		{						
				$rVal.= "<script type='text/javascript' src='common/base_js/".$baseJsFile."'></script>";
			}
            return $rVal;
		}
		
		public function loadSpecialJs() {
			global $manageFiles;
			$specialJsFiles = Foundry_ManageFiles::listFilesByName(COMMON_DIR.DS.'special_js');
            $rVal="";
            foreach($specialJsFiles as $specialJsFile) 		{
                $rVal.=  "<script type='text/javascript' src='common/special_js/".$specialJsFile."'></script>";
			}
            return $rVal;
		}		
		
		public function loadBaseCss() {			
			global $manageFiles;
			$baseCssFiles = Foundry_ManageFiles::listFilesByName(COMMON_DIR.DS.'base_css');
            $rVal="";
            foreach($baseCssFiles as $baseCssFile) 		{
                $rVal.= "<link rel='stylesheet' type='text/css' href='common/base_css/".$baseCssFile."'></link>";
			}
            return $rVal;
		}		
		public function loadSpecialCss() {			
			global $manageFiles;
			$specialCssFiles =Foundry_ManageFiles::listFilesByName(COMMON_DIR.DS.'special_css');
            $rVal="";
            if($specialCssFiles)
			foreach($specialCssFiles as $specialCssFile) 		{
                $rVal.= "<link rel='stylesheet' type='text/css' href='common/special_css/".$specialCssFile."'></link>";
			}
            return $rVal;
		}		
	}
	
	

	
?>