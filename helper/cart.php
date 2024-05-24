<?php

function related_image_cart($id) {
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

function get_info_cat($cat_id) {
    $list_product_cat = db_fetch_array("SELECT * FROM `tbl_products_category`");
    $cat_id_new = $cat_id - 1;
    if (array_key_exists($cat_id_new, $list_product_cat)) {
        $list_product_cat[$cat_id_new]['url'] = "?mod=product&action=cat&category_product_id={$cat_id_new}";
        return $list_product_cat[$cat_id_new];
    }
    return false;
}

function get_list_product_by_cat_id($cat_id) {
    $list_products = db_fetch_array("SELECT * FROM `tbl_products`");
    $result = array();
    foreach ($list_products as $item) {
        if ($cat_id == $item['category_product_id']) {
            $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
            $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
            $related_image = related_image($item['product_id']);
            $item['image'] = $related_image[0];
            $result[] = $item;
        }
    }
    return $result;
}

function get_product_by_id($id) {
//    $list_products = db_fetch_array("SELECT * FROM `tbl_products`");
//    $after = array_combine(range(1, count($list_products)), $list_products);
//        $after = array_filter(array_merge(array(0), $list_products));
//    if (array_key_exists($id-1, $list_products)) {
        $list_product = db_fetch_row("SELECT * FROM `tbl_products` where product_id = '$id';");
    if(!empty($list_product)) {
        $list_product['url_add_cart'] = "?mod=cart&action=add&id={$id}";
        $list_product['url'] = "?mod=product&action=detail&id={$id}";
        $related_image = related_image_cart($id);
        $list_product['image'] = $related_image[0];
        return $list_product;
    }
//    return false;
    redirect("?");
}

function add_cart($id) {
    $list_products = db_fetch_array("SELECT * FROM `tbl_products`");
    $item = get_product_by_id($id);
#Thêm thông tin vào giỏ hàng
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'product_id' => $item['product_id'],
        'url' => $item['url'],
        'name' => $item['name'],
        'price_new' => $item['price_new'],
        'image' => $item['image'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price_new'] * $qty
    ); //cập nhật hóa đơn
    update_info_cart();
}

function update_info_cart() {
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }

        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}

function get_list_buy_cart() {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&action=delete&id={$item['product_id']}";
            $related_image_cart = related_image_cart($item['product_id']);
            $item['image'] = $related_image_cart[0];
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_num_order_cat() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
}

function get_total_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

function delete_cart($id) {
    if (isset($_SESSION['cart'])) {
        #xóa sản phẩm có $id trong giỏ hàng
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
    }
}

function delete_all_cart() {
    if (isset($_SESSION['cart'])) {
        #xóa sản phẩm có $id trong giỏ hàng
        unset($_SESSION['cart']);
        update_info_cart();
    }
}
