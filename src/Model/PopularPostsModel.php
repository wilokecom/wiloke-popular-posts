<?php


namespace wilokePopularPosts\Model;


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
                    $where = $wpdb->prepare(
                        "date_time >= now() - INTERVAL %d DAY",
                        1
                    );
                    break;
                case 'thisWeek':
                    $where = $wpdb->prepare(
                        "date_time >= now() - INTERVAL %d DAY",
                        7
                    );
                    break;
                case 'thisMonth':
                    $where = $wpdb->prepare(
                        "date_time >= now() - INTERVAL %d DAY",
                        30
                    );
                    break;
            }
        } else {
            $where= $wpdb->prepare("date_time BETWEEN date_sub(now(),INTERVAL %d WEEK) and now()",1);
        }
        return $wpdb->get_results(
            $wpdb->prepare(
                "SELECT p.post_title,p.guid FROM topview tv JOIN wp_posts p on p.ID=tv.postID where $where  ORDER BY tv.Viewed DESC LIMIT %d", $views
            ),'ARRAY_A'
        );
    }
}