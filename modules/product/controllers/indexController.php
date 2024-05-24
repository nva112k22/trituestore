<?php

function construct() {
    load('helper', 'format');
    load('helper', 'render_menu');
    load('helper', 'pagging');
    load_model('index');
}

function indexAction() {
    $num_rows = db_num_rows("SELECT * FROM `tbl_products`");

//Số bản ghi 1 trang
    $num_per_page = 8;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);

    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    
    $start = ($page - 1) * $num_per_page;

    $list_item = get_products($start, $num_per_page);
    $list_cat_products = get_list_products_category();
//    $list_product = get_list_products();
//    $list_by_url = get_list_url();
//    show_array($category_products);
    if (isset($_POST['submit'])) {
        $selected_val = $_POST['select'];  // Lưu trữ giá trị được chọn trong biến
        if ($selected_val == 1) {
            $list_item = get_products($start, $num_per_page, "", "name ASC");
        } else if ($selected_val == 2) {
            $list_item = get_products($start, $num_per_page, "", "name DESC");
        } else if ($selected_val == 3) {
            $list_item = get_products($start, $num_per_page, "", "price_new DESC");
        } else if ($selected_val == 4) {
            $list_item = get_products($start, $num_per_page, "", "price_new ASC");
        }
    }
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `tbl_products`.`name` LIKE '%" . $tukhoa . "%'");
    }
//    show_array($list_product);
    $list_product = array();
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `tbl_products`.`name` LIKE '%" . $tukhoa . "%'");
    }
//    show_array($list_product);
    if (!empty($list_product)) {
        $list_item = $list_product;
    }
    foreach ($list_item as $item) {
        $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        $related_image= related_image($item['product_id']);
        $item['image'] = $related_image[0];
        $result[] = $item;
        $list_item = $result;
    }
    $data = array(
        'list_cat_products' => $list_cat_products,
        'list_item' => $list_item,
        'num_page' => $num_page,
        'num_rows' => $num_rows,
        'page' => $page,
    );
    load_view('index', $data);
}

function catAction() {
    $category_product_id = (int) $_GET['category_product_id'];
    $num_rows = db_num_rows("SELECT * FROM `tbl_products` WHERE category_product_id='$category_product_id'");

//Số bản ghi 1 trang
    $num_per_page = 8;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);

    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

    $start = ($page - 1) * $num_per_page;
//    $list_item = get_products($start, $num_per_page);
    $order_by = "";
    if (isset($_POST['submit'])) {
        $selected_val = $_POST['select'];  // Lưu trữ giá trị được chọn trong biến
        if ($selected_val == 1) {
            $order_by = "name ASC";
        } else if ($selected_val == 2) {
            $order_by = "name DESC";
        } else if ($selected_val == 3) {
            $order_by = "price_new DESC";
        } else if ($selected_val == 4) {
            $order_by = "price_new ASC";
        }
    }
    
    $list_item = get_products($start, $num_per_page, "category_product_id='$category_product_id'", $order_by);
    
    #Lấy thông tin của danh mục
    $info_cat = get_info_cat($category_product_id);
    #Lấy danh sách sản phẩm
    $list_cat_products = get_list_products_category();

//    show_array($list_product);

    $data = array(
        'list_cat_products' => $list_cat_products,
        'list_item' => $list_item,
        'num_page' => $num_page,
        'num_rows' => $num_rows,
        'page' => $page,
        'info_cat' => $info_cat,
        'category_product_id' => $category_product_id,
    );
    load_view('index', $data);
}

function detailAction() {
    $id = (int) $_GET['id'];
    #Lấy thông tin của danh mục
    $product_item = get_product_by_id($id);
//    show_array($product_item);
    $cat_id = $product_item['category_product_id'];
    $info_cat = get_info_cat(1);
    $list_item = get_list_same_cat($cat_id, $id);
//        show_array($list_item);
//    $related_image = related_image($id);
    $list_cat_products = get_list_products_category();
    $data = array(
        'info_cat' => $info_cat,
        'product_item' => $product_item,
        'list_item' => $list_item,
//        'related_image' => $related_image,
        'list_cat_products' => $list_cat_products,
    );
    load_view('detail', $data);
}
