<?php


namespace PopularPosts\Controller;


use PopularPosts\Database\createTable;


class menuController extends controller
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenu']);
    }

    public function registerMenu()
    {
        add_menu_page('PopularPosts-CountView',
            'PopularPosts-CountView',
            'administrator',
            $this->menuSlug1,
            [$this, 'menuSettings']);
    }

    public function menuSettings()
    {
        new createTable();
    }
}