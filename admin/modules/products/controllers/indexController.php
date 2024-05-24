<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
    load('helper', 'format');
    load('helper', 'data_tree');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_products`");
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


    $list_products = get_products($start, $num_per_page);
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_products = db_fetch_array("SELECT * FROM `tbl_products` JOIN `tbl_products_image` ON `tbl_products`.`product_id` = `tbl_products_image`.`product_id` JOIN `tbl_images` ON `tbl_products_image`.`image_id` = `tbl_images`.`image_id` WHERE `tbl_products_image`.`pin` = 1 AND `tbl_products`.`name` LIKE '%" . $tukhoa . "%'");
    }
    foreach ($list_products as &$products) {
        $products['url_update'] = "?mod=products&action=update&id={$products['product_id']}";
        $products['url_delete'] = "?mod=products&action=delete&id={$products['product_id']}";
    }
    unset($products);
//    $list_users = get_list_users();
//    show_array($list_users);
//    $related_image = related_image($id);

    $data = array(
        'list_products' => $list_products,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login(),
    );
    load_view('index', $data);
}

function addAction() {
    global $error, $success, $product_name, $price_new, $price_old, $descs, $file, $upload_file, $file_name, $parent_Cat, $status;

    if (isset($_POST['btn_add_products'])) {
        $error = array();
        $success = array();
        #Kiểm tra tên
        if (empty($_POST['product_name'])) {
            $error['product_name'] = "Không được để trống tên sản phẩm";
        } else {
            $product_name = $_POST['product_name'];
        }

        #Kiểm tra code
        if (empty($_POST['product_code'])) {
            $error['product_code'] = "Không được để trống mã sản phẩm";
        } else {
            $product_code = $_POST['product_code'];
        }

        #Kiểm tra price_new
        if (empty($_POST['price_new'])) {
            $error['price_new'] = "Không được để trống giá mới";
        } else {
            $price_new = $_POST['price_new'];
        }

        #Kiểm tra price_old
        if (empty($_POST['price_old'])) {
            $error['price_old'] = "Không được để trống giá cũ";
        } else {
            $price_old = $_POST['price_old'];
        }

        #Kiểm tra descs
        if (empty($_POST['descs'])) {
            $error['descs'] = "Không được để mô tả ngắn";
        } else {
            $descs = $_POST['descs'];
        }

        #Kiểm tra descs
        if (empty($_POST['desc_detail'])) {
            $error['desc_detail'] = "Không được để mô tả chi tiết";
        } else {
            $desc_detail = $_POST['desc_detail'];
        }

        #Kiểm tra danh mục
        if (empty($_POST['parent-Cat'])) {
            $error['parent-Cat'] = "Vui lòng chọn danh mục";
        } else {
            $parent_Cat = $_POST['parent-Cat'];
        }

        #Kiểm tra trạng thái
        if (empty($_POST['status'])) {
            $error['status'] = "Không được để trống trạng thái";
        } else {
            $status = $_POST['status'];
        }
        $image_id = $_POST['imageId'];

        $user_login = user_login();
        //Kết luận
        if (empty($error)) {
            $data = array(
                'name' => $product_name,
                'code' => $product_code,
                'price_new' => $price_new,
                'price_old' => $price_old,
                'descs' => $descs,
                'desc_detail' => $desc_detail,
                'category_product_id ' => $parent_Cat,
                'status' => $status,
                'user_id' => get_id_user($user_login)
            );
            $id_insert = db_insert("tbl_products", $data);
            if (isset($id_insert)) {
                $success['success'] = "Thêm dữ liệu thành công";
            }
//            echo $id_insert;
//            show_array($data);
            $data_id = (explode(",", $image_id));
//            print_r($data_id);

            foreach ($data_id as $id) {
                if ($id != $data_id[0]) {
                    $data_img = array(
                        'image_id' => $id,
                        'product_id' => $id_insert,
                    );
                } else {
                    $data_img = array(
                        'image_id' => $id,
                        'product_id' => $id_insert,
                        'pin' => 1
                    );
                }
                $id_insert_img = db_insert("tbl_products_image", $data_img);
            }
//            print_r($data_id);
        }
    }

    $list_cat_products = get_list_products_category();
    $result = data_tree($list_cat_products);
    $data = array(
        'upload_file' => $upload_file,
        'list_cat_products' => $list_cat_products,
        'result' => $result
    );
    load_view('add', $data);
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $product_name, $price_new, $price_old, $descs, $upload_file, $file_name, $parent_Cat, $status;
    if (isset($_POST['btn_product_update'])) {
        $error = array();
        $success = array();
        #Kiểm tra tên
        if (empty($_POST['product_name'])) {
            $error['product_name'] = "Không được để trống tên sản phẩm";
        } else {
            $product_name = $_POST['product_name'];
        }

        #Kiểm tra code
        if (empty($_POST['product_code'])) {
            $error['product_code'] = "Không được để trống mã sản phẩm";
        } else {
            $product_code = $_POST['product_code'];
        }

        #Kiểm tra price_new
        if (empty($_POST['price_new'])) {
            $error['price_new'] = "Không được để trống giá mới";
        } else {
            $price_new = $_POST['price_new'];
        }

        #Kiểm tra price_old
        if (empty($_POST['price_old'])) {
            $error['price_old'] = "Không được để trống giá cũ";
        } else {
            $price_old = $_POST['price_old'];
        }

        #Kiểm tra descs
        if (empty($_POST['descs'])) {
            $error['descs'] = "Không được để mô tả ngắn";
        } else {
            $descs = $_POST['descs'];
        }

        #Kiểm tra descs
        if (empty($_POST['desc_detail'])) {
            $error['desc_detail'] = "Không được để mô tả chi tiết";
        } else {
            $desc_detail = $_POST['desc_detail'];
        }

        #Kiểm tra danh mục
        if (empty($_POST['parent-Cat'])) {
            $error['parent-Cat'] = "Vui lòng chọn danh mục";
        } else {
            $parent_Cat = $_POST['parent-Cat'];
        }

        #Kiểm tra trạng thái
        if (empty($_POST['status'])) {
            $error['status'] = "Không được để trống trạng thái";
        } else {
            $status = $_POST['status'];
        }

        $image_id = $_POST['imageId'];

        $user_login = user_login();

        //Kết luận
        if (empty($error)) {
            //Update
            if($parent_Cat == 7) {
                $data = array(
                'name' => $product_name,
                'code' => $product_code,
                'price_new' => $price_new,
                'price_old' => $price_old,
                'descs' => $descs,
                'desc_detail' => $desc_detail,
                'status' => $status,
                'user_id' => get_id_user($user_login)
            );
            } else {
            $data = array(
                'name' => $product_name,
                'code' => $product_code,
                'price_new' => $price_new,
                'price_old' => $price_old,
                'descs' => $descs,
                'desc_detail' => $desc_detail,
                'category_product_id ' => $parent_Cat,
                'status' => $status,
                'user_id' => get_id_user($user_login)
            );
            }
//            show_array($data);
            $id_insert = update_product_by_id($id, $data);
            $success['success'] = "Cập nhật sản phẩm thành công";

//            show_array($data);
            if (!empty($image_id)) {
                db_delete('tbl_products_image', "`product_id` = {$id}");
                $data_id = (explode(",", $image_id));

//            print_r($data_id);

                foreach ($data_id as $id_img) {
                    if ($id_img != $data_id[0]) {
                        $data_img = array(
                            'image_id' => $id_img,
                            'product_id' => $id,
                        );
                    } else {
                        $data_img = array(
                            'image_id' => $id_img,
                            'product_id' => $id,
                            'pin' => 1
                        );
                    }
//                print_r($data_img);
                    $id_insert_img = db_insert("tbl_products_image", $data_img);
                }
            }
            
        }
    }
    $related_image = related_image($id);
    $list_cat_products = get_list_products_category();
    $list_products = get_product_by_id($id);
    $result = data_tree($list_cat_products);
    $data = array(
        'upload_file' => $upload_file,
        'list_cat_products' => $list_cat_products,
        'list_products' => $list_products,
        'result' => $result,
        'related_image' => $related_image
    );
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_products_image', "`product_id` = {$id}");
    db_delete('tbl_products', "`product_id` = {$id}");
    redirect("?mod=products");
}
