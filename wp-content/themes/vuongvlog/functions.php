<?php
define('VuongVlog', '1.0');
define('THEME_URL',get_template_directory_uri());
include(get_theme_file_path( 'includes/Custom_Nva_Waker.php' ));
//menu
register_nav_menus(array(
    'main-menu' => 'Main Menu'
));

add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);
function my_nav_special_class($classes, $item){
        $classes[] = 'catmenu-dropdown megamenu-holder';
    return $classes;
}
if(!function_exists('lhv_theme_setup')){
    function lhv_theme_setup(){
     add_theme_support('automatic-feed-links');

    }
    add_action('init','lhv_theme_setup');
}