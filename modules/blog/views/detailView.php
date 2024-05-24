<?php
get_header();
?>

<div id="main-content-wp" class="clearfix detail-blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="detail-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title"><?php echo $post_by_id['title'];?></h3>
                </div>
                <div class="section-detail">
                    <span class="create-date"><?php echo date("d-m-Y", strtotime($post_by_id['created_date'])); ?></span>
                    <div class="detail">
                        <?php echo $post_by_id['desc_detail'];?>
                    </div>
                </div>
            </div>
            <div class="section" id="social-wp">
                <div class="section-detail">
                    <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <div class="g-plusone-wp">
                        <div class="g-plusone" data-size="medium"></div>
                    </div>
                    <div class="fb-comments" id="fb-comment" data-href="" data-numposts="5"></div>
                </div>
            </div>
        </div>
        <div class="sidebar fl-left">
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
                                        <a href="" title="" class="buy-now">Mua ngay</a>
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

<?php
get_footer();
?>
