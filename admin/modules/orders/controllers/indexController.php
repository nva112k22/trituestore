<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_orders`");
//echo $num_rows;
//Số bản ghi 1 trang
    $num_per_page = 10;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);
//echo $num_page;
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
//echo $page;
    $start = ($page - 1) * $num_per_page;
//echo $start;


    $list_orders = get_orders($start, $num_per_page);
    foreach ($list_orders as &$orders) {
        $orders['url_update'] = "?mod=orders&action=update&id={$orders['order_id']}";
        $orders['url_delete'] = "?mod=orders&action=delete&id={$orders['order_id']}";
    }
    unset($orders);
//    $list_users = get_list_users();
//    show_array($list_users);
    $data = array(
        'list_orders' => $list_orders,
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
    global $error, $success, $number, $total_price, $status;
    if (isset($_POST['btn_order_update'])) {
        $error = array();
        $success = array();

        $number = $_POST['number'];

        $total_price = $_POST['total_price'];

        #Kiểm tra status
        if (empty($_POST['status'])) {
            $error['status'] = "Không được để trống trạng thái";
        } else {
            $status = $_POST['status'];
        }

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'product_quantity' => $number,
                'total_price' => $total_price,
                'status' => $status,
                'user_id' => get_id_user($user_login)
            );
            update_order_by_id($id, $data);
            $success['success'] = "Cập nhật đơn hàng thành công";
        }
    }
    $info_order = get_order_by_id($id);
    $data['info_order'] = $info_order;
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_orders', "`order_id` = {$id}");
    redirect("?mod=orders");
}

function detailAction() {
    $id = (int) $_GET['id'];
    $list_orders = get_order_by_id($id);
    $list_order_items = get_order_items_by_id($id);
    $list_customer = get_customer_by_id($list_orders['customer_id']);
    $list_paid = get_list_paid();

    $data = array(
        'list_orders' => $list_orders,
        'list_order_items' => $list_order_items,
        'list_customer' => $list_customer,
        'list_paid' => $list_paid
    );
    load_view('detail', $data);
}
