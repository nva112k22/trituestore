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
        #show_list_file {
            object-fit: cover;
            height: fit-content;
            display: flex;
            flex-wrap: wrap;
        }
        #show_list_file img {
            max-height: 100%;
            max-width: 100%;
            margin-right: 2px;
            border: 2px solid grey;
        }
    </style>

    <div class="wrap clearfix">
        <?php echo get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name">
                        <?php echo form_error('product_name'); ?>
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code">
                        <?php echo form_error('product_code'); ?>
                        <label for="price_new">Giá mới của sản phẩm</label>
                        <input type="text" name="price_new" id="price_new">
                        <?php echo form_error('price_new'); ?>
                        <label for="price_old">Giá cũ của sản phẩm</label>
                        <input type="text" name="price_old" id="price_old">
                        <?php echo form_error('price_old'); ?>
                        <label for="descs">Mô tả ngắn</label>
                        <textarea name="descs" id="descs"></textarea>
                        <?php echo form_error('descs'); ?>
                        <label for="desc">Mô tả</label>
                        <textarea name="desc_detail" id="desc" class="ckeditor"></textarea>
                        <?php echo form_error('desc_detail'); ?>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="images[]" id="file" multiple="multipe"><br/><br/>
                            <!--<input type="submit" id="bt_upload" name="bt_upload" value="Chọn file">-->
                            <input type="submit" name="Upload" value="Upload" id="upload_single_bt">
                            <!--<input id="thumbnail_url" type ="hidden" name="thumbnail_url" value="" />-->
                        </div>
                        <div id="show_list_file" >
                        </div>
                        <input type="hidden" id="imageId" name="imageId" value="">
                        <?php echo form_error('file'); ?>
                        <label>Danh mục cha</label>
                        <select name="parent-Cat">
                            <?php
                            if (!empty($result)) {
                                ?>

                                <option value="">-- Chọn danh mục --</option>
                                <?php
                                foreach ($result as $v) {
                                    ?>
                                    <option value="<?php echo $v['category_product_id']; ?>"><?php echo str_repeat('|--', $v['level']) . $v['title'] ?></option>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('parent-Cat'); ?>
                        <label>Trạng thái</label>
                        <select name="status">
                            <option value="">-- Chọn trạng thái --</option>
                            <option value="inactive">Inactive</option>
                            <option value="active">Active</option>
                            <option value="out_of_stock">Out of stock</option>
                        </select>
                        <?php echo form_error('status'); ?>
                        <button type="submit" name="btn_add_products" id="btn_add_products">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
