
<html>
    <head>
        <title>Đăng nhập</title>
        <link href="public/css/import/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/import/login.css" rel="stylesheet" type="text/css"/>
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
            </form>
        </div>
    </body>
</html>
