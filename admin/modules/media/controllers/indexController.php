<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_images`");
//echo $num_rows;
//Số bản ghi 1 trang
    $num_per_page = 15;
//Tổng số bản ghi hiện có
    $total_row = $num_rows;
//Số lượng trang
    $num_page = ceil($total_row / $num_per_page);
//echo $num_page;
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
//echo $page;
    $start = ($page - 1) * $num_per_page;
//echo $start;


    $list_media = get_media($start, $num_per_page);
    foreach ($list_media as &$media) {
        $media['url_update'] = "?mod=media&action=update&id={$media['image_id']}";
        $media['url_delete'] = "?mod=media&action=delete&id={$media['image_id']}";
    }
    unset($media);
//    $list_users = get_list_users();
//    show_array($list_users);
    $data = array(
        'list_media' => $list_media,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('index', $data);
}

function addAction() {
    global $error, $success, $file, $upload_file, $file_name;
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
        if (isset($_POST['btn_media'])) {
            $error = array();
            $success = array();

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
                    'user_id' => get_id_user($user_login),
                    'image_title' => $_FILES['file']['name']
                );
                $id_insert_img = db_insert("tbl_images", $data_img);
//            show_array($data);
                if (isset($id_insert_img)) {
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
    $up = array(
        'upload_file' => $upload_file,
        'file_name' => $file_name
    );
    load_view('add', $up);
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $slug, $descs, $file;
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
        if (isset($_POST['btn_image_update'])) {
            $error = array();
            $success = array();
            
            #Kiểm tra file

            if (empty($_FILES['file']['name'])) {
                $error['file'] = "Không được để trống hình ảnh";
            } else {
                $file = $_FILES['file']['name'];
            }

            $user_login = user_login();
            //Kết luận
            if (empty($error)) {
                //Update
                $data = array(
                    'image_url' => $upload_file,
                    'user_id' => get_id_user($user_login),
                    'image_title' => $_FILES['file']['name']
                );
//            show_array($data);
                update_image_by_id($id, $data);
                $success['success'] = "Cập nhật ảnh thành công";
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
    $info_media = get_media_by_id($id);
    $data['info_media'] = $info_media;
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_images', "`image_id` = {$id}");
    redirect("?mod=media");
}
