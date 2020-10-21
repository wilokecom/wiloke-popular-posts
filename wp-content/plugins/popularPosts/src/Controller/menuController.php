<?php


namespace popularPosts\Controller;


use popularPosts\Database\createTable;
use popularPosts\Database\DB;

class menuController extends controller
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenu']);
    }

    public function registerMenu()
    {
        add_menu_page('popularPosts-CountView',
            'popularPosts-CountView',
            'administrator',
            $this->menuSlug1,
            [$this, 'menuSettings']);
    }

    public function menuSettings()
    {
        new createTable();
    }
}