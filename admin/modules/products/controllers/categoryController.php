<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_products_category`");
//echo $num_rows;
//Số bản ghi 1 trang
    $num_per_page = 3;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);
//echo $num_page;
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
//echo $page;
    $start = ($page - 1) * $num_per_page;
//echo $start;


    $list_products_category = get_products_category($start, $num_per_page);
    foreach ($list_products_category as &$products_category) {
        $products_category['url_update'] = "?mod=products&controller=category&action=update&id={$products_category['category_product_id']}";
        $products_category['url_delete'] = "?mod=products&controller=category&action=delete&id={$products_category['category_product_id']}";
    }
    unset($posts_category);
//    show_array($list_posts_category);
    $data = array(
        'list_products_category' => $list_products_category,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('categoryIndex', $data);
}

function addAction() {
    global $error, $success, $title, $orders, $status, $parent_id;
    if (isset($_POST['btn_add_cate_product'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['title'])) {
            $error['title'] = "Không được để trống tiêu đề";
        } else {
            $title = $_POST['title'];
        }

        #Kiểm tra thứ tự
        if (empty($_POST['orders'])) {
            $error['orders'] = "Không được để trống thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        #Kiểm tra parent_id
        if (empty($_POST['parent_id'])) {
            $error['parent_id'] = "Không được để trống danh mục cha";
        } else {
            $parent_id = $_POST['parent_id'];
        }

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            $data = array(
                'title' => $title,
                'orders' => $orders,
                'parent_id' => $parent_id,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            $id_insert = db_insert("tbl_products_category", $data);
            if (isset($id_insert)) {
                $success['success'] = "Thêm dữ liệu thành công";
            }
//        echo $id_insert;
        }
    }
    load_view('categoryAdd');
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $orders, $status;
    if (isset($_POST['btn_update_cate_product'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['title'])) {
            $error['title'] = "Không được để trống tiêu đề";
        } else {
            $title = $_POST['title'];
        }

        #Kiểm tra thứ tự
        if (empty($_POST['orders'])) {
            $error['orders'] = "Không được để trống thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        #Kiểm tra parent_id
        if (empty($_POST['parent_id'])) {
            $error['parent_id'] = "Không được để trống danh mục cha";
        } else {
            $parent_id = $_POST['parent_id'];
        }

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'title' => $title,
                'orders' => $orders,
                'parent_id' => $parent_id,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            update_products_category_by_id($id, $data);
            $success['success'] = "Cập nhật danh mục thành công";
        }
    }
    $info_products_category = get_products_category_by_id($id);
    $data['info_products_category'] = $info_products_category;
    load_view('categoryUpdate', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_products_category', "`category_product_id` = {$id}");
    redirect("?mod=products&controller=category");
}
