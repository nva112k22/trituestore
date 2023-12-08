<?php

function construct() {
    load('lib', 'validation');
    load_model('index');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_users`");
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


    $list_users = get_users($start, $num_per_page);
    foreach ($list_users as &$user) {
        $user['url_update'] = "?mod=users&controller=team&action=update&id={$user['user_id']}";
        $user['url_delete'] = "?mod=users&controller=team&action=delete&id={$user['user_id']}";
    }
    unset($user);

    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
//    $list_users = get_list_users();
//    show_array($list_users);
    $data = array(
        'list_users' => $list_users,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row
    );
    load_view('teamIndex', $data);
}

function updateAction() {
    $id = $_GET['id'];
    global $error, $success, $fullname, $email, $phone_number, $address;
    if (isset($_POST['btn_update'])) {
        $error = array();
        $success = array();

        #Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống fullname";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            $email = $_POST['email'];
        }

        #Kiểm tra sđt
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Không được để trống số điện thoại";
        } else {
            $phone_number = $_POST['phone_number'];
        }

        #Kiểm tra địa chỉ
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống địa chỉ";
        } else {
            $address = $_POST['address'];
        }
        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'phone_number' => $phone_number,
                'address' => $address
            );
            update_user_by_id($id, $data);
            $success['success'] = "Cập nhật tài khoản thành công";
//            redirect('?mod=users&controller=infoAcc');
        }
    }
    $info_user = get_user_by_id($id);
//    show_array($info_user);
    $data['info_user'] = $info_user;
    load_view('update', $data);
//    db_update('tbl_users', $data, "`user_id` = {$id}");
}

function deleteAction() {
    $id = (int) $_GET['id'];

//$sql = "DELETE FROM `tbl_users` WHERE `user_id` = {$id}";
//
//if(mysqli_query($conn, $sql)) {
//    redirect("?mod=users&act=main");
//}
    db_delete('tbl_users', "`user_id` = {$id}");
    redirect("?mod=users&controller=team");
}
