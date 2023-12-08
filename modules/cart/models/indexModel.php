<?php

function get_id_user($user_login) {
    $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
    $after = array_combine(range(1, count($list_users)), array_values($list_users));
    foreach ($after as $value) {
        return $value['user_id'];
    }
    return false;
}

function get_order_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_orders` WHERE `order_id` = {$id}");
    return $item;
}
