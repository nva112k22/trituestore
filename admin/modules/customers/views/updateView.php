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
        <?php echo get_sidebar(); ?>
        <div id="content" class="fl-right">      
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật thông tin khách hàng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>
                        
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" value="<?php echo $info_customer['fullname']; ?>">
                        <?php echo form_error('fullname'); ?>
                        <label for="phone_number">Số điện thoại</label>
                        <input type="text" name="phone_number" id="phone_number" value="<?php echo $info_customer['phone_number']; ?>">
                        <?php echo form_error('phone_number'); ?>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $info_customer['email']; ?>">
                        <?php echo form_error('email'); ?>
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" value="<?php echo $info_customer['address']; ?>">
                        <?php echo form_error('address'); ?>
                        <label for="orderss">Đơn hàng</label>
                        <input type="text" name="orderss" id="orderss" value="<?php echo $info_customer['orderss']; ?>">
                        <?php echo form_error('orderss'); ?>
                        <button type="submit" name="btn_order_update" id="btn_order_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
