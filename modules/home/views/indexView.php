<?php
get_header();
?>

<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <?php if (!empty($list_slider)) { ?>
                        <?php foreach ($list_slider as $item) { ?>
                            <div class="item">
                                <img src="admin/<?php echo $item['image_url']; ?>" alt="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-1.png">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-2.png">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">1900.9999</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-3.png">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-4.png">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-5.png">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php if(!empty($list_hot)) echo "Sản phẩm nổi bật"; ?></h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_hot)) { ?>
                        <ul class="list-item">
                            <?php foreach ($list_hot as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb product-thumb">
                                        <img src="admin/<?php echo $item['image']; ?>">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                    <div class="price">
                                        <span class="new"><?php echo currency_format($item['price_new']); ?></span>
                                        <span class="old"><?php echo currency_format($item['price_old']); ?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="<?php echo $item['url_add_cart'] ?>" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="<?php echo $item['url']; ?>" title="Xem thêm" class="buy-now fl-right">Xem thêm</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php if(!empty($list_mobile)) echo "Sách kỹ năng"; ?></h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_mobile)) { ?>
                        <ul class="list-item list-items">
                            <?php foreach ($list_mobile as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb product-thumb">
                                        <img src="admin/<?php echo $item['image']; ?>">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                    <div class="price">
                                        <span class="new"><?php echo currency_format($item['price_new']); ?></span>
                                        <span class="old"><?php echo currency_format($item['price_old']); ?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="<?php echo $item['url_add_cart'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="<?php echo $item['url']; ?>" title="Xem thêm" class="buy-now fl-right">Xem thêm</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php if(!empty($list_laptop)) echo "Sách kinh doanh"; ?></h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_laptop)) { ?>
                        <ul class="list-item list-items">
                            <?php foreach ($list_laptop as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb product-thumb">
                                        <img src="admin/<?php echo $item['image']; ?>">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                    <div class="price">
                                        <span class="new"><?php echo currency_format($item['price_new']); ?></span>
                                        <span class="old"><?php echo currency_format($item['price_old']); ?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="<?php echo $item['url_add_cart'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="<?php echo $item['url']; ?>" title="Xem thêm" class="buy-now fl-right">Xem thêm</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php if(!empty($list_airpot)) echo "Sách học tập"; ?></h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_airpot)) { ?>
                        <ul class="list-item list-items">
                            <?php foreach ($list_airpot as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb product-thumb">
                                        <img src="admin/<?php echo $item['image']; ?>">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                    <div class="price">
                                        <span class="new"><?php echo currency_format($item['price_new']); ?></span>
                                        <span class="old"><?php echo currency_format($item['price_old']); ?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="<?php echo $item['url_add_cart'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="<?php echo $item['url']; ?>" title="Xem thêm" class="buy-now fl-right">Xem thêm</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="sidebar fl-left">
            <div class="section" id="category-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Danh mục sản phẩm</h3>
                </div>
                <div class="secion-detail">
                    <?php echo render_menu($category_products, '', 'list-item'); ?>
                </div>
            </div>
            <div class="section" id="selling-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_hot)) { ?>
                        <ul class="list-item">
                            <?php foreach ($list_hot as $item) { ?>
                                <li class="clearfix">
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb fl-left">
                                        <img src="admin/<?php echo $item['image']; ?>" alt="">
                                    </a>
                                    <div class="info fl-right">
                                        <a href="<?php echo $item['url']; ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
                                        <div class="price">
                                            <span class="new"><?php echo currency_format($item['price_new']); ?></span>
                                            <span class="old"><?php echo currency_format($item['price_old']); ?></span>
                                        </div>
                                        <a href="<?php echo $item['url']; ?>" title="Xem thêm" class="buy-now">Xem thêm</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function buy() {
        var result = confirm("Bạn có muốn chuyển đến giỏ hàng");
        if (result == true) {
            redirect('?mod=cart');
        } else {
//            redirect('?');
        }
        return result;
    }
</script>
<?php
get_footer();
?>
