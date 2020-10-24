<?php


namespace PopularPosts\core;


class App
{
    private static $aRegister = [];

    public static function bind($key, $values)
    {
        self::$aRegister[$key] = $values;
    }

    public static function get($key)
    {
        return array_key_exists($key,self::$aRegister)?self::$aRegister[$key]:false;
    }
}