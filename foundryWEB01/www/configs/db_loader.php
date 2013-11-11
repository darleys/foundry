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
	class thisDB {		
		public static $dbconfig = array('type' => 'mysql',
				'persistent' => false,
				'host' => 'localhost',
				'port' => '3306',
				'login' => 'root',
				'password' => 'myjunk**',
				'database' => 'savve_ml_3_0_d',
		);
	}
		//$db->connect();
?>