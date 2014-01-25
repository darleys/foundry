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

/*
1. Call the casts array directly by passing domain/casts_array_key
2. Call a code under casts or molds or any other using domain/array_key::arrayname for example - localhost/welcome::casts
3. dynamically load/call a function using classname and method using domain/method_name@classname

MAKE SURE TO CREATE A TYPE ARRAY WHERE DEVELOPERS CAN CHANGE THE WAY THEY CAN ACCESS FOUNDRY AND SYMBOLS, SAY FOR EXAMPLE TO CALL SESSIONS
IN FOUNDRY IT SHOULD REFER TO
*/
header("Cache-Control: no-cache");
//ini_set('display_errors',1);
//ini_set('upload_max_filesize', '10M');
//error_reporting(E_ALL);
	session_start();
	if (!defined('DS')) {
		define('DS', DIRECTORY_SEPARATOR);
	}


	define('FOUNDRY_PATH',dirname(dirname(dirname(__FILE__))).DS.'foundry');

	require(FOUNDRY_PATH.DS.'aggregator.php');

	require ('aggregator.php');

    $foundryCS = Foundry_Core_Service::FSingle();
    $foundryCS->configureServices();
    //require ('configs/boot.php');
    $boot = new boot();
    $boot->makeAvailable();
	$processor=array('request'=>(dirname(__FILE__)).DS.'RequestProcessor.php');
    /*
    *the Cast Array contains , the name of the Cast File requested
    *call the Casts using domain/array_key::casts (or) domain/array_key (casts are the default array
     * that will be called when array name is not mentioned)
    */
	$casts = array('index'=>(dirname(__FILE__)).DS.'casts'.DS.'index.php',
                   'cast_test'=>(dirname(__FILE__)).DS.'casts'.DS.'test'.DS.'test.php');
    /*
    *the Mold Array contains , the name of the Mold Class and the Method to be called
    *call the Mold using domain/array_key::molds
    */
	$molds = array('mold_test'=>array("Mold_First","testme"));
    /*
     * Ways to call the Molds in example.
     * 1. http://foundry01.darleys.org/testme@mold_first
     * 2. http://foundry01.darleys.org/mold_test::molds
     */
echo $_REQUEST['core_request'];
    if(!$_REQUEST['core_request']) {
        require_once $casts['index'];
    }else
    if(strpos($_REQUEST['core_request'],"/") !== false) {
        $slash_contents=explode("/",$_REQUEST['core_request']);
        $_REQUEST['core_request']= $slash_contents[0];
        $_REQUEST=array_merge($_REQUEST,array_slice($slash_contents, 1));
        require_once $casts[$_REQUEST['core_request']];
    }
    if(strpos($_REQUEST['core_request'],"@") === false) {
        if(strpos($_REQUEST['core_request'],"::") === false) {
            $modal = $casts[$_REQUEST['core_request']];
            if(is_array($modal)){
                $thisOBJ = new $modal[0];
                if(strpos($_REQUEST['core_request'],"(")===false) {
                    $thisOBJ->$modal[1](array_merge($_REQUEST,$_FILES));
                }//END IF for no parameters
                else {
                    $aArgs=explode("(",$_REQUEST['core_request']);
                    $oArgs = substr($aArgs[1],0,-1);
                    $thisOBJ->$$modal[1]($oArgs);
                }
            }//END IF this is done to check whether the index is refereing to a Class or a PHP file
            else {
                require_once $casts[$_REQUEST['core_request']];
            }//END Else since the index value is not an array .. just require_once the file
        }else {
            $core_request=explode("::",$_REQUEST['core_request']);
            $modal = ${$core_request[1]}[$core_request[0]];
            if(is_array($modal)){
                $thisOBJ = new $modal[0];
                if(strpos($core_request[0],"(")===false) {
                    $thisOBJ->$modal[1](array_merge($_REQUEST,$_FILES));
                }//END IF for no parameters
                else {
                    $aArgs=explode("(",$core_request[0]);
                    $oArgs = substr($aArgs[1],0,-1);
                    $thisOBJ->$$modal[1]($oArgs);
                }
            }//END IF this is done to check whether the index is refereing to a Class or a PHP file
            else {
                require_once $modal;
            }//END Else since the index value is not an array .. just require_once the file
        }
    }
    else {
        $core_request=explode("@",$_REQUEST['core_request']);

        $thisOBJ = new $core_request[1];
        if(strpos($core_request[0],"(")===false) {
            $thisOBJ->$core_request[0](array_merge($_REQUEST,$_FILES));
        }//END IF for no parameters
        else {
            $aArgs=explode("(",$core_request[0]);
            $oArgs = substr($aArgs[1],0,-1);
            $thisOBJ->$aArgs[0]($oArgs);
            //call_user_func_array(array($thisOBJ,$aArgs[0]), explode(',', $oArgs));
        }
    }

        