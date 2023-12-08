<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
}
function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_customers`");
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


    $list_cutomers = get_customers($start, $num_per_page);
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_cutomers = db_fetch_array("SELECT * FROM `tbl_customers` WHERE `tbl_customers`.`fullname` LIKE '%" . $tukhoa . "%' ORDER BY customer_id DESC, fullname DESC, phone_number DESC, email DESC, address DESC, orderss DESC, created_date DESC");
    }
    foreach ($list_cutomers as &$customers) {
        $customers['url_update'] = "?mod=customers&action=update&id={$customers['customer_id']}";
        $customers['url_delete'] = "?mod=customers&action=delete&id={$customers['customer_id']}";
    }
    unset($customers);
//    show_array($list_cutomers);
    $data = array(
        'list_cutomers' => $list_cutomers,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('index', $data);
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $fullname, $phone_number, $email, $address, $orderss;
    if (isset($_POST['btn_order_update'])) {
        $error = array();
        $success = array();
        #Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống mã sản phẩm";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra phone_number
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Không được để trống số điện thoại";
        } else {
            $phone_number = $_POST['phone_number'];
        }

        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            $email = $_POST['email'];
        }

        #Kiểm tra address
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống địa chỉ";
        } else {
            $address= $_POST['address'];
        }

        #Kiểm tra orderss
        if (empty($_POST['orderss'])) {
            $error['orderss'] = "Không được để trống đơn hàng";
        } else {
            $orderss = $_POST['orderss'];
        }


        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'fullname' => $fullname,
                'phone_number' => $phone_number,
                'email' => $email,
                'address' => $address,
                'orderss' => $orderss
            );
//            show_array($data);
                update_customer_by_id($id, $data);
                $success['success'] = "Cập nhật thông tin khách hàng thành công";
        }
    }
    $info_customer = get_customer_by_id($id);
    $data['info_customer'] = $info_customer;
    load_view('update', $data);
}

function deleteCustomerAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_customers', "`customer_id` = {$id}");
    redirect("?mod=customers");
}
