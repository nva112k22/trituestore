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

function get_list_same_cat($catName, $id) {
    $list_item = db_fetch_array("SELECT * FROM `tbl_products` WHERE category_product LIKE '%$catName%' and NOT product_id = {$id}");
    $result = array(); //Mảng chứa danh sách sản phẩm theo cat_id
    foreach ($list_item as $item) {
        $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        $related_image= related_image($item['product_id']);
        $item['image'] = $related_image[0];
        $result[] = $item;
    }
    return $result;
}

function get_info_cat_pr($category_product_id) {
    $list_product_cat = db_fetch_array("SELECT * FROM `tbl_products_category`");
    if (array_key_exists($category_product_id, $list_product_cat)) {
        $list_product_cat[$category_product_id]['url'] = "?mod=product&act=main&category_product_id={$category_product_id}";
        return $list_product_cat[$category_product_id];
    }
    return false;
}

function get_products($start = 1, $num_per_page = 10, $where = "", $order_by = "") {
    if (!empty($where)) {
        $where = "WHERE {$where}";
    }
    if (!empty($order_by)) {
        $order_by = "ORDER BY {$order_by}";
    }
    $list_pages = db_fetch_array("SELECT * FROM `tbl_products` {$where} {$order_by} LIMIT {$start}, {$num_per_page}");
    $result = array(); //Mảng chứa danh sách sản phẩm theo cat_id
    foreach ($list_pages as $item) {
        $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        $related_image= related_image($item['product_id']);
        $item['image'] = $related_image[0];
        $result[] = $item;
    }
    return $result;
}

function get_list_products_category() {
    $result = db_fetch_array("SELECT * FROM `tbl_products_category`");
    return $result;
}

