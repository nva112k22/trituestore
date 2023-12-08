<?php
get_header();
?>

<div id="main-content-wp" class="add-cat-page menu-page">
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
    <div class="section" id="title-page">
        <div class="wrap clearfix">
            <?php echo get_sidebar(); ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <h3 id="index" class="fl-left">Menu</h3>
                </div>  
                <div class="section-detail clearfix">
                    <div id="list-menu" class="fl-left">
                        <form enctype="multipart/form-data" action="" method="POST">
                            <?php echo form_success('success'); ?>
                            <div class="form-group">
                                <label for="title">Tên menu</label>
                                <input type="text" name="title" id="title">
                            </div>
                            <?php echo form_error('title'); ?>
                            <div class="form-group">
                                <label for="slug">Đường dẫn tĩnh</label>
                                <input type="text" name="slug" id="slug">
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
                                </select>
                                <p>Danh mục bài viết liên kết đến menu</p>
                            </div>
                            <?php echo form_error('post'); ?>
                            <div class="form-group">
                                <label for="orders">Thứ tự</label>
                                <input type="text" name="orders" id="orders">
                            </div>
                            <?php echo form_error('orders'); ?>
                            <div class="form-group">
                                <button type="submit" name="btn_menu" id="btn_menu">Lưu danh mục</button>
                            </div>
                        </form>
                    </div>
                    <div id="category-menu" class="fl-right">
                        <div class="actions">
                            <select name="post_status">
                                <option value="-1">Tác vụ</option>
                                <option value="delete">Xóa vĩnh viễn</option>
                            </select>
                            <button type="submit" name="sm_block_status" id="sm-block-status">Áp dụng</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table list-table-wp">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                        <td><span class="thead-text">STT</span></td>
                                        <td><span class="thead-text">Tên menu</span></td>
                                        <td style="text-align: center;"><span class="thead-text">Slug</span></td>
                                        <td style="text-align: center;"><span class="thead-text">Thứ tự</span></td>
                                        <td><span class="thead-text">Tác vụ</span></td>
                                    </tr>
                                </thead>
                                <?php
                                $temp = 0;
                                if (!empty($list_menu)) {
                                    ?>
                                    <tbody>
                                        <?php
                                        foreach ($list_menu as $item) {
                                            $temp++;
                                            ?>
                                            <tr>
                                                <td><input type="checkbox" name="checkItem[]" class="checkItem" value="1"></td>
                                                <td><span class="tbody-text"><?php echo $temp; ?></span>
                                                <td>
                                                    <div class="tb-title fl-left">
                                                        <a href="" title=""><?php echo $item['name']; ?></a>
                                                    </div>
                                                </td>
                                                <td style="text-align: center;"><span class="tbody-text"><?php echo $item['slug']; ?></span></td>
                                                <td style="text-align: center;"><span class="tbody-text"><?php echo $item['orders']; ?></span></td>
                                                <td>
                                                    <a href="<?php echo $item['url_update']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo $item['url_delete']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    get_footer();
    ?>