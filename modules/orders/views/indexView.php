<?php
get_header();
?>

<div id="main-content-wp" class="list-post-page">
    <style>
        #content {
            padding-left: 180px;
            padding-right: 180px;
        }
        #index {
            font-size: 25px;
            font-weight: 700;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .badge-success {
            background: green;
            color: white;
            padding: 3px;
            border-radius: 3px;
        }

        .badge-danger {
            background: red;
            color: white;
            padding: 3px;
            border-radius: 3px;
        }

        .badge-warning {
            background: yellow;
            color: black;
            padding: 3px;
            border-radius: 3px;
        }

    </style>
    <div class="wrap clearfix">
        <div id="content" class="">           
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h1 id="index" class="fl-left">Đơn hàng đã đặt</h1>
                </div>
            </div>            
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <!--<td><span class="thead-text">Mã đơn hàng</span></td>-->
                                    <td><span class="thead-text">Số sản phẩm</span></td>
                                    <td><span class="thead-text">Tổng giá</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Chi tiết</span></td>
                                </tr>
                            </thead>
                            <?php
                            $temp = 0;
                            if (!empty($list_orders)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($list_orders as $item) {
                                        $temp++;
                                        ?>
                                        <tr>

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