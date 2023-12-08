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
                        <label for="name">Tiêu đề</label>
                        <input type="text" name="name" id="name" value="<?php echo $info_posts_category['name']; ?>">
                        <?php echo form_error('name'); ?>
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" value="<?php echo $info_posts_category['slug']; ?>">
                        <?php echo form_error('slug'); ?>
                        <label for="orders">Thứ tự</label>
                        <input type="text" name="orders" id="orders" value="<?php echo $info_posts_category['orders']; ?>">
                        <?php echo form_error('orders'); ?>
                        <button type="submit" name="btn_update_cate_post" id="btn_update_cate_post">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
