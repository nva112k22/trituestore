<html>
    <head>
        <title>Khôi phục mật khẩu</title>
        <link href="public/css/import/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">KHÔI PHỤC MẬT KHẨU</h1>
            <form id="form-login" action="" method="POST">
                <input type="text" name="email" id="username" value="<?php echo set_value('email'); ?>" placeholder="Email"/>
                <?php echo form_error('email'); ?>
                <input type="submit" id="btn_login" name="btn-reset" value="GỬI YÊU CẦU"/>
                <?php echo form_error('account'); ?>
            </form>
            <a href="<?php echo base_url("?mod=users&action=login"); ?>" id="lost-pass">Đăng nhập</a> |
            <a href="<?php echo base_url("?mod=users&action=reg"); ?>" id="lost-pass">Đăng ký</a>
        </div>
    </body>
</html>