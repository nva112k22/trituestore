<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'pagging');
    $num_rows = db_num_rows("SELECT * FROM `tbl_posts`");
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


    $list_posts = get_posts($start, $num_per_page);
    if (isset($_POST['sm_s'])) {
        $tukhoa = $_POST['s'];
        $list_posts = db_fetch_array("SELECT * FROM `tbl_posts_category` JOIN `tbl_posts` ON `tbl_posts_category`.`category_post_id` = `tbl_posts`.`category_post_id` WHERE `tbl_posts`.`title` LIKE '%" . $tukhoa . "%'");
    }
    foreach ($list_posts as &$posts) {
        $posts['url_update'] = "?mod=posts&action=update&id={$posts['post_id']}";
        $posts['url_delete'] = "?mod=posts&action=delete&id={$posts['post_id']}";
    }
    unset($posts);
//    $list_users = get_list_users();
//    show_array($list_users);
    $data = array(
        'list_posts' => $list_posts,
        'num_page' => $num_page,
        'page' => $page,
        'start' => $start,
        'total_row' => $total_row,
        'created_user' => user_login()
    );
    load_view('index', $data);
}

function addAction() {
    global $error, $success, $title, $slug, $descs, $file, $upload_file, $file_name, $parent_Cat, $status;
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
        if (isset($_POST['btn_add_posts'])) {
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
            #Kiểm tra file

            if (empty($_FILES['file']['name'])) {
                $error['file'] = "Không được để trống hình ảnh";
            } else {
                $file = $_FILES['file']['name'];
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

            $user_login = user_login();

            //Kết luận
            if (empty($error)) {
                $data_img = array(
                    'image_url' => $_FILES['file']['name'],
                );
                $id_insert_img = db_insert("tbl_images", $data_img);
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'descs' => $descs,
                    'desc_detail' => $desc_detail,
                    'user_id' => get_id_user($user_login),
                    'image_id' => $id_insert_img,
                    'category_post_id  ' => $parent_Cat,
                    'status' => $status
                );
//            show_array($data);
                $id_insert = db_insert("tbl_posts", $data);
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
    $list_cat_posts = get_list_posts_category();
    $data = array(
        'upload_file' => $upload_file,
        'list_cat_posts' => $list_cat_posts
    );
    load_view('add', $data);
}

function updateAction() {
    $id = (int) $_GET['id'];
    global $error, $success, $title, $slug, $descs, $file, $upload_file, $file_name, $parent_Cat, $status;
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
        if (isset($_POST['btn_post_update'])) {
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
            #Kiểm tra file

            if (empty($_FILES['file']['name'])) {
                $error['file'] = "Không được để trống hình ảnh";
            } else {
                $file = $_FILES['file']['name'];
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

            $user_login = user_login();

            //Kết luận
            if (empty($error)) {
                $data_img = array(
                    'image_url' => $_FILES['file']['name'],
                );
                $id_insert_img = db_insert("tbl_images", $data_img);
                if (isset($id_insert)) {
                    $success['success'] = "Thêm dữ liệu thành công";
                }
                //Update
                $data = array(
                    'title' => $title,
                    'slug' => $slug,
                    'descs' => $descs,
                    'desc_detail' => $desc_detail,
                    'user_id' => get_id_user($user_login),
                    'image_id' => $id_insert_img,
                    'category_post_id  ' => $parent_Cat,
                    'status' => $status
                );
//            show_array($data);
                update_post_by_id($id, $data);
                $success['success'] = "Cập nhật bài viết thành công";
            }
        }
    }
    $list_cat_posts = get_list_posts_category();
    $list_posts = get_post_by_id($id);
    $cat_posts = get_cat_post_by_id($id);
    $status_posts = get_status_post_by_id($id);

    $data = array(
        'upload_file' => $upload_file,
        'list_cat_posts' => $list_cat_posts,
        'list_posts' => $list_posts,
        'cat_posts' => $cat_posts,
        'status_posts' => $status_posts
    );
    load_view('update', $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_posts', "`post_id` = {$id}");
    redirect("?mod=posts");
}
