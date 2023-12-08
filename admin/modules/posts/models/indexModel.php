<?php

function get_list_posts() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts`");
    return $result;
}

function get_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` JOIN `tbl_images` ON `tbl_posts`.`image_id` = `tbl_images`.`image_id` WHERE `post_id` = {$id}");
    return $item;
}

function get_cat_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` JOIN `tbl_posts_category` ON `tbl_posts`.`category_post_id` = `tbl_posts_category`.`category_post_id` WHERE `post_id` = {$id}");
    return $item;
}

function get_status_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` WHERE `post_id` = {$id}");
    return $item;
}

function get_posts($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_posts = db_fetch_array("SELECT * FROM `tbl_posts_category` JOIN `tbl_posts` ON `tbl_posts_category`.`category_post_id` = `tbl_posts`.`category_post_id` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_posts;
}

function update_post_by_id($id, $data) {
    db_update('tbl_posts', $data, "`post_id` = '{$id}'");
}

function update_posts_category_by_id($id, $data) {
    db_update('tbl_posts_category', $data, "`category_post_id` = '{$id}'");
}

function get_posts_category($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_posts_category = db_fetch_array("SELECT * FROM `tbl_posts_category` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_posts_category;
}

function get_list_posts_category() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts_category`");
    return $result;
}

function get_posts_category_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts_category` WHERE `category_post_id` = {$id}");
    return $item;
}

function get_id_user($user_login) {
    $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
    $after = array_combine(range(1, count($list_users)), array_values($list_users));
    foreach ($after as $value) {
        return $value['user_id'];
    }
    return false;
}