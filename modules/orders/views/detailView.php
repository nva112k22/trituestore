<?php get_header(); ?>

<div id="main-content-wp" class="list-product-page">
    <style>
        #content {
            padding-left: 180px;
            padding-right: 180px;
        }
        .section-title {
            font-size: 20px;
            font-weight: 700;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .total-fee .total {
            color: red;
        }
    </style>
    <div class="wrap clearfix">
        <div id="content" class="">
            <div class="section" id="info">
                <div class="section-head">
                    <h1 class="section-title">Chi tiết đơn hàng</h1>
                </div>
                <ul class="list-item">
                    <li>
                        <h3 class="title">Mã đơn hàng</h3>
                        <span class="detail">#<?php echo $list_orders['order_id']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Tên khách hàng</h3>
                        <span class="detail"><?php echo $list_customer['fullname']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Địa chỉ nhận hàng</h3>
                        <span class="detail"><?php echo $list_customer['address']; ?> / <?php echo $list_customer['phone_number']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Thông tin vận chuyển</h3>
                        <span class="detail"><?php echo $list_orders['payment']; ?></span>
                    </li>
                    <form method="POST" action="">
                        <li>
                            <h3 class="title">Tình trạng đơn hàng</h3>
                            <select name="status">
                                <!--                            <option value='0'>Chờ duyệt</option>
                                                                <option value='1'>Đang vận chuyển</option>
                                                                <option value='2'>Thành công</option>-->
                                <option value='<?php echo $list_orders['status']; ?>' selected><?php echo $list_orders['status']; ?></option>                            
                            </select>
                            <!--<input type="submit" name="sm_status" value="Cập nhật đơn hàng">-->
                        </li>
                    </form>
                    <li>
                        <?php
                        foreach ($list_paid as &$paid) {
                            ?>
                            <?php
                            if ($paid['order_id'] === $list_orders['order_id']) {
                                ?>
                                <h3 class="paid"><?php echo "Đơn hàng #" . $list_orders['order_id'] . " đã được thanh toán qua MoMo ATM" . "<br>"; ?></h3>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="section">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm đơn hàng</h3>
                </div>
                <div class="table-responsive">
                    <table class="table info-exhibition">
                        <thead>
                            <tr>
                                <td class="thead-text">STT</td>
                                <td class="thead-text">Ảnh sản phẩm</td>
                                <td class="thead-text">Tên sản phẩm</td>
                                <td class="thead-text">Đơn giá</td>
                                <td class="thead-text">Số lượng</td>
                                <td class="thead-text">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $temp = 0;
                            foreach ($list_order_items as $item) {
                                $temp++
                                ?>
                                <tr>
                                    <td class="thead-text"><?php echo $temp; ?></td>
                                    <td class="thead-text">
                                        <a title="" class="thumb">
                                            <img src="admin/<?php echo $item['image_url']; ?>" alt="">
                                        </a>
                                    </td>
                                    <td class="thead-text">
                                        <a title="<?php echo $item['product']; ?>" class="name-product"><?php echo $item['product']; ?></a>
                                    </td>
                                    <td class="thead-text" id="price"><?php echo currency_format($item['price']); ?></td>
                                    <td class="thead-text">
                                        <input type="number" min="1" max="10" value="<?php echo $item['quantity']; ?>" class="num-order" disabled>
                                    </td>
                                    <td class="thead-text"><?php echo currency_format($item['sub_total']); ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="section">
                <h3 class="section-title">Giá trị đơn hàng</h3>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <span class="total-fee">Tổng số lượng</span>
                            <span class="total">Tổng đơn hàng</span>
                        </li>
                        <li>
                            <span class="total-fee"><?php echo $list_orders['product_quantity']; ?></span>
                            <span class="total"><?php echo currency_format($list_orders['total_price']); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>