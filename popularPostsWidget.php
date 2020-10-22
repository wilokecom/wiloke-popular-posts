<?php
add_action('widgets_init', 'Create_Widget');
function Create_Widget()
{
    register_widget('popularPosts\Controller\popularPost_Widget');
}