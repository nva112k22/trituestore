<?php

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

function get_posts($start = 1, $num_per_page = 10, $where = "") {
    if(!empty($where)) {
        $where = "WHERE {$where}";
    }
    $list_posts = db_fetch_array("SELECT * FROM `tbl_posts` {$where} LIMIT {$start}, {$num_per_page}");
    return $list_posts;
}

function get_list_posts() {
    $result = db_fetch_array("SELECT * FROM `tbl_posts`");
    return $result;
}

function get_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` WHERE `post_id` = {$id}");
    return $item;
}

function get_list_hot() {
    $list_products = db_fetch_array("SELECT * FROM `tbl_products` WHERE `price_new` % 3 = 0;");
//    $after = array_combine(range(1, count($list_products)), array_values($list_products));
    $result = array(); //Mảng chứa danh sách sản phẩm theo cat_id
    foreach ($list_products as $item) {
        $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        $related_image= related_image($item['product_id']);
        $item['image'] = $related_image[0];
        $result[] = $item;
    }
    return $result;
}