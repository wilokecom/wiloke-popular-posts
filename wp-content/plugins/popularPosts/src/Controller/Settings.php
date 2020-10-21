<?php


namespace popularPosts\Controller;


class Settings
{
    public static function clientIP()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = sanitize_text_field($_SERVER['HTTP_CLIENT_IP']);
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = sanitize_text_field($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = sanitize_text_field($_SERVER['HTTP_X_FORWARDED']);
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = sanitize_text_field($_SERVER['HTTP_FORWARDED_FOR']);
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = sanitize_text_field($_SERVER['HTTP_FORWARDED']);
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = sanitize_text_field($_SERVER['REMOTE_ADDR']);
        } else {
            $ipaddress = false;
        }

        return $ipaddress;
    }

    public static function countView($postID)
    {
            $count_key = 'wpb_post_views_count';
            $count = get_post_meta($postID, $count_key, true);
            if($count==''){
                $count = 0;
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
            }else{
                $count++;
                update_post_meta($postID, $count_key, $count);
            }
    }

}