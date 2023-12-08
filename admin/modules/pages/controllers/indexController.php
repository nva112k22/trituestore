<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_pages`");
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


    $list_pages = get_pages($start, $num_per_page);
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_pages = db_fetch_array("SELECT * FROM `tbl_pages` WHERE `tbl_pages`.`title` LIKE '%" . $tukhoa . "%'");
    }
    foreach ($list_pages as &$pages) {
        $pages['url_update'] = "?mod=pages&action=update&id={$pages['page_id']}";
        $pages['url_delete'] = "?mod=pages&action=delete&id={$pages['page_id']}";
    }
    unset($pages);
//    $list_users = get_list_users();
//    show_array($list_users);
    
    $data = array(
        'list_pages' => $list_pages,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('index', $data);
}

function addAction() {
    global $error, $success, $title, $slug, $descs, $file, $upload_file, $file_name;
    if (isset($_POST['btn_page'])) {
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

#Kiểm tra mô tả
        if (empty($_POST['descs'])) {
            $error['descs'] = "Không được để trống mô tả";
        } else {
            $descs = $_POST['descs'];
        }

        $user_login = user_login();

//Kết luận
        if (empty($error)) {
            $data = array(
                'title' => $title,
                'slug' => $slug,
                'descs' => $descs,
                'user_id' => get_id_user($user_login),
            );
//            show_array($data);
            $id_insert = db_insert("tbl_pages", $data);
            if (isset($id_insert)) {
                $success['success'] = "Thêm dữ liệu thành công";
            }
//        echo $id_insert;
        }
    }
    load_view('add');
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $slug, $descs, $file;
    if (isset($_POST['btn_page_update'])) {
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

#Kiểm tra mô tả
        if (empty($_POST['descs'])) {
            $error['descs'] = "Không được để trống mô tả";
        } else {
            $descs = $_POST['descs'];
        }

        $user_login = user_login();

//Kết luận
        if (empty($error)) {
//Update
            $data = array(
                'title' => $title,
                'slug' => $slug,
                'descs' => $descs,
                'user_id' => get_id_user($user_login),
            );
//            show_array($data);
            update_page_by_id($id, $data);
            $success['success'] = "Cập nhật tài khoản thành công";
        }
    }
    $info_page = get_page_by_id($id);
    $data['info_page'] = $info_page;
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_pages', "`page_id` = {$id}");
    redirect("?mod=pages");
}
