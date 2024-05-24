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
                    <h3 id="index" class="fl-left">Cập nhật đơn hàng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>

                        <label for="number">Số sản phẩm</label>
                        <input type="text" name="number" id="number" value="<?php echo $info_order['product_quantity'];?>" readonly>
                        <?php echo form_error('number'); ?>
                        <label for="total_price">Tổng giá</label>
                        <input type="text" name="total_price" id="total_price" value="<?php echo $info_order['total_price']; ?>" readonly>
                        <?php echo form_error('total_price'); ?>
                        <label>Trạng thái</label>
                        <select name="status">
                            'shipped','pending','processing','delivered','canceled'
                            <option value="">-- Chọn trạng thái --</option>
                            <option value="shipped">Shipped</option>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="delivered">Delivered</option>
                            <option value="canceled">Canceled</option>
                            <option value="<?php echo $info_order['status']; ?>" selected><?php echo $info_order['status']; ?></option>
                        </select>
                        <?php echo form_error('status'); ?>
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
