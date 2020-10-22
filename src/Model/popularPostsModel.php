<?php


namespace popularPosts\Model;


use popularPosts\Database\DB;

class popularPostsModel
{
    public static function insertView($data)
    {
        return DB::makeConnect()->query("INSERT INTO `topview`(`ID`, `postID`, `Viewed_country`, `Viewed`, `date_time`) VALUES (null," . $data['postID'] . ",'" . $data['Viewed_country'] . "'," . $data['Viewed'] . ",null)");
    }

    public static function selectCountView($postID)
    {
        return DB::makeConnect()->query("SELECT Viewed FROM `topview` WHERE postID=" . $postID . "")->fetch_assoc();
    }

    public static function updateCountView($data)
    {
        return DB::makeConnect()->query("UPDATE topview set `Viewed`=" . $data['Viewed'] . " where postID=" . $data['postID'] . "");
    }

    public static function selectTopView($view)
    {
        return DB::makeConnect()->query("SELECT p.post_title,p.guid FROM topview tv JOIN wp_posts p on p.ID=tv.postID ORDER BY tv.Viewed DESC LIMIT ".$view."")->fetch_all();
    }
}