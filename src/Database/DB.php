<?php


namespace popularPosts\Database;


use popularPosts\core\App;

class DB
{
    public static function makeConnect()
    {
       global $wpdb;
        return $wpdb;
    }


}