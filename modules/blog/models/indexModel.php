<?php

function get_posts($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_posts = db_fetch_array("SELECT * FROM `tbl_posts` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_posts;
}

function get_list_posts() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts`");
    return $result;
}

function get_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` WHERE `post_id` = {$id}");
    return $item;
}