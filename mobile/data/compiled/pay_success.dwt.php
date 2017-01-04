<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>支付成功</title>

  
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/Swiper-3.4.0/dist/css/swiper.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>
  <style>
  .add-to-cart-pay{
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: 114px;
    height: 36px;
    line-height: 36px;
    font-size: 12px;
    font-weight: normal;
    text-transform: uppercase;
    text-align: center;
    color: #fff;
    background-color: #77cde3;
    border-radius: 4px;
    overflow: hidden;
    -webkit-transition: background-color 0.3s;
    -o-transition: background-color 0.3s;
    transition: background-color 0.3s
  }
  .add-to-cart-pay:hover{
    color: #fff;
    background-color: #51bfdb
  }
  .add-to-cart-pay:focus, .add-to-cart-pay:active {
    color: #fff
  }
  .add-to-cart-pay em {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    font-style: normal;
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: transform 0.3s;
    -o-transition: transform 0.3s;
    transition: transform 0.3s
  }
  .clear{
    clear:both;
  }
    </style>
</head>


<body class="page-preloading">

  
  <div class="page-preloader">
    <div class="preloader">
      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/preloader.gif" alt="Preloader">
    </div>
  </div>

  
  <div class="page-wrapper">
  
 <?php echo $this->fetch('head.dwt'); ?>
  

    

      <div class="featured-image" style="background-image: url(<?php echo $this->_var['ectouch_themes']; ?>/img/featured-image/pay-success.png);"></div>


    
    <section class="container padding-top padding-bottom">
      <div style="width:100px; height:30px;background-color:#ededed;position:absolute; margin-top:10px;"></div>
        <hr style="position:relative;">
      <h3 class="padding-top">猜 你 喜 欢</h3>
      <div class="row padding-top">

      <?php $_from = $this->_var['xh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xh_0_60714500_1483163806');if (count($_from)):
    foreach ($_from AS $this->_var['xh_0_60714500_1483163806']):
?>
      <div class="col-lg-3 col-sm-6 mobile-indent">
        <div class="shop-item">
        <div class="shop-thumbnail">
          <a href="shop-single.php?id=<?php echo $this->_var['xh_0_60714500_1483163806']['goods_id']; ?>" class="item-link"></a>
          <?php if ($this->_var['xh_0_60714500_1483163806']['goods_img']): ?><img src="../<?php echo $this->_var['xh_0_60714500_1483163806']['goods_img']; ?>" alt="Shop item"><?php endif; ?>
        </div>
        <div class="shop-item-details">
          <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xh_0_60714500_1483163806']['goods_id']; ?>"><?php echo $this->_var['xh_0_60714500_1483163806']['goods_name']; ?></a></h3>
          <span class="shop-item-price">
          <span class="old-price"></span>
            ￥<?php echo $this->_var['xh_0_60714500_1483163806']['shop_price']; ?>
          </span>
        </div>
        </div>
      </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </div>
    </section>

  
    <?php echo $this->fetch('foot.dwt'); ?>
    


<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>


</body><!-- <body> -->

</html>
