<?php

function update_image_by_id($id, $data) {
    db_update('tbl_images', $data, "`image_id` = '{$id}'");
}

function get_media($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_media = db_fetch_array("SELECT * FROM `tbl_images` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_media;
}

function get_list_media() {
    $result = db_fetch_array("SELECT * FROM `tbl_images`");
    return $result;
}

function get_media_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_images` WHERE `image_id` = {$id}");
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