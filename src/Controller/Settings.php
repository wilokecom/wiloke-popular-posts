<?php


namespace popularPosts\Controller;


use popularPosts\Model\popularPostsModel;

class Settings
{
    public static function countView($postID)
    {
        $data['postID'] = $postID;
//        $ip = self::clientIP();
//        $data['Viewed_country'] =  json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
        $data['Viewed_country']='VN';
        $data['Viewed'] = popularPostsModel::selectCountView($postID);
        if (empty($data['Viewed'])) {
            $data['Viewed'] = 1;
            popularPostsModel::insertView($data);
        } else {
            $data['Viewed'] = popularPostsModel::selectCountView($postID)['Viewed'];
            $data['Viewed']++;
            popularPostsModel::updateCountView($data);
        }
    }

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

}