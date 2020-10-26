<?php


namespace wilokePopularPosts\Controller;


use wilokePopularPosts\Database\createTable;


class MenuController extends controller
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenu']);
    }

    public function registerMenu()
    {
        add_menu_page('wiloke-PopularPosts',
            'wiloke-PopularPosts',
            'administrator',
            $this->menuSlug1,
            [$this, 'menuSettings']);
    }

    public function menuSettings()
    {
        new createTable();
    }
}