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
                </div>
            </div>            
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="container-fluid py-5">
                        <div class="row">
                            <div class="col">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo success_order(); ?></h5>
                                        <p class="card-text">Đơn hàng giao dịch thành công</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                    <div class="card-header">ĐANG XỬ LÝ</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo handle_order(); ?></h5>
                                        <p class="card-text">Số lượng đơn hàng đang xử lý</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header">DOANH SỐ</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo currency_format(revenue()); ?></h5>
                                        <p class="card-text">Doanh số hệ thống</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">ĐƠN HÀNG HỦY</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo cancel_order(); ?></h5>
                                        <p class="card-text">Số đơn bị hủy trong hệ thống</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end analytic  -->
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                ĐƠN HÀNG MỚI
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Khách hàng</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Giá trị</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Thời gian</th>
                                            <th scope="col">Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                    <td><span class="tbody-text"><?php echo $item['code']; ?></h3></span>
                                                    <td class="clearfix">
                                                        <div class="tb-title fl-left">
                                                            <span class="tbody-text"><?php echo $item['fullname']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td><span class="tbody-text"><?php echo $item['product']; ?></span></td>
                                                    <td><span class="tbody-text"><?php echo $item['quantity']; ?></span></td>
                                                    <td><span class="tbody-text"><?php echo currency_format($item['price']); ?></span></td>
                                                    <?php if ($item['status'] == 'Hoạt động') {
                                                        ?>
                                                        <td><span class="badge badge-success"><?php echo $item['status']; ?></span></td>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <td><span class="badge badge-warning"><?php echo $item['status']; ?></span></td>
                                                        <?php
                                                    }
                                                    ?>
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

                                    </tbody>
                                </table>
                                <?php
                                echo get_pagging($num_page, $page, "?");
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>