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

function get_list_img_products($product_id) {
    $result = db_fetch_array("SELECT * FROM `tbl_products` JOIN `tbl_products_image` ON `tbl_products`.`product_id` = `tbl_products_image`.`product_id` JOIN `tbl_images` ON `tbl_products_image`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_products`.`product_id` = '{$product_id}' AND `tbl_products_image`.`pin` = 1");
    return $result;
}

function update_order_by_id($id, $data) {
    db_update('tbl_orders', $data, "`order_id` = '{$id}'");
}

function get_orders($start = 1, $num_per_page = 10, $where = "") {
    if (!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_orders = db_fetch_array("SELECT * FROM `tbl_orders` ORDER BY order_id DESC, product_quantity DESC, total_price DESC, status DESC, created_date DESC {$where} LIMIT {$start}, {$num_per_page};");
    return $list_orders;
}

function get_order_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_orders` JOIN `tbl_order_items` ON `tbl_orders`.`order_id` = `tbl_order_items`.`order_id` WHERE `tbl_orders`.`order_id` = {$id}");
    return $item;
}

function get_order_items_by_id($id) {
    $item = db_fetch_array("SELECT * FROM `tbl_order_items` JOIN `tbl_products_image` ON `tbl_order_items`.`product_id` = `tbl_products_image`.`product_id` JOIN `tbl_images` ON `tbl_products_image`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_order_items`.`order_id` = {$id} AND `tbl_products_image`.`pin` = 1");
    return $item;
}

function related_image($id) {
    $image_product = db_fetch_array("SELECT `tbl_products_image`.`pin`, `tbl_images`.`image_id`, `tbl_images`.`image_url` FROM `tbl_products_image` JOIN `tbl_images` ON `tbl_products_image`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_products_image`.`product_id` = {$id} ORDER BY `tbl_products_image`.`pin` = 1 DESC;");
    $imageUrl = "";
    $imageUrlsById = array();

    foreach ($image_product as $value) {
        $imageUrl = $value['image_url'];
        if (!isset($imageUrlsById[$id])) {
            $imageUrlsById[$id] = array();
        }
        $imageUrlsById[$id][] = $imageUrl;
    }
    foreach ($image_product as &$image_product) {
        $image_product['list_image'] = $imageUrlsById[$id];
    }
    return $image_product['list_image'];
}

function get_id_user($user_login) {
    $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
    $after = array_combine(range(1, count($list_users)), array_values($list_users));
    foreach ($after as $value) {
        return $value['user_id'];
    }
    return false;
}

function total_price($list_order_items) {
    foreach ($list_order_items as $value) {
        $total = $value['quantity'] * $value['price'];
        return $total;
    }
    return false;
}

