<?php

function update_template_by_id($id, $data) {
    db_update('tbl_templates', $data, "`template_id` = '{$id}'");
}

function get_templates($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_templates = db_fetch_array("SELECT * FROM `tbl_templates` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_templates;
}

function get_list_pages() {
    $result = db_fetch_array("SELECT * FROM `tbl_pages`");
    return $result;
}

function get_template_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_templates` WHERE `template_id` = {$id}");
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
