<?php get_header(); ?>

<div id="main-content-wp" class="cart-page">
    <style>
        h1, .fa-circle-check {
            color: green;
            text-align: center;
            font-size: 30px;
            padding: 20px;
        }
    </style>
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h1><i class="fa-solid fa-circle-check"></i>Đặt hàng thành công</h1>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_buy as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item['code'] ?></td>
                                <td>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                        <img src="admin/<?php echo $item['image']; ?>" alt="">
                                    </a>
                                </td>
                                <td class="thead-text">
                                    <a href="<?php echo $item['url']; ?>" title="<?php echo $item['name']; ?>" class="name-product"><?php echo $item['name']; ?></a>
                                </td>
                                <td class="price" id="price"><?php echo currency_format($item['price_new']); ?></td>
                                <td>
                                    <input type="number" data-id="<?php echo $item['product_id']; ?>" min="1" max="10" name="qty[<?php echo $item['product_id']; ?>]" value="<?php echo $item['qty']; ?>" class="num-order" disabled>
                                </td>
                                <td class="total" id="sub-total-<?php echo $item['product_id']; ?>"><?php echo currency_format($item['sub_total']); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format(get_total_cart()); ?></span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <a href="?mod=cart&action=unset" title="" id="checkout-cart">Quay lại trang chủ</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


