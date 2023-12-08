<html>
    <head>
        <title>Thiếp lập mật khẩu mới</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">Thiếp lập mật khẩu mới</h1>
            <form id="form-login" action="" method="POST">
                <input type="password" name="password" id="password" value="" placeholder="Password" autocomplete="false"/>
                <?php echo form_error('password'); ?>
                <input type="submit" id="btn_login" name="btn-new-pass" value="LƯU MẬt KHẨU"/>
                <?php echo form_error('account'); ?>
            </form>
            <a href="<?php echo base_url("?mod=users&act=login"); ?>" id="lost-pass">Đăng nhập</a> |
            <a href="<?php echo base_url("?mod=users&act=reg"); ?>" id="lost-pass">Đăng ký</a>
        </div>
    </body>
</html>