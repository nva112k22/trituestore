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
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                </div>
            </div>            
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(<?php echo ($total_row); ?>)</span></a> |</li>
                            <!--<li class="publish"><a href="">Đã đăng <span class="count">(<?php echo success_order(); ?>)</span></a> |</li>-->
                            <!--<li class="pending"><a href="">Chờ xét duyệt <span class="count">(<?php echo handle_order(); ?>)</span> |</a></li>-->
                            <!--<li class="trash"><a href="">Thùng rác <span class="count">(0)</span></a></li>-->
                            <li class=""><a href="">Doanh thu: <span class="count"><?php echo currency_format(revenue()); ?></span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
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
                                    <!--<td><span class="thead-text">Mã đơn hàng</span></td>-->
                                    <td><span class="thead-text">Số sản phẩm</span></td>
                                    <td><span class="thead-text">Tổng giá</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Chi tiết</span></td>
                                    <td><span class="thead-text">Tác vụ</span></td>

                                </tr>
                            </thead>
                            <?php
                            $temp = $start;
                            if (!empty($list_orders)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($list_orders as $item) {
                                        $temp++;
                                        ?>
                                        <tr>

                                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                            <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
        <!--                                            <td class="clearfix">
                                                <div class="tb-title fl-left">
                                                    <span class="tbody-text"><?php echo $item['code']; ?></span>
                                                </div>
                                            </td>-->
                                            <td><span class="tbody-text"><?php echo $item['product_quantity']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo currency_format($item['total_price']); ?></span></td>
                                            <?php if ($item['status'] == 'shipped') {
                                                ?>
                                                <td><span class="badge badge-success"><?php echo $item['status']; ?></span></td>
                                                <?php
                                            } else if ($item['status'] == 'canceled') {
                                                ?>
                                                <td><span class="badge badge-danger"><?php echo $item['status']; ?></span></td>
                                                <?php
                                            } else {
                                                ?>
                                                <td><span class="badge badge-warning"><?php echo $item['status']; ?></span></td>
                                                <?php
                                            }
                                            ?>
                                            <td><span class="tbody-text"><?php echo date("d-m-Y H:i:s", strtotime($item['created_date'])); ?></span></td>
                                            <td><span class="tbody-text"><a href="?mod=orders&action=detail&id=<?php echo $item['order_id']; ?>">Chi tiết</a></span></td>
                                            <td>
                                                <a href="<?php echo $item['url_update']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
        <!--                                                <a href="<?php echo $item['url_delete']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>-->
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
            echo get_pagging($num_page, $page, "?mod=orders");
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>