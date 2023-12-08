<?php

function update_slider_by_id($id, $data) {
    db_update('tbl_slider', $data, "`slider_id` = '{$id}'");
}

function get_slider($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_slider = db_fetch_array("SELECT * FROM `tbl_slider` JOIN `tbl_images` ON `tbl_slider`.`image_id` = `tbl_images`.`image_id` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_slider;
}

function get_list_pages() {
    $result = db_fetch_array("SELECT * FROM `tbl_pages`");
    return $result;
}

function get_slider_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_slider` JOIN `tbl_images` ON `tbl_slider`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_slider`.`slider_id` = {$id}");
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

function update_image_by_id($id_img, $data_img) {
    db_update('tbl_images', $data_img, "`image_id` = '{$id_img}'");
}
