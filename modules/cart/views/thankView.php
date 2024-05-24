<?php
get_header();
?>
<div class="thank-page">
    <style>
        .thank-page, img {
            align-content: center;
            text-align: center;
            margin: 0 auto;
        }
        h1 {
            font-size: 25px;
        }
        .content {
      
        }
        .back {
            margin-top: 25px;
        }
    </style>
    <img src="public/images/kisspng-computer-icons-check-mark.jpg"/>
    <div class="clearfix">
        <div>
            <h1>Cảm ơn bạn đã đặt hàng</h1>
            <a href="?mod=cart&action=unset" title="" id="checkout-cart" class="back">Quay lại trang chủ</a>
        </div>
    </div>
</div>
<?php
get_footer();
?>
