
<html>
    <head>
        <title>Đăng nhập</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 id="page-title">Đăng nhập</h1>
            <form id="form-login" action="" method="POST">
                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="User name" autocomplete="false"/>
                <?php echo form_error('username'); ?>
                <input type="password" name="password" id="password" value="" placeholder="Password" autocomplete="false"/>
                <?php echo form_error('password'); ?>
                <input type="submit" name="btn_login" id="btn_login" value="ĐĂNG NHẬP"/>
                <?php echo form_error('account'); ?>
                <input type="checkbox" name="remember_me" id="remember_me"/><label for="remember_me">Ghi nhớ đăng nhập</label><br>
            </form>
            <a href="<?php echo base_url("?mod=users&action=reset"); ?>" id="lost-pass">Quên mật khẩu?</a> |
            <a href="<?php echo base_url("?mod=users&action=reg"); ?>" id="lost-pass">Đăng ký</a>
        </div>
    </body>
</html>
