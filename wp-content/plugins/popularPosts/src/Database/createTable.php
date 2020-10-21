<?php


namespace popularPosts\Database;


class createTable
{
    public function __construct()
    {
        $this->createTable();
    }

    public function createTable()
    {
        global $wpdb;
        $charsetCollect = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE IF NOT EXISTS Topview(
        ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
		postID bigint(20) UNSIGNED,
		Viewed_country varchar(100) NOT NULL,
		Viewed bigint not null,
		date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		FOREIGN KEY (postID) REFERENCES wp_posts(ID) ON DELETE CASCADE,
		PRIMARY KEY (ID)
        ),$charsetCollect";
        return DB::makeConnect()->query($sql);
    }

}