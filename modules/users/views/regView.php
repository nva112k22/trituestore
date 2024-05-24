<html>
    <head>
        <title>Đăng ký</title>
        <link href="public/css/import/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <?php echo form_success('success'); ?>
            <h1 id="page-title">ĐĂNG KÝ</h1>
            <form id="form-login" action="" method="POST">
                <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>" placeholder="Full name"/>
                <?php echo form_error('fullname'); ?>
                <input type="text" name="email" id="fullname" value="<?php echo set_value('email') ?>" placeholder="Email"/>
                <?php echo form_error('email'); ?>
                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="User name" autocomplete="false"/>
                <?php echo form_error('username'); ?>
                <input type="password" name="password" id="password" value="" placeholder="Password" autocomplete="false"/>
                <?php echo form_error('password'); ?>
                <input type="submit" name="btn-reg" id="btn-reg" value="ĐĂNG KÝ"/>
                <?php echo form_error('account'); ?>
            </form>
            <a href="<?php echo base_url("?mod=users&action=login"); ?>" id="lost-pass">Đăng nhập</a>
        </div>
    </body>
</html>