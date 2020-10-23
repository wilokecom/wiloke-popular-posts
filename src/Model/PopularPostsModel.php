<?php


namespace popularPosts\Model;


use popularPosts\Database\DB;

class PopularPostsModel
{
    public static function insertView($data)
    {
        return DB::makeConnect()->query("INSERT INTO `topview`(`ID`, `postID`, `Viewed_country`, `Viewed`, `date_time`) VALUES (null," . $data['postID'] . ",'" . $data['Viewed_country'] . "'," . $data['Viewed'] . ",null)");
    }

    public static function selectCountView($postID)
    {
        return DB::makeConnect()->get_var("SELECT Viewed FROM `topview` WHERE postID=" . $postID . "");
    }

    public static function updateCountView($data)
    {
        return DB::makeConnect()->query("UPDATE topview set `Viewed`=" . $data['Viewed'] . " where postID=" . $data['postID'] . "");
    }

    public static function selectTopView($view,$select)
    {
        if ($select == 'thisDay' || $select == 'thisWeek' || $select == 'thisMonth') {
            switch ($select) {
                case 'thisDay':
                    $where = "date_time >= now() - INTERVAL 1 DAY";
                    break;
                case 'thisWeek':
                    $where = "date_time >= now() - INTERVAL 7 DAY";
                    break;
                case 'thisMonth':
                    $where = "date_time >= now() - INTERVAL 30 DAY";
                    break;
            }
        }
        else{
            $where="date_time BETWEEN date_sub(now(),INTERVAL 1 WEEK) and now()";
        }
        $sql=sprintf("SELECT p.post_title,p.guid FROM topview tv JOIN wp_posts p on p.ID=tv.postID where %s ORDER BY tv.Viewed DESC LIMIT %s",$where,$view);
        return DB::makeConnect()->get_results($sql,'ARRAY_A');
    }
}