<?php


namespace popularPosts\Database;


use popularPosts\core\App;

class DB
{
    private static $_self;

    public static function makeConnect()
    {
        if (empty(self::$_self)) {
            self::$_self = new \mysqli(
                App::get('config/app')['database']['host'],
                App::get('config/app')['database']['username'],
                App::get('config/app')['database']['password'],
                App::get('config/app')['database']['dbname']
            );
        }
        return self::$_self;
    }


}