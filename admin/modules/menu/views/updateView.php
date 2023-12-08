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
                    <h3 id="index" class="fl-left">Cập nhật menu</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <div class="form-group">
                            <label for="title">Tên menu</label>
                            <input type="text" name="title" id="title" value="<?php echo $info_menu['name']; ?>">
                        </div>
                        <?php echo form_error('title'); ?>
                        <div class="form-group">
                            <label for="slug">Đường dẫn tĩnh</label>
                            <input type="text" name="slug" id="slug" value="<?php echo $info_menu['slug']; ?>">
                            <p>Chuỗi đường dẫn tĩnh cho menu</p>
                        </div>
                        <?php echo form_error('slug'); ?>
                        <div class="form-group clearfix">
                            <label>Trang</label>
                            <select name="page">
                                <?php
                                if (!empty($list_page)) {
                                    ?>
                                    <option value="0">-- Chọn --</option>
                                    <?php
                                    foreach ($list_page as $item) {
                                        ?>
                                        <option value="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></option>
                                        <?php
                                    }
                                    ?>
                                    <option value="<?php echo $info_menu['pages']; ?>" selected><?php echo $info_menu['pages']; ?></option>
                                </select>
                                <p>Trang liên kết đến menu</p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php echo form_error('page'); ?>
                        <div class="form-group clearfix">
                            <label>Danh mục sản phẩm</label>
                            <select name="product">
                                <?php
                                if (!empty($result_product)) {
                                    ?>

                                    <option value="">-- Chọn danh mục --</option>
                                    <?php
                                    foreach ($result_product as $v) {
                                        ?>
                                        <option value="<?php echo $v['category_product_id']; ?>"><?php echo str_repeat('|--', $v['level']) . $v['title'] ?></option>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                                <option value="<?php echo $cate_product['category_product_id']; ?>" selected><?php echo $cate_product['title']; ?></option>
                            </select>
                            <p>Danh mục sản phẩm liên kết đến menu</p>
                        </div>
                        <?php echo form_error('product'); ?>
                        <div class="form-group clearfix">
                            <label>Danh mục bài viết</label>
                            <select name="post">
                                <?php
                                if (!empty($result_post)) {
                                    ?>

                                    <option value="">-- Chọn danh mục --</option>
                                    <?php
                                    foreach ($result_post as $v) {
                                        ?>
                                        <option value="<?php echo $v['category_post_id']; ?>"><?php echo str_repeat('|--', $v['level']) . $v['name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                                <option value="<?php echo $cate_post['category_post_id']; ?>" selected><?php echo $cate_post['name']; ?></option>
                            </select>
                            <p>Danh mục bài viết liên kết đến menu</p>
                        </div>
                        <?php echo form_error('post'); ?>
                        <div class="form-group">
                            <label for="orders">Thứ tự</label>
                            <input type="text" name="orders" id="orders" value="<?php echo $info_menu['orders']; ?>">
                        </div>
                        <?php echo form_error('orders'); ?>
                        <div class="form-group">
                            <button type="submit" name="btn_update_menu" id="btn_update_menu">Lưu danh mục</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
