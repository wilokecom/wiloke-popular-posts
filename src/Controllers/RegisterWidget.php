<?php


namespace wilokePopularPosts\Controllers;


class RegisterWidget
{
    public function __construct()
    {
        add_action('widgets_init',function (){
            register_widget('wilokePopularPosts\Controllers\PopularPostWidget');
        });
    }

}