<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_orders` JOIN `tbl_order_items` ON `tbl_orders`.`order_id` = `tbl_order_items`.`order_id` ORDER BY code DESC, fullname DESC, product DESC, quantity DESC, price DESC, status DESC, created_date DESC");
//Số bản ghi 1 trang
    $num_per_page = 3;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $start = ($page - 1) * $num_per_page;

    $list_orders = get_orders($start, $num_per_page);
    foreach ($list_orders as &$orders) {
        $orders['url_update'] = "?mod=orders&action=update&id={$orders['order_id']}";
        $orders['url_delete'] = "?&action=delete&id={$orders['order_id']}";
    }
    unset($orders);
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
    global $error, $success, $code, $fullname, $number, $total_price, $status;
    if (isset($_POST['btn_order_update'])) {
        $error = array();
        $success = array();
        #Kiểm tra code
        if (empty($_POST['code'])) {
            $error['code'] = "Không được để trống mã sản phẩm";
        } else {
            $code = $_POST['code'];
        }

        #Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ và tên";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra number
        if (empty($_POST['number'])) {
            $error['number'] = "Không được để trống số lượng";
        } else {
            $number = $_POST['number'];
        }

        #Kiểm tra total_price
        if (empty($_POST['total_price'])) {
            $error['total_price'] = "Không được để trống tổng giá";
        } else {
            $total_price = $_POST['total_price'];
        }

        #Kiểm tra status
        if (empty($_POST['status'])) {
            $error['status'] = "Không được để trống trạng thái";
        } else {
            $status = $_POST['status'];
        }


        //Kết luận
        if (empty($error)) {
            //Update
            $data = array(
                'code' => $code,
                'fullname' => $fullname,
                'number' => $number,
                'total_price' => $total_price,
                'status' => $status
            );
//            show_array($data);
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
    redirect("?");
}
