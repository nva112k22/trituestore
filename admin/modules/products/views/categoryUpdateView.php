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
                    <h3 id="index" class="fl-left">Cập nhật danh mục</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="<?php echo $info_products_category['title']; ?>">
                        <?php echo form_error('title'); ?>
                        <label for="orders">Thứ tự</label>
                        <input type="text" name="orders" id="orders" value="<?php echo $info_products_category['orders']; ?>">
                        <?php echo form_error('orders'); ?>
                        <label for="parent_id">Danh mục cha:</label>
                        <input type="text" name="parent_id" id="parent_id" value="<?php echo $info_products_category['parent_id']; ?>">
                        <?php echo form_error('parent_id'); ?>
                        <button type="submit" name="btn_update_cate_product" id="btn_update_cate_product">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
