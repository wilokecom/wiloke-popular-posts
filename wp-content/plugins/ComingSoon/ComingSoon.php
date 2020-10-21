<?php
/**
 * Plugin Name: Comingsoon
 * Plugin URI: https://wiloke.com
 * Author: VuongKMA
 * Author URI: https://wiloke.com
 * Version: 1.0
 * Description: This is a comingsoon plugin
 */


use ComingSoon\Controllers\EnqueueScriptController;
use ComingSoon\Controllers\FontEndController;
use ComingSoon\Controllers\menuController;
use ComingSoon\Helpers\App;

define('COMINGSOON_URI', plugin_dir_url(__FILE__));
define('COMINGSOON_PATH', plugin_dir_path(__FILE__));
define('COMINGSOON_VESION', '1.0');

require_once COMINGSOON_PATH . 'vendor/autoload.php';
App::bind('config/settings.php', require_once COMINGSOON_PATH . 'config/Settings.php');

new MenuController;
new EnqueueScriptController();
new FontEndController();
