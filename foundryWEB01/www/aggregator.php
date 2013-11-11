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
	//require (FOUNDRY_PATH.DS.'designer'.DS.'index.php');
	if (!defined('DS')) {
		define('DS', DIRECTORY_SEPARATOR);
	}
	if (!defined('THIS_PATH')) {
		define('THIS_PATH', dirname(__FILE__));
	}
	
	//require('/var/hosting/reachu.com.au/www/foundry/designer/components.php');
	
	//require('/var/hosting/reachu.com.au/www/foundry/designer/index.php')	
		
	Foundry_Aggregate::Load(dirname(__FILE__).DS.'configs');
	//$Aggregate->Load(dirname(__FILE__).DS.'pillars');
	//$Aggregate->Load(dirname(__FILE__).DS.'gears');
	
?>