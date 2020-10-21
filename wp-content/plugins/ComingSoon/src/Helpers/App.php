<?php


namespace ComingSoon\Helpers;


class App
{
    private static $aRegistry = [];

    public static function bind($key, $values)
    {
        self::$aRegistry[$key] = $values;
    }

    public static function get($key)
    {
        return array_key_exists($key,self::$aRegistry)?self::$aRegistry[$key]:false;
    }
}