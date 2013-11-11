<?php
class Foundry_Service {
    private static $sInstance;
    public function __construct()  {
    }

    public static function FSingle()  {
        if (!isset(self::$sInstance)) {
            $className = __CLASS__;
            self::$sInstance = new $className;
        }
        return self::$sInstance;
    }
}
