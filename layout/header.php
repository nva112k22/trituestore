
<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" type="text/css"/>


        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/app.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    <li>
                                        <a href="?" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="?mod=product" title="">Sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="?mod=blog" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="?mod=blog&action=detail&id=1" title="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="?mod=blog&action=detail&id=2" title="">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?" title="" id="logo" class="fl-left"><img src="public/images/logo.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="">
                                    <input type="text" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <button type="submit" id="sm-s" name="sm_s">Tìm kiếm</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <?php
                                $num_order = get_num_order_cat();
                                if ($num_order > 0) {
                                    ?>
                                    <a href="?page=cart" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="num"><?php echo $num_order; ?></span>
                                    </a>
                                    <div id="cart-wp" class="fl-right">
                                        <div id="btn-cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="num"><?php echo $num_order; ?></span>
                                        </div>
                                        <div id="dropdown">
                                            <p class="desc">Có <span><?php echo $num_order; ?> sản phẩm</span> trong giỏ hàng</p>
                                            <ul class="list-cart">
                                                <?php
                                                foreach ($_SESSION['cart']['buy'] as $item) {
                                                    ?>
                                                    <li class="clearfix">
                                                        <a href="<?php echo $item['url']; ?>" title="" class="thumb fl-left">
                                                            <img src="admin/<?php echo $item['image']; ?>" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                                            <p class="price"><?php echo currency_format($item['price_new']); ?></p>
                                                            <p class="qty">Số lượng: <span><?php echo $item['qty']; ?></span></p>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <div class="total-price clearfix">
                                                <p class="title fl-left">Tổng:</p>
                                                <p class="price fl-right"><?php echo currency_format(get_total_cart()); ?></p>
                                            </div>
                                            <dic class="action-cart clearfix">
                                                <a href="?mod=cart" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                                <a href="?mod=cart&action=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                            </dic>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>