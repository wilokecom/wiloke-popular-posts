<?php
add_action('widgets_init', 'CreateWidget');
function CreateWidget()
{
    register_widget('popularPosts\Controller\PopularPostWidget');
}