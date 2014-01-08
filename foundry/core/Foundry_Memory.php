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
class Foundry_Memory extends ArrayObject {

    public static function get($index)  {
        if (!self::isThere($index)) {
            //require_once 'Zend/Exception.php';
            //throw new Zend_Exception("No entry is registered for key '$index'");
        }

        return $_SESSION[$index];
    }

    /*
     * * MAKE IT MORE POWERFUL
     * * MAKE IT MORE POWERFUL
     * * MAKE IT MORE POWERFUL
     * * MAKE IT MORE POWERFUL
     * * MAKE IT MORE POWERFUL
     */
    public static function set($index, $value)  {
        $_SESSION[$index]=$value;
        if (!self::isThere($index))
            return true;
        else
            return false;
    }

    public static function dealloc($index) {
        unset($_SESSION[$index]);
    }

    public static function isThere($index) {
        if ($_SESSION[$index])
            return true;
        else
            return false;
    }
}
