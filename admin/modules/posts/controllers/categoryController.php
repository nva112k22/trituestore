<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_posts_category`");
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


    $list_posts_category = get_posts_category($start, $num_per_page);
    foreach ($list_posts_category as &$posts_category) {
        $posts_category['url_update'] = "?mod=posts&controller=category&action=update&id={$posts_category['category_post_id']}";
        $posts_category['url_delete'] = "?mod=posts&controller=category&action=delete&id={$posts_category['category_post_id']}";
    }
    unset($posts_category);
//    show_array($list_posts_category);
    $data = array(
        'list_posts_category' => $list_posts_category,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('categoryIndex', $data);
}

function addAction() {
    global $error, $success, $name, $orders, $status;
    if (isset($_POST['btn_add_cate_post'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống tiêu đề";
        } else {
            $name = $_POST['name'];
        }

        #Kiểm tra slug
        if (empty($_POST['slug'])) {
            $error['slug'] = "Không được để trống slug";
        } else {
            $slug = $_POST['slug'];
        }


        #Kiểm tra thứ tự
        if (empty($_POST['orders'])) {
            $error['orders'] = "Không được để trống thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'orders' => $orders,
                'slug' => $slug,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            $id_insert = db_insert("tbl_posts_category", $data);
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
    if (isset($_POST['btn_update_cate_post'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống tiêu đề";
        } else {
            $name = $_POST['name'];
        }

        #Kiểm tra slug
        if (empty($_POST['slug'])) {
            $error['slug'] = "Không được để trống slug";
        } else {
            $slug = $_POST['slug'];
        }

        #Kiểm tra thứ tự
        if (empty($_POST['orders'])) {
            $error['orders'] = "Không được để trống thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'name' => $name,
                'orders' => $orders,
                'slug' => $slug,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            update_posts_category_by_id($id, $data);
            $success['success'] = "Cập nhật danh mục thành công";
        }
    }
    $info_posts_category = get_posts_category_by_id($id);
    $data['info_posts_category'] = $info_posts_category;
    load_view('categoryUpdate', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_posts_category', "`category_post_id` = {$id}");
    redirect("?mod=posts&controller=category");
}
