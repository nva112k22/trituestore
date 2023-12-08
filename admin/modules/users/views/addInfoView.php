<?php
get_header();
?>

<div id="main-content-wp" class="add-cat-page">
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
    <div class="wrap clearfix">
        <?php echo get_sidebar('users'); ?>
        <div id="content" class="fl-right">      
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm quản trị viên</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <?php echo form_success('success'); ?>
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname"/>
                        <?php echo form_error('fullname'); ?>
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username"/>
                        <?php echo form_error('username'); ?>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"/>
                        <?php echo form_error('email'); ?>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"/>
                        <?php echo form_error('password'); ?>
                        <label for="phone_number">Số điện thoại</label>
                        <input type="tel" name="phone_number" id="phone_number"/>
                        <?php echo form_error('phone_number'); ?>
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address"/>
                        <?php echo form_error('address'); ?>
                        <select name="gender">
                            <option value="">--Chọn giới tính--</option>
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                        <?php echo form_error('gender'); ?>
                        <button type="submit" name="btn_reg" id="btn_reg">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>