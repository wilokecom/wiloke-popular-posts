<?php
/**
 * Plugin Name: PopularPosts
 * Plugin URI: https://wiloke.com
 * Author: VuongKMA
 * Author URI: https://wiloke.com
 * Version: 1.0
 * Description: This is a PopularPosts plugin
 */


use PopularPosts\Controller\menuController;
use PopularPosts\Controller\PopularPostWidget;
use PopularPosts\Controller\Settings;
use PopularPosts\core\App;
use PopularPosts\Database\createTable;


define('popularPosts_URI', plugin_dir_url(__FILE__));
define('popularPosts_PATH', plugin_dir_path(__FILE__));
define('popularPosts_version', 1.0);
require_once popularPosts_PATH . 'vendor/autoload.php';
require_once popularPosts_PATH . 'PopularPostsWidget.php';
App::bind('config/app', require_once popularPosts_PATH . 'config/app.php');

new menuController();
new createTable();
new Settings();
new PopularPostWidget();
