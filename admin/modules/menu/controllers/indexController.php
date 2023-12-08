<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
    load('helper', 'data_tree');
}

function indexAction() {
    global $error, $success, $title, $slug, $page, $product, $post, $orders;
    if (isset($_POST['btn_menu'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['title'])) {
            $error['title'] = "Không được để trống tiêu đề";
        } else {
            $title = $_POST['title'];
        }

        #Kiểm tra slug
        if (empty($_POST['slug'])) {
            $error['slug'] = "Không được để trống slug";
        } else {
            $slug = $_POST['slug'];
        }

        #Kiểm tra page
        if (empty($_POST['page'])) {
            $error['page'] = "Vui lòng chọn trang";
        } else {
            $page = $_POST['page'];
        }

        #Kiểm tra product
        if (empty($_POST['product'])) {
            $error['product'] = "Vui lòng chọn sản phẩm";
        } else {
            $product = $_POST['product'];
        }

        #Kiểm tra post
        if (empty($_POST['post'])) {
            $error['post'] = "Vui lòng chọn bài viết";
        } else {
            $post = $_POST['post'];
        }

        #Kiểm tra orders
        if (empty($_POST['orders'])) {
            $error['orders'] = "Vui lòng chọn thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        $user_login = user_login();
        //Kết luận
        if (empty($error)) {
            $data = array(
                'name' => $title,
                'slug' => $slug,
                'pages' => $page,
                'category_product_id' => $product,
                'category_post_id' => $post,
                'orders' => $orders,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            $id_insert = db_insert("tbl_menu", $data);
            if (isset($id_insert)) {
                $success['success'] = "Thêm dữ liệu thành công";
            }
//        echo $id_insert;
        }
    }
    $list_page = get_list_pages();
    $list_cate_product = get_list_products_category();
    $list_cate_post = get_list_posts_category();
    $list_menu = get_list_menu();
    $result_product = data_tree($list_cate_product);
    $result_post = data_tree_post($list_cate_post);
    foreach ($list_menu as &$menu) {
        $menu['url_update'] = "?mod=menu&action=update&id={$menu['menu_id']}";
        $menu['url_delete'] = "?mod=menu&action=delete&id={$menu['menu_id']}";
    }
    unset($menu);
    $data = array(
        'list_menu' => $list_menu,
        'list_page' => $list_page,
        'result_product' => $result_product,
        'result_post' => $result_post,
        'created_user' => user_login()
    );

    load_view('index', $data);
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $slug, $descs;
    if (isset($_POST['btn_update_menu'])) {
        $error = array();
        $success = array();
        #Kiểm tra tiêu đề
        if (empty($_POST['title'])) {
            $error['title'] = "Không được để trống tiêu đề";
        } else {
            $title = $_POST['title'];
        }

        #Kiểm tra slug
        if (empty($_POST['slug'])) {
            $error['slug'] = "Không được để trống slug";
        } else {
            $slug = $_POST['slug'];
        }

        #Kiểm tra page
        if (empty($_POST['page'])) {
            $error['page'] = "Vui lòng chọn trang";
        } else {
            $page = $_POST['page'];
        }

        #Kiểm tra product
        if (empty($_POST['product'])) {
            $error['product'] = "Vui lòng chọn sản phẩm";
        } else {
            $product = $_POST['product'];
        }

        #Kiểm tra post
        if (empty($_POST['post'])) {
            $error['post'] = "Vui lòng chọn bài viết";
        } else {
            $post = $_POST['post'];
        }

        #Kiểm tra orders
        if (empty($_POST['orders'])) {
            $error['orders'] = "Vui lòng chọn thứ tự";
        } else {
            $orders = $_POST['orders'];
        }

        $user_login = user_login();
        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'name' => $title,
                'slug' => $slug,
                'pages' => $page,
                'category_product_id' => $product,
                'category_post_id' => $post,
                'orders' => $orders,
                'user_id' => get_id_user($user_login)
            );
//            show_array($data);
            update_menu_by_id($id, $data);
            $success['success'] = "Cập nhật menu thành công";
        }
    }
    $info_menu = get_menu_by_id($id);
    $list_page = get_list_pages();
    $list_cate_product = get_list_products_category();
    $list_cate_post = get_list_posts_category();
    $cate_product = get_products_category_by_id($id);
    $cate_post = get_posts_category_by_id($id);
    $result_product = data_tree($list_cate_product);
    $result_post = data_tree_post($list_cate_post);

    $data = array(
        'info_menu' => $info_menu,
        'list_page' => $list_page,
        'cate_product' => $cate_product,
        'cate_post' => $cate_post,
        'result_product' => $result_product,
        'result_post' => $result_post
    );
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_menu', "`menu_id` = {$id}");
    redirect("?mod=menu");
}
