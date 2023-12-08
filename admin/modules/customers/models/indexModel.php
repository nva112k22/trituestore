<?php

function revenue() {
    $sql = db_query("SELECT SUM(total_price) from tbl_orders");
    $row = mysqli_fetch_array($sql);
    return $row['SUM(total_price)'];
}

function success_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'Hoạt động'");
    return $sql;
}

function handle_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'Chờ duyệt'");
    return $sql;
}

function cancel_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'Đã hủy'");
    return $sql;
}

function update_customer_by_id($id, $data) {
    db_update('tbl_customers', $data, "`customer_id` = '{$id}'");
}

function get_customers($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_customers = db_fetch_array("SELECT * FROM `tbl_customers` ORDER BY customer_id DESC, fullname DESC, phone_number DESC, email DESC, address DESC, orderss DESC, created_date DESC {$where} LIMIT {$start}, {$num_per_page};");
    return $list_customers;
}

function get_customer_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_customers` WHERE `customer_id` = {$id}");
    return $item;
}


function update_order_by_id($id, $data) {
    db_update('tbl_orders', $data, "`order_id` = '{$id}'");
}

function get_order_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_orders` WHERE `order_id` = {$id}");
    return $item;
}
