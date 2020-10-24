<?php


namespace PopularPosts\Model;


class PopularPostsModel
{
    public static function insertView($data)
    {
        global $wpdb;
        $status = $wpdb->insert('topview',
            [
                'ID' => null,
                'postID' => $data['postID'],
                'Viewed_country' => $data['Viewed_country'],
                'Viewed' => $data['Viewed'],
                'date_time' => null
            ],
            [
                '%s',
                '%s',
                '%s',
                '%s',
                '%d'
            ]);
        return $status;
    }

    public static function selectCountView($postID)
    {
        global $wpdb;
        return $wpdb->get_var("SELECT Viewed FROM `topview` WHERE postID=" . $postID . "");
    }

    public static function updateCountView($data)
    {
        global $wpdb;
         $status=$wpdb->update('topview',
            [
                'Viewed' => $data['Viewed']
            ],
            [
                'postID' => $data['postID']
            ],
            [
                '%s'
            ],
            [
                '%s'
            ]);
         return $status;
    }

    public static function selectTopView($view, $select)
    {
        global $wpdb;
        $views= (int) $view;
        if ($select == 'thisDay' || $select == 'thisWeek' || $select == 'thisMonth') {
            switch ($select) {
                case 'thisDay':
                    $where = " date_time >= now() - INTERVAL 1 DAY";
                    break;
                case 'thisWeek':
                    $where = "date_time >= now() - INTERVAL 7 DAY";
                    break;
                case 'thisMonth':
                    $where = "date_time >= now() - INTERVAL 30 DAY";
                    break;
            }
        } else {
            $where = "date_time BETWEEN date_sub(now(),INTERVAL 1 WEEK) and now()";
        }
        $sql=$wpdb->_real_escape(sprintf("SELECT p.post_title,p.guid FROM topview tv JOIN wp_posts p on p.ID=tv.postID where %s ORDER BY tv.Viewed DESC LIMIT %d",$where, $views));
        return $wpdb->get_results($sql, 'ARRAY_A');
    }
}