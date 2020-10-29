<?php
/**
 * Plugin Name: wiloke-PopularPosts
 * Plugin URI: https://wiloke.com
 * Author: VuongKMA
 * Author URI: https://wiloke.com
 * Version: 1.0
 * Description: This is a wiloke-PopularPosts plugin
 */


use wilokePopularPosts\Controller\MenuController;
use wilokePopularPosts\Controller\PopularPostWidget;
use wilokePopularPosts\Core\App;
use wilokePopularPosts\Database\CreateTable;
use wilokePopularPosts\Helpers\Settings;


define('popularPosts_URI', plugin_dir_url(__FILE__));
define('popularPosts_PATH', plugin_dir_path(__FILE__));
define('popularPosts_version', 1.0);
require_once popularPosts_PATH . 'vendor/autoload.php';
require_once popularPosts_PATH . 'PopularPostsWidget.php';
App::bind('config/app', require_once popularPosts_PATH . 'config/app.php');
new MenuController();
new CreateTable();
new Settings();
new PopularPostWidget();
