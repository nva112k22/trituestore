<?php

function get_users($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_users = db_fetch_array("SELECT * FROM `tbl_users` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_users;
}

function check_password($password) {
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `password` = '{$password}'");
//    echo $check_user;
    if ($check_user > 0)
        return true;
    return false;
}

function get_user_by_username($username) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    if (!empty($item))
        return $item;
}

function update_user_login($username, $data) {
    db_update('tbl_users', $data, "`username` = '{$username}'");
}

function update_user_by_id($id, $data) {
    db_update('tbl_users', $data, "`user_id` = '{$id}'");
}

function update_pass($data, $username) {
    db_update('tbl_users', $data, "`username` = '{$username}'");
}

function check_email($email) {
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '{$email}'");
    if ($check > 0)
        return true;
    return false;
}

function check_login($username, $password) {
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND `password` = '{$password}' AND `admin`='0'");
//    echo $check_user;
    if ($check_user > 0)
        return true;
    return false;
}

function info_user($label = 'id') {
    $user_login = $_SESSION['user_login'];
    $user = db_fetch_array("SELECT * FROM `tbl_users` WHERE `username` = '{$user_login}'");
    return $user[$label];
}

function add_user($data) {
    return db_insert('tbl_users', $data);
}

function user_exists($username, $email) {
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '{$email}' OR `username` = '{$username}'");
//    echo $check_user;
    if ($check_user > 0)
        return true;
    return false;
}

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

