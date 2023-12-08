<?php
get_header();
?>

<?php
//show_array($list_users_id);
?>

<div id="main-content-wp" class="info-account-page">
    <style>
        p.error {
            font-size: 13px;
            color: #e25959;
        }
        p.success {
            font-size: 15px;
            color: #4fa327;
        }
    </style>
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?mod=users&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <?php
        get_sidebar('users');
        ?>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="">
                        <?php echo form_success('success'); ?>
                        <label for = "display-name">Tên hiển thị</label>
                        <input type="text" name="fullname" id="display-name" value="<?php echo $info_user['fullname']; ?>">
                        <?php echo form_error('fullname'); ?>
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" placeholder="admin" value="<?php echo $info_user['username']; ?>" readonly="readonly" disabled>
                        <?php echo form_error('username'); ?>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $info_user['email']; ?>" id="email">
                        <?php echo form_error('email'); ?>
                        <label for="phone_number">Số điện thoại</label>
                        <input type="tel" name="phone_number" value="<?php echo $info_user['phone_number']; ?>" id="phone_number">
                        <?php echo form_error('phone_number'); ?>
                        <label for="address">Địa chỉ</label>
                        <textarea name="address" id="address"><?php echo $info_user['address']; ?></textarea>
                        <?php echo form_error('address'); ?>
                        <!--<input type="submit" value="Cập nhật" name="btn_update" id="btn_update"/>-->
                        <button type="submit" name="btn_update" id="btn_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>