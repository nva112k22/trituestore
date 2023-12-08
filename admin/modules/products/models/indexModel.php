<?php

function success_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_products` WHERE STATUS = 'Đã đăng'");
    return $sql;
}

function handle_order() {
    $sql = db_num_rows("SELECT * FROM `tbl_products` WHERE STATUS = 'Chờ duyệt'");
    return $sql;
}

function get_products($start = 1, $num_per_page = 10, $where = "") {
    if (!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_products = db_fetch_array("SELECT * FROM `tbl_products` JOIN `tbl_products_image` ON `tbl_products`.`product_id` = `tbl_products_image`.`product_id` JOIN `tbl_images` ON `tbl_products_image`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_products_image`.`pin` = 1 {$where} LIMIT {$start}, {$num_per_page}");
    return $list_products;
}

function get_list_posts() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts`");
    return $result;
}

function get_product_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_products` JOIN `tbl_products_category` ON `tbl_products`.`category_product_id` = `tbl_products_category`.`category_product_id` WHERE `tbl_products`.`product_id` = {$id}");
    return $item;
}

function update_product_by_id($id, $data) {
    db_update('tbl_products', $data, "`product_id` = '{$id}'");
}

function update_image_by_id($id, $data_img) {
    db_update('tbl_products_image', $data_img, "`product_id` = '{$id}'");
}

function update_products_category_by_id($id, $data) {
    db_update('tbl_products_category', $data, "`category_product_id` = '{$id}'");
}

function get_products_category($start = 1, $num_per_page = 10, $where = "") {
    if (!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_products_category = db_fetch_array("SELECT * FROM `tbl_products_category` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_products_category;
}

function get_list_products_category() {
    $result = db_fetch_array("SELECT * FROM `tbl_products_category`");
    return $result;
}

function get_products_category_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_products` JOIN `tbl_products_category` ON `tbl_products`.`category_product_id` = `tbl_products_category`.`category_product_id` WHERE `tbl_products`.`category_product_id` = {$id}");
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
