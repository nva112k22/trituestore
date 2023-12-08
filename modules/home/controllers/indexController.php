<?php

function construct() {
    load('helper', 'format');
    load('helper', 'render_menu');
    load_model('index');
}

function indexAction() {
    $category_products = get_list_products_category();
    $list_slider = get_list_slider();
    $list_mobile = get_list_mobile();
    $list_laptop = get_list_laptop();
    $list_airpot = get_list_airpot();
    $list_hot = get_list_hot();
    $after = array_combine(range(1, count($list_mobile)), array_values($list_mobile));
    $list_product = array();
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `tbl_products`.`name` LIKE '%" . $tukhoa . "%'");
    }
//    show_array($list_product);
    if (!empty($list_product)) {
        $after = $list_product;
        $list_laptop = "";
        $list_airpot = "";
        $list_hot = "";
    }
    foreach ($after as $item) {
        $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        $related_image= related_image($item['product_id']);
        $item['image'] = $related_image[0];
        $result[] = $item;
        $after = $result;
    }
    $data = array(
        'category_products' => $category_products,
        'list_slider' => $list_slider,
        'list_product' => $list_product,
        'after' => $after,
        'list_laptop' => $list_laptop,
        'list_airpot' => $list_airpot,
        'list_hot' => $list_hot
    );
    load_view('index', $data);
}

function addAction() {
    
}

function editAction() {
    
}
