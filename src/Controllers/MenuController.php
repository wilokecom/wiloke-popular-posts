<?php


namespace wilokePopularPosts\Controllers;


use wilokePopularPosts\Database\createTable;


class MenuController extends controller
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenu']);
    }

    public function registerMenu()
    {
        add_menu_page('Wiloke PopularPosts',
            'Wiloke PopularPosts',
            'administrator',
            $this->menuPopularPost,
            [$this, 'menuSettings']);
    }

    public function menuSettings()
    {
        new createTable();
    }
}