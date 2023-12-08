<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // Nếu người dùng submit form thì thực hiện
    if (isset($_REQUEST['sm_s'])) {
        // Gán hàm addslashes để chống sql injection
        $search = addslashes($_GET['s']);
        echo $search;

        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        } else {
            search(tbl_pages, $search);
        }
    }
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_slider`");
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


    $list_slider = get_slider($start, $num_per_page);
    foreach ($list_slider as &$slider) {
        $slider['url_update'] = "?mod=slider&action=update&id={$slider['slider_id']}";
        $slider['url_delete'] = "?mod=slider&action=delete&id={$slider['slider_id']}";
    }
    unset($slider);
//    $list_users = get_list_users();
    $data = array(
        'list_slider' => $list_slider,
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
    if (isset($_FILES['file'])) {

        $error = array();
        $upload_dir = 'uploads/';
        //Đường dẫn của file sau khi upload
        $upload_file = $upload_dir . $_FILES['file']['name'];
        #Xử lý upload đúng file ảnh
        $type_allow = array('png', 'jpg', 'gift', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['file_type'] = "Chỉ được upload file ảnh có đuôi png, jpg, gif, jpeg";
        } else {
            #Upload file có kích thước cho phép (<20MB ~ 29.000.000 Byte)
            $file_size = $_FILES['file']['size'];
            if ($file_size > 29000000) {
                $error['file_size'] = "Chỉ được upload file bé hơn 20 MB";
            }

            #kiểm tra trùng file trên hệ thống
            if (file_exists($upload_file)) {
                //===========================
                //Xử lý đổi tên file tự động
                //===========================
                #Tạo file mới
                //Tên file.Đuôi file

                $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $new_file_name = $file_name . '- Copy.';
                $new_upload_file = $upload_dir . $new_file_name . $type;
                $k = 1;
                while (file_exists($new_upload_file)) {
                    $new_file_name = $file_name . " - Copy({$k})";
                    $k++;
                    $new_upload_file = $upload_dir . $new_file_name . $type;
                }

                $upload_file = $new_upload_file;
            }
        }
        if (isset($_POST['btn_slider'])) {
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
                $error['slug'] = "Không được để trống link";
            } else {
                $slug = $_POST['slug'];
            }

            #Kiểm tra mô tả
            if (empty($_POST['descs'])) {
                $error['descs'] = "Không được để trống mô tả";
            } else {
                $descs = $_POST['descs'];
            }

            #Kiểm tra thứ tự
            if (empty($_POST['orders'])) {
                $error['orders'] = "Không được để trống thứ tự";
            } else {
                $orders = $_POST['orders'];
            }

            #Kiểm tra status
            if (empty($_POST['status'])) {
                $error['status'] = "Không được để trống trạng thái";
            } else {
                $status = $_POST['status'];
            }

            #Kiểm tra file

            if (empty($_FILES['file']['name'])) {
                $error['file'] = "Không được để trống hình ảnh";
            } else {
                $file = $_FILES['file']['name'];
            }

            $user_login = user_login();
            //Kết luận
            if (empty($error)) {
                $data_img = array(
                    'image_url' => $upload_file,
                );
                $id_insert_img = db_insert("tbl_images", $data_img);
                $data = array(
                    'name' => $title,
                    'link' => $slug,
                    'descs' => $descs,
                    'orders' => $orders,
                    'status' => $status,
                    'user_id' => get_id_user($user_login),
                    'image_id' => $id_insert_img
                );

//            show_array($data);
                $id_insert = db_insert("tbl_slider", $data);
                if (isset($id_insert)) {
                    $success['success'] = "Thêm dữ liệu thành công";
                }


//        echo $id_insert;
            }
        }


        if (empty($error)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $file_name = $_FILES['file']['name'];
            } else {
                echo "Upload file không thành công";
            }
        }
    }
    load_view('add');
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $slug, $descs, $file;
    if (isset($_FILES['file'])) {
        $info_slider = get_slider_by_id($id);
        $error = array();
        $upload_dir = 'uploads/';
        //Đường dẫn của file sau khi upload
        $upload_file = $upload_dir . $_FILES['file']['name'];
        #Xử lý upload đúng file ảnh
        $type_allow = array('png', 'jpg', 'gift', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['file_type'] = "Chỉ được upload file ảnh có đuôi png, jpg, gif, jpeg";
        } else {
            #Upload file có kích thước cho phép (<20MB ~ 29.000.000 Byte)
            $file_size = $_FILES['file']['size'];
            if ($file_size > 29000000) {
                $error['file_size'] = "Chỉ được upload file bé hơn 20 MB";
            }

            #kiểm tra trùng file trên hệ thống
            if (file_exists($upload_file)) {
                //===========================
                //Xử lý đổi tên file tự động
                //===========================
                #Tạo file mới
                //Tên file.Đuôi file

                $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $new_file_name = $file_name . '- Copy.';
                $new_upload_file = $upload_dir . $new_file_name . $type;
                $k = 1;
                while (file_exists($new_upload_file)) {
                    $new_file_name = $file_name . " - Copy({$k})";
                    $k++;
                    $new_upload_file = $upload_dir . $new_file_name . $type;
                }

                $upload_file = $new_upload_file;
            }
        }
        if (isset($_POST['btn_page_update'])) {
            $error = array();
            $success = array();
            if (empty($_POST['title'])) {
                $error['title'] = "Không được để trống tiêu đề";
            } else {
                $title = $_POST['title'];
            }

            #Kiểm tra slug
            if (empty($_POST['slug'])) {
                $error['slug'] = "Không được để trống link";
            } else {
                $slug = $_POST['slug'];
            }

            #Kiểm tra mô tả
            if (empty($_POST['descs'])) {
                $error['descs'] = "Không được để trống mô tả";
            } else {
                $descs = $_POST['descs'];
            }

            #Kiểm tra thứ tự
            if (empty($_POST['orders'])) {
                $error['orders'] = "Không được để trống thứ tự";
            } else {
                $orders = $_POST['orders'];
            }

            #Kiểm tra status
            if (empty($_POST['status'])) {
                $error['status'] = "Không được để trống trạng thái";
            } else {
                $status = $_POST['status'];
            }

            #Kiểm tra file

            if (empty($_FILES['file']['name'])) {
                $error['file'] = "Không được để trống hình ảnh";
            } else {
                $file = $_FILES['file']['name'];
            }

            $user_login = user_login();

            //Kết luận
            if (empty($error)) {
                $data_img = array(
                    'image_url' => $upload_file,
                );
                update_image_by_id($info_slider['image_id'], $data_img);
                //Update
                $data = array(
                    'name' => $title,
                    'link' => $slug,
                    'descs' => $descs,
                    'orders' => $orders,
                    'status' => $status,
                    'user_id' => get_id_user($user_login),
                );
//            show_array($data);
                update_slider_by_id($id, $data);
                $success['success'] = "Cập nhật slider thành công";
            }
        }


        if (empty($error)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $file_name = $_FILES['file']['name'];
            } else {
                echo "Upload file không thành công";
            }
        }
    }
    $info_slider = get_slider_by_id($id);
    $data['info_slider'] = $info_slider;
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_slider', "`slider_id` = {$id}");
    redirect("?mod=slider");
}
