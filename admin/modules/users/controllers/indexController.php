
<?php

function construct() {
//    echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
    load('lib', 'email');
}

function indexAction() {
    load('helper', 'format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function loginAction() {
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
            if (!preg_match($pattern, $_POST['username'])) {
                $error['username'] = "Tên tài khoản không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }

        //Kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                //Lưu phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;

                if (isset($_POST['remember_me'])) {
                    setcookie('is_login', true, time() + 3600);
                    setcookie('user_login', $username, time() + 3600);
                }

                //Chuyển hướng đăng nhập
                redirect('?');
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

function logoutAction() {
    setcookie('is_login', true, time() - 3600);
    setcookie('user_login', 'unitop', time() - 3600);
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}

function resetAction() {
    global $error, $success, $password, $username;
    if (isset($_POST['btn_change'])) {
        $error = array();
        $success = array();

        #Kiểm tra mật khẩu
        if (empty($_POST['pass-old'])) {
            $error['pass-old'] = "Không được để trống mật khẩu cũ";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['pass-old'])) {
                $error['pass-old'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['pass-old']);
            }
        }

        if (empty($_POST['pass-new'])) {
            $error['pass-new'] = "Không được để trống mật khẩu mới";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['pass-new'])) {
                $error['pass-new'] = "Mật khẩu không đúng định dạng";
            } else {
                $password_new = md5($_POST['pass-new']);
            }
        }

        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = "Không được để trống mật khẩu mới";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['confirm-pass'])) {
                $error['confirm-pass'] = "Mật khẩu không đúng định dạng";
            } else {
                $confirm_pass = md5($_POST['confirm-pass']);
            }
        }

        if (check_password($password)) {
            if ($_POST['pass-new'] == $_POST['confirm-pass']) {
                if (empty($error)) {
                    //Update
                    $data = array(
                        'password' => $password_new
                    );
                    update_pass($data, user_login());
                    $success['success'] = "Cập nhật mật khẩu thành công";
//                    show_array($data);
                }
            } else {
                $error['not-match'] = "Mật khẩu mới không khớp nhau";
            }

            //Kết luận
//            redirect('?mod=users&controller=infoAcc');
        } else {
            $error['not-match'] = "Mật khẩu cũ không đúng vui lòng kiểm tra lại, hoặc liên hệ admin hỗ trợ";
        }
    }
    load_view('reset');
}

function updateAction() {
    /* Cập nhật tài khoản
     * B1: Tạo giao diện
     * B2: Load lại thông tin cũ
     * B3: Validaton form
     * B4: Cập nhật thông tin
     */
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
            update_user_login(user_login(), $data);
            $success['success'] = "Cập nhật tài khoản thành công";
//            redirect('?mod=users&controller=infoAcc');
        }
    }
    $info_user = get_user_by_username(user_login());
    $data['info_user'] = $info_user;
    load_view('update', $data);
}

function addAction() {
    global $error, $success, $username, $password, $email, $fullname, $phone_number, $address, $gender;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        $success = array();

        #Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống fullname";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra giới tính
        if (empty($_POST['gender'])) {
            $error['gender'] = "Bạn cần chọn giới tính";
        } else {
            $gender = $_POST['gender'];
        }

        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
            if (!preg_match($pattern, $_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }

        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            $pattern = '/^[A-Za-z0-9_.]{2,32}@([a-zA-z0-9]{2,12})(.[a-zA-z]{2,12})+$/';
            if (!preg_match($pattern, $_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
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
//        $sql = "INSERT INTO `tbl_users` (`fullname`, `email`, `password`, `username`, `gender`)"
//                . "VALUES ('{$fullname}', '{$email}', '{$password}', '{$username}', '{$gender}')";
//        if (mysqli_query($conn, $sql)) {
//            $alert['success'] = "Thêm dữ liệu thành công";
//        } else {
//            echo "Lỗi" . mysqli_errno($conn);
//        }
//    } else {
//        show_array($error);
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password,
                'username' => $username,
                'gender' => $gender,
                'phone_number' => $phone_number,
                'address' => $address
            );
            $id_insert = db_insert("tbl_users", $data);
            if (isset($id_insert)) {
                $success['success'] = "Thêm dữ liệu thành công";
            }
//        echo $id_insert;
        }
    }
    load_view('addInfo');
}
