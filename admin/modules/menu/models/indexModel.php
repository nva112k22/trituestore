<?php

function get_list_posts_category() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts_category`");
    return $result;
}

function get_list_products_category() {
    $result = db_fetch_array("SELECT * FROM `tbl_products_category`");
    return $result;
}


function get_list_pages() {
    $result = db_fetch_array("SELECT * FROM `tbl_pages`");
    return $result;
}

function update_menu_by_id($id, $data) {
    db_update('tbl_menu', $data, "`menu_id` = '{$id}'");
}

function get_templates($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_templates = db_fetch_array("SELECT * FROM `tbl_templates` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_templates;
}

function get_list_menu() {
    $result = db_fetch_array("SELECT * FROM `tbl_menu`");
    return $result;
}

function get_menu_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_menu` WHERE `menu_id` = {$id}");
    return $item;
}

function get_products_category_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_menu` JOIN `tbl_products_category` ON `tbl_menu`.`category_product_id` = `tbl_products_category`.`category_product_id` WHERE `tbl_menu`.`menu_id` = {$id}");
    return $item;
}

function get_posts_category_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_menu` JOIN `tbl_posts_category` ON `tbl_menu`.`category_post_id` = `tbl_posts_category`.`category_post_id` WHERE `tbl_menu`.`menu_id` = {$id}");
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
