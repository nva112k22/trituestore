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
                    <h3 id="index" class="fl-left">Cập nhật sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name" value="<?php echo $list_products['name']; ?>">
                        <?php echo form_error('product_name'); ?>
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code" value="<?php echo $list_products['code']; ?>">
                        <?php echo form_error('product_code'); ?>
                        <label for="price_new">Giá mới của sản phẩm</label>
                        <input type="text" name="price_new" id="price_new" value="<?php echo $list_products['price_new']; ?>">
                        <?php echo form_error('price_new'); ?>
                        <label for="price_old">Giá cũ của sản phẩm</label>
                        <input type="text" name="price_old" id="price_old" value="<?php echo $list_products['price_old']; ?>">
                        <?php echo form_error('price_old'); ?>
                        <label for="descs">Mô tả ngắn</label>
                        <textarea name="descs" id="descs"><?php echo $list_products['descs']; ?></textarea>
                        <?php echo form_error('descs'); ?>
                        <label for="desc">Mô tả</label>
                        <textarea name="desc_detail" id="desc" class="ckeditor"><?php echo $list_products['desc_detail']; ?></textarea>
                        <?php echo form_error('desc_detail'); ?>
                        <label>Hình ảnh</label>
                        <div class="thumb-wp">
                            <a href="" title="" id="main-thumb">
                                <img id="zoom" src="<?php echo $related_image[0]; ?>"/>
                            </a>
                        </div>

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
                                    continue;
                                }
                                ?>
                                <option value="<?php echo $v['category_product_id']; ?>" selected><?php echo $list_products['title']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('parent-Cat'); ?>
                        <label>Trạng thái</label>
                        <select name="status">
                            <option value="0">-- Chọn trạng thái --</option>
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                            <option value="<?php echo $list_products['status']; ?>" selected><?php echo $list_products['status']; ?></option>
                        </select>
                        <?php echo form_error('status'); ?>
                        <button type="submit" name="btn_product_update" id="btn_product_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
