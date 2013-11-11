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
class Foundry_RObjects extends ArrayObject {

    private static $_robjectsClassName = 'Foundry_RObjects';


    private static $_robjects = null;


    public static function getInstance() {
        if (self::$_robjects === null) {
            self::init();
        }

        return self::$_robjects;
    }


    public static function setInstance(Foundry_RObjects $robjects) {
        if (self::$_robjects !== null) {
            //require_once 'Zend/Exception.php';
            //throw new Zend_Exception('Registry is already initialized');
        }

        self::setClassName(get_class($robjects));
        self::$_robjects = $robjects;
    }


    protected static function init() {
        self::setInstance(new self::$_robjectsClassName());
    }


    public static function setClassName($robjectsClassName = 'Foundry_RObjects') {
        if (self::$_robjects !== null) {
            //require_once 'Zend/Exception.php';
            //throw new Zend_Exception('Registry is already initialized');
        }

        if (!is_string($robjectsClassName)) {
            //require_once 'Zend/Exception.php';
            //throw new Zend_Exception("Argument is not a class name");
        }


        if (!class_exists($robjectsClassName)) {
            //require_once 'Zend/Loader.php';
            //Zend_Loader::loadClass($robjectsClassName);
            Foundry_RObjects::getInstance();
        }

        self::$_robjectsClassName = $robjectsClassName;
    }


    public static function _unsetInstance() {
        self::$_robjects = null;
    }

    public static function get($index)  {
        $instance = self::getInstance();

        if (!$instance->offsetExists($index)) {
            //require_once 'Zend/Exception.php';
            //throw new Zend_Exception("No entry is registered for key '$index'");
        }

        return $instance->offsetGet($index);
    }


    public static function set($index, $value)  {
        $instance = self::getInstance();
        $instance->offsetSet($index, $value);
    }

    public static function isThere($index) {
        if (self::$_robjects === null) {
            return false;
        }
        return self::$_robjects->offsetExists($index);
    }


    public function __construct($array = array(), $flags = parent::ARRAY_AS_PROPS)   {
        parent::__construct($array, $flags);
    }


    public function offsetExists($index)  {
        return array_key_exists($index, $this);
    }
}
