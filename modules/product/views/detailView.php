<?php get_header(); ?>

<div id="main-content-wp" class="clearfix detail-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title=""><?php echo $info_cat['title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="detail-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb-wp fl-left">
                        <a href="" title="" id="main-thumb">
                            <img id="zoom" src="admin/<?php echo $product_item['image']; ?>"/>
                        </a>
                        <?php if (!empty($related_image)) { ?>
                            <div id="list-thumb">
                                <?php foreach ($related_image as $img) { ?>
                                    <a href="" data-image="admin/<?php echo $img; ?>" data-zoom-image="admin/<?php echo $img; ?>">
                                        <img id="zoom" src="admin/<?php echo $img; ?>" />
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="thumb-respon-wp fl-left">
                        <img src="admin/<?php echo $product_item['image']; ?>">
                    </div>
                    <div class="info fl-right">
                        <h3 class="product-name"><?php echo $product_item['name']; ?></h3>
                        <div class="desc">
                            <?php echo $product_item['descs']; ?>
                        </div>
                        <div class="num-product">
                            <span class="title">Sản phẩm: </span>
                            <span class="status">Còn hàng</span>
                        </div>
                        <p class="price"><?php echo currency_format($product_item['price_new']); ?></p>
                        <a href="<?php echo $product_item['url_add_cart']; ?>" title="Thêm giỏ hàng" class="add-cart">Thêm giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="section" id="post-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Mô tả sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <?php echo $product_item['desc_detail']; ?>
                </div>
            </div>
            <div class="section" id="same-category-wp">
                <div class="section-head">
                    <h3 class="section-title">Cùng chuyên mục</h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_item)) { ?>
                        <ul class="list-item list-items">
                            <?php foreach ($list_item as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb product-thumb">
                                        <img src="admin/<?php echo $item['image']; ?>">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="product-name"><?php echo $item['name']; ?></a>
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
                    <?php echo render_menu($list_cat_products, '', 'list-item'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
