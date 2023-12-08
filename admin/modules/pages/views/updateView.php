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
                    <h3 id="index" class="fl-left">Cập nhật trang</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>

                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="<?php echo $info_page['title']; ?>">
                        <?php echo form_error('title'); ?>
                        <label for="slug">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug" value="<?php echo $info_page['slug']; ?>">
                        <?php echo form_error('slug'); ?>
                        <label for="descs">Mô tả</label>
                        <textarea name="descs" id="desc" class="ckeditor"><?php echo $info_page['descs']; ?></textarea>
                        <?php echo form_error('descs'); ?>
                        <button type="submit" name="btn_page_update" id="btn_page_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
