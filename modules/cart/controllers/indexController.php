<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
}

function indexAction() {
    $list_buy = get_list_buy_cart();
    $data = array(
        'list_buy' => $list_buy,
    );
    load_view('index', $data);
}

function addAction() {
    #Lấy được thông tin sản phẩm cần thêm vào giỏ hàng
    $id = (int) $_GET['id'];
    add_cart($id);
    redirect('?mod=cart');
}

function deleteAction() {
    //Xóa sản phẩm nào?
    $id = (int) $_GET['id'];
    show_array($_SESSION);

    delete_cart($id);
    redirect("?mod=cart");
}

function deleteAllAction() {
    delete_all_cart();
    redirect("?mod=cart");
}

function update_ajaxAction() {
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    //Lấy thông tin sản phẩm theo id
    $item = get_product_by_id($id);

    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        //Cập nhật số lượng
        $_SESSION['cart']['buy'][$id]['qty'] = $qty;
        //Tính và cập nhật tổng tiền
        $sub_total = $qty * $item['price_new'];
        $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
        //Cập nhật toàn bộ giỏ hàng
        update_info_cart();
        //Lấy tổng giá trị giỏ hàng
        $total = get_total_cart();

        //Giá trị trả về 
        $data = array(
            'sub_total' => currency_format($sub_total),
            'total' => currency_format($total)
        );
        echo json_encode($data);
    }
}

function checkoutAction() {
    global $error, $success, $fullname, $email, $address, $phone, $note;
    $list_customer = db_fetch_array("SELECT * FROM `tbl_customers`");
    if (isset($_POST['order-now'])) {
        $error = array();
        $success = array();
        #Kiểm tra tên
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ và tên";
        } else {
            $fullname = $_POST['fullname'];
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
            $address = $_POST['address'];
        }

        #Kiểm tra phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống số điện thoại";
        } else {
            $phone = $_POST['phone'];
        }

        #Kiểm tra note
        if (empty($_POST['note'])) {
            $error['note'] = "Không được để ghi chú";
        } else {
            $note = $_POST['note'];
        }

        $payment = $_POST['payment-method'];

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            $data_customer = array(
                'fullname' => $fullname,
                'email' => $email,
                'address' => $address,
                'phone_number' => $phone,
            );
            $id_insert_customer = db_insert("tbl_customers", $data_customer);
            $data = array(
                'note' => $note,
                'payment' => $payment,
                'fullname' => $fullname,
                'product_quantity' => $_SESSION['cart']['info']['num_order'],
                'total_price' => $_SESSION['cart']['info']['total'],
                'user_id' => get_id_user($user_login),
                'customer_id' => $id_insert_customer
            );
            $id_insert = db_insert("tbl_orders", $data);
            if (isset($id_insert)) {
                $success['success'] = "Đặt hàng thành công";
            }
            $get_order_by_id = get_order_by_id($id_insert);
            $created_date = date("d-m-Y H:i:s", strtotime($get_order_by_id['created_date']));
            $payment = $get_order_by_id['payment'];
            $send_to_email = $email;
            $sent_to_fullname = $fullname;
            $subject = "Xác nhận đơn hàng #$id_insert";
            $content = "<p>Chào bạn: <b>$fullname</b></p>"
                    . "<p>Bạn đã đặt hàng vào ngày: <b>$created_date</b></p>"
                    . "<p>Số điện thoại của bạn: <b>$phone</b></p>"
                    . "<p>Địa chỉ của bạn: <b>$address</b></p>"
                    . "<p>Ghi chú: <b>$note</b></p>"
                    . "Hình thức thanh toán: <b>$payment</b>";

            send_mail($send_to_email, $sent_to_fullname, $subject, $content);
//            $data_items = array(
//                'order_id' => $order_detail,
//                'product_id' => ,
//                'quantity' => ,
//                'price' =>
//            )
//            print_r($data_id);
            foreach ($_SESSION['cart']['buy'] as $data_id) {
                $data_items = array(
                    'order_id' => $id_insert,
                    'code' => $data_id['code'],
                    'product_id' => $data_id['product_id'],
                    'quantity' => $data_id['qty'],
                    'price' => $data_id['price_new'],
                    'product' => $data_id['name'],
                    'sub_total' => $data_id['sub_total']
                );
                $id_insert_order = db_insert("tbl_order_items", $data_items);
            }
        }
    }
    $list_buy = get_list_buy_cart();
    $data = array(
        'list_buy' => $list_buy,
    );
    if (empty($id_insert_order)) {
        load_view('checkout', $data);
    } else {
        load_view('order_detail', $data);
    }
}

function unsetAction() {
    unset($_SESSION['cart']);
    redirect('?');
}
