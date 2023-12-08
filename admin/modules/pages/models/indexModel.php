<?php

function update_page_by_id($id, $data) {
    db_update('tbl_pages', $data, "`page_id` = '{$id}'");
}

function get_pages($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_pages = db_fetch_array("SELECT * FROM `tbl_pages` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_pages;
}

function get_list_pages() {
    $result = db_fetch_array("SELECT * FROM `tbl_pages`");
    return $result;
}

function get_page_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_pages` WHERE `page_id` = {$id}");
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