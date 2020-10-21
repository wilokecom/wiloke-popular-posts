<?php
/**
 * Plugin Name: popularPosts
 * Plugin URI: https://wiloke.com
 * Author: VuongKMA
 * Author URI: https://wiloke.com
 * Version: 1.0
 * Description: This is a popularPosts plugin
 */


use popularPosts\Controller\menuController;
use popularPosts\Controller\Settings;
use popularPosts\core\App;
use popularPosts\Database\createTable;
use popularPosts\Database\DB;

define('popularPosts_URI', plugin_dir_url(__FILE__));
define('popularPosts_PATH', plugin_dir_path(__FILE__));
define('popularPosts_version', 1.0);
require_once popularPosts_PATH . 'vendor/autoload.php';
App::bind('config/app', require_once popularPosts_PATH . 'config/app.php');

new menuController();
new DB();
new createTable();
new Settings();
//add_action('init',function (){
//    var_dump(get_post_meta( 24, 'post_views_count', true )); die();
//});
