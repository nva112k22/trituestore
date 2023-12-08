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
                    <h3 id="index" class="fl-left">Thêm mới bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title">
                        <?php echo form_error('title'); ?>
                        <label for="slug">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug">
                        <?php echo form_error('slug'); ?>
                         <label for="descs">Mô tả ngắn</label>
                        <textarea name="descs" id="descs"></textarea>
                        <?php echo form_error('descs'); ?>
                        <label for="desc">Mô tả</label>
                        <textarea name="desc_detail" id="desc" class="ckeditor"></textarea>
                        <?php echo form_error('desc_detail'); ?>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn_upload_thumb" value="Upload" id="btn_upload_thumb">
                            <img class="images" src="<?php if (!empty($upload_file)) echo $upload_file;
                        else echo 'uploads/img-thumb.png'; ?>">
                        </div>
                        <?php echo form_error('file'); ?>
                        <label>Danh mục cha</label>
                        <select name="parent-Cat">
                            <?php
                            if (!empty($list_cat_posts)) {
                                ?>

                                <option value="">-- Chọn danh mục --</option>
                                <?php
                                foreach ($list_cat_posts as $item) {
                                    ?>
                                    <option value="<?php echo $item['category_post_id']; ?>"><?php echo $item['name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <?php
                        }
                        ?>
                        <?php echo form_error('parent-Cat'); ?>
                        <label for="status">Trạng thái</label>
                        <select name="status">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="pending">Pending</option>
                            <option value="archived">Archived</option>
                        </select>
                        <?php echo form_error('status'); ?>
                        <button type="submit" name="btn_add_posts" id="btn_add_posts">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
