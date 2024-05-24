<?php
get_header();
?>

<div id="main-content-wp" class="checkout-page">
    <style>
        p.error {
            font-size: 13px;
            color: #e25959;
        }
        p.success {
            font-size: 15px;
            color: #4fa327;
        }
        .btn-checkout {
            display: flex;
            justify-content: space-between;
        }
        .btn {
            color: #fff;
            border-radius: 5px;
            background: #f12a43;
            border: none;
            box-shadow: 0px;
            padding: 10px
        }
        .place-order-wp {
            position: absolute;
            right: 0;
            transform: translateY(-200%) translateX(-117%);
            width: max-content;
        }
    </style>
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="customer-info-wp">
            <div class="section-head">
                <h1 class="section-title">Thông tin khách hàng</h1>
            </div>
            <div class="section-detail">
                <form enctype="multipart/form-data" action="" method="POST" name="form-checkout">
                    <?php echo form_success('success'); ?>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="fullname">Họ tên</label>
                            <input type="text" name="fullname" id="fullname">
                            <?php echo form_error('fullname'); ?>
                        </div>
                        <div class="form-col fl-right">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address">
                            <?php echo form_error('address'); ?>
                        </div>
                        <div class="form-col fl-right">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" id="phone">
                            <?php echo form_error('phone'); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Ghi chú</label>
                            <textarea name="note"></textarea>
                            <?php echo form_error('note'); ?>
                        </div>
                    </div>
                    <div id="payment-checkout-wp">
                        <ul id="payment_methods">
                            <h1>Vui lòng chọn phương thức thanh toán:</h1>
                            <li>
                                <input type="radio" id="direct-payment" name="payment-method" value="Thanh toán online" checked>
                                <label for="direct-payment">Thanh toán online qua Momo</label>
                            </li>
                            <li>
                                <input type="radio" id="payment-home" name="payment-method" value="Thanh toán tại nhà">
                                <label for="payment-home">Thanh toán trực tiếp tại nhà</label>
                            </li>
                        </ul>
                    </div>
                    <div class="place-order-wp clearfix">
                        <input type="submit" id="order-now" name="order-now" value="Đặt hàng">
                    </div>
                </form>
            </div>
        </div>
        <div class="section" id="order-review-wp">
            <div class="section-head">
                <h1 class="section-title">Thông tin đơn hàng</h1>
            </div>
            <div class="section-detail">
                <table class="shop-table">
                    <thead>
                        <tr>
                            <td>Sản phẩm</td>
                            <td>Tổng</td>
                        </tr>
                    </thead>
                    <?php if (!empty($list_buy)) {
                        ?>
                        <tbody>
                            <?php
                            foreach ($list_buy as $item) {
                                ?>
                                <tr class="cart-item">
                                    <td class="product-name"><?php echo $item['name']; ?><strong class="product-quantity">x <?php echo $item['qty']; ?></strong></td>
                                    <td class="product-total"><?php echo currency_format($item['price_new']); ?></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                        ?>
                        <tfoot>
                            <tr class="order-total">
                                <td>Tổng đơn hàng:</td>
                                <td><strong class="total-price"><?php echo currency_format(get_total_cart()); ?></strong></td>
                            </tr>
                        </tfoot>
                        <?php
                    }
                    ?>
                </table>


            </div>
<!--            <div class="btn-checkout">
                <form class="" method="POST" enctype="application/x-www-form-urlencoded" action="?mod=cart&action=checkoutMomo">
                    <input type="submit" name="momo" value="Thanh toán qua MOMO QRcode" class="btn btn-danger"/>
                </form>

                <form class="" method="POST" enctype="application/x-www-form-urlencoded" action="?mod=cart&action=checkoutAtm">
                    <input type="submit" name="atm" value="Thanh toán qua ATM" class="btn btn-danger"/>
                </form> 
            </div>-->
        </div>
    </div>
</div>

<?php
get_footer();
?>