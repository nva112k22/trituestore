<?php
get_header();
?>


<div id="main-content-wp" class="clearfix blog-page">
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
            <div class="section" id="list-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title">Blog</h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_posts)) {
                        ?>
                        <ul class="list-item">
                            <?php foreach ($list_posts as $value) {
                                ?>

                                <li class="clearfix">
                                    <a href="?mod=blog&action=detail&id=<?php echo $value['post_id']; ?>" title="" class="thumb fl-left">
                                        <img src="public/images/img-post-01.jpg" alt="">
                                    </a>
                                    <div class="info fl-right">
                                        <a href="?mod=blog&action=detail&id=<?php echo $value['post_id']; ?>" title="" class="title"><?php echo $value['title']; ?></a>
                                        <span class="create-date"><?php echo date("d-m-Y", strtotime($value['created_date'])); ?></span>
                                        <p class="desc"><?php echo $value['descs']; ?></p>
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
                <?php
                echo get_pagging($num_page, $page, "?mod=blog");
                ?>
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