
<?php

function construct() {
//    echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    load('helper', 'format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function regAction() {
    global $error, $success, $username, $password, $email, $fullname;
    if (isset($_POST['btn-reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            $fullname = $_POST['fullname'];
        }
        #Kiểm tra username
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

        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }

        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }

        #Kết luận
        if (empty($error)) {
            if (!user_exists($username, $email)) {
                $active_token = md5($username . time());
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'active_token' => $active_token,
                    'created_date' => time()
                );
                add_user($data);
                $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>Chào bạn {$fullname}</p>
                <p>Bạn vui lòng click vào đường link này để kích hoạt tài khoản: {$link_active}</p>
                <p>Nếu không phải bạn đăng ký tài khoản thì hãy bỏ qua email này</p>
                <p>TeamSupport ibook</p>";

                send_mail($email, "Nguyễn Viết An", 'Kích hoạt tài khoản', $content);

                //Thông báo

                redirect("?mod=users&action=login");
            } else {
                $error['account'] = "Email hoặc username đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
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
                redirect('?mod=cart');
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

function activeAction() {
    $link_login = base_url("?mod=users&action=login");
    $active_token = $_GET['active_token'];
    if (check_active_token($active_token)) {
        active_user($active_token);
        echo "Bạn đã kích hoạt thành công, vui lòng click vào link sau để đăng nhập: <a href='{$link_login}'>Đăng nhập</a>";
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ hoặc tài khoản đã được kích hoạt trước đó, vui lòng click vào link sau để đăng nhập: <a href='{$link_login}'>Đăng nhập</a>";
    }
}

function logoutAction() {
    setcookie('is_login', true, time() - 3600);
    setcookie('user_login', 'unitop', time() - 3600);
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?");
}

function resetAction() {
    global $error;
    $reset_token = $_GET['reset_token'];
    if (!empty($reset_token)) {
        if (check_reset_token($reset_token)) {
            if (isset($_POST['btn-new-pass'])) {
                $error = array();
                #Kiểm tra password
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống mật khẩu";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Mật khẩu không đúng định dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                if (empty($error)) {
                    $data = array(
                        'password' => $password
                    );
                    update_pass($data, $reset_token);
                    redirect("?mod=users&action=resetOk");
                }
            }
            load_view('newPass');
        } else {
            echo "Yêu cầu khôi phục mật khẩu không hợp lệ";
        }
    } else {
        if (isset($_POST['btn-reset'])) {
            $error = array();

            #Kiểm tra email
            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống email";
            } else {
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }
            }

            #Kết luận
            //Kết luận
            if (empty($error)) {
                if (check_email($email)) {
                    $reset_token = md5($email . time());
                    $data = array(
                        'reset_token' => $reset_token
                    );
                    //Cập nhật mã reset pass cho user cần khôi phục mật khẩu
                    update_reset_token($data, $email);
                    //Gửi link khôi phục vào email cho người dùng
                    $link = base_url("?mod=users&action=reset&reset_token={$reset_token}");
                    $content = "<p>Bạn vui lòng click vào link sau để khôi phục mật khẩu: {$link}</p>
                <p>Nếu không phải yêu cầu của bạn, vui lòng bỏ qua email này.</p>
                <p>Team support ibook</p>";

                    send_mail($email, '', 'Khôi phục mật khẩu ibook', $content);
                } else {
                    $error['account'] = "Email không tồn tại trên hệ thống";
                }
            }
        }
        load_view('reset');
    }
}

function resetOkAction() {
    load_view('resetOk');
}
