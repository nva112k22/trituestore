<?php

function revenue() {
    $sql = db_query("SELECT SUM(total_price) from tbl_orders");
    $row = mysqli_fetch_array($sql);
    return $row['SUM(total_price)'];
}

function success_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'shipped'");
    return $sql;
}

function handle_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'delivered'");
    return $sql;
}

function cancel_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_orders` WHERE STATUS = 'canceled'");
    return $sql;
}

function update_order_by_id($id, $data) {
    db_update('tbl_orders', $data, "`order_id` = '{$id}'");
}

function get_orders($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_orders = db_fetch_array("SELECT * FROM `tbl_orders` JOIN `tbl_order_items` ON `tbl_orders`.`order_id` = `tbl_order_items`.`order_id` ORDER BY code DESC, fullname DESC, product DESC, quantity DESC, price DESC, status DESC, created_date DESC {$where} LIMIT {$start}, {$num_per_page};");
    return $list_orders;
}

function get_order_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_orders` WHERE `order_id` = {$id}");
    return $item;
}