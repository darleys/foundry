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
    define('CORE_PATH', dirname(realpath(dirname(__FILE__))) );
	define('PROJECT_URL','');
	define('PROJECT_IMAGES_URL',DS.basename(dirname(dirname(__FILE__))).DS.'common'.DS.'images'.DS);
	define('COMMON_DIR',dirname(dirname(__FILE__)).DS.'common'.DS);	
	define('PROJECT_DIR',dirname(dirname(__FILE__)).DS);
	define('IMAGES_DIR',dirname(dirname(__FILE__)).DS.'common'.DS.'images'.DS);	
	define('IMAGES_URL',DS.'common'.DS.'images'.DS);
	define('UNIQUE_SEPERATOR','!%^*^%!');	
	define('COMMON_SPACE',CORE_PATH.DS."common");

	//url patterns
	define('call_foundry_func_sym','()');
	
	//something junk
	define('display_image_width','640');
	define('display_image_height','400');

    define('TEMPLATES_DIR',CORE_PATH.DS.'templates');

//CONFIGURE ENCRYPTION
define('ENC_KEY', 'junk' );
//CONFIGURE ENCRYPTION

	class thisKEYS {
		const IMAGES_DIR = PROJECT_DIR;
		//$self::IMAGE_DIR = dirname(dirname(__FILE__)).DS.'common'.DS.'images'.DS;
	}

?>