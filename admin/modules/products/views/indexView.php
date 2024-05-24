<?php
get_header();
?>

<div id="main-content-wp" class="list-post-page">
    <style>
        /*Style pagging*/
        ul.pagging{
            float: right;
            margin-top: 23px;
        }
        ul.pagging li {
            float: left;
            padding: 0px 2px;
        }
        ul.pagging li a{
            display: block;
            padding: 5px 10px;
            color: #333;
            border: 1px solid #dedede;
        }

        ul.pagging li.active a {
            border: 1px solid #f00;
            color: #f00;
        }

        .images {
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
        }
    </style>
    <div class="wrap clearfix">
        <?php echo get_sidebar(); ?>
        <div id="content" class="fl-right">           
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?mod=products&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>            
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(<?php echo $total_row; ?>)</span></a> |</li>
                            <!--<li class="publish"><a href="">Đã đăng <span class="count">(<?php echo success_order(); ?>)</span></a> |</li>-->
                            <!--<li class="pending"><a href="">Chờ xét duyệt <span class="count">(<?php echo handle_order(); ?>)</span> |</a></li>-->
                        </ul>
                        <form method="POST" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
<!--                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Chỉnh sửa</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>-->
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã sản phẩm</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Tên sản phẩm</span></td>
                                    <td><span class="thead-text">Giá mới</span></td>
                                    <td><span class="thead-text">Giá cũ</span></td>
                                    <td><span class="thead-text">Danh mục</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Người tạo</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Tác vụ</span></td>
                                </tr>
                            </thead>
                            <?php
                            $temp = $start;
                            if (!empty($list_products)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($list_products as $item) {
                                        $temp++;
                                        ?>
                                        <tr>

                                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                            <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
                                            <td class="clearfix">
                                                <div class="tb-title fl-left">
                                                    <span class="tbody-text"><?php echo $item['code']; ?></span>
                                                </div>
                                            </td>
                                            <td><span class="tbody-text"><img class="images" href="" src="<?php echo $item['image_url']; ?>" /></span></td>
                                            <td><span class="tbody-text"><?php echo $item['name']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo currency_format($item['price_new']); ?></span></td>
                                            <td><span class="tbody-text"><?php echo currency_format($item['price_old']); ?></span></td>
                                            <td><span class="tbody-text"><?php echo $item['category_product']; ?></span></td>
                                            <?php if ($item['status'] == 'Đã đăng') {
                                                ?>
                                                <td><span class="badge badge-success"><?php echo $item['status']; ?></span></td>
                                                <?php
                                            } else {
                                                ?>
                                                <td><span class="badge badge-warning"><?php echo $item['status']; ?></span></td>
                                                <?php
                                            }
                                            ?>
                                            <td><span class="tbody-text"><?php echo $created_user; ?></span></td>
                                            <td><span class="tbody-text"><?php echo date("d-m-Y H:i:s", strtotime($item['created_date'])); ?></span></td>
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
            <?php
            echo get_pagging($num_page, $page, "?mod=products");
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>