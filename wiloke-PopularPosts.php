<?php
/**
 * Plugin Name: Wiloke PopularPosts
 * Plugin URI: https://wiloke.com
 * Author: VuongKMA
 * Author URI: https://wiloke.com
 * Version: 1.0
 * Description: This is a wiloke PopularPosts plugin
 */


use wilokePopularPosts\Controllers\MenuController;

use wilokePopularPosts\Controllers\PopularPostWidget;
use wilokePopularPosts\Controllers\RegisterWidget;
use wilokePopularPosts\Core\App;
use wilokePopularPosts\Database\CreateTable;
use wilokePopularPosts\Helpers\Settings;


define('PopularPosts_URI', plugin_dir_url(__FILE__));
define('PopularPosts_PATH', plugin_dir_path(__FILE__));
define('PopularPosts_version', 1.0);
require_once PopularPosts_PATH . 'vendor/autoload.php';
App::bind('config/app', require_once PopularPosts_PATH . 'config/app.php');

new RegisterWidget();
new PopularPostWidget();
new MenuController();
new CreateTable();
new Settings();

