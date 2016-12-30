<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>商品详情页</title>

  
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


  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.mins.css" rel="stylesheet" media="screen">

  
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
    .swiper-container {
        width:100%;
        height:400px;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
		text-align:center;
        background-size: cover;
        background-position: center;
	}
	.swiper-slide img{
		display:inline-block;
	}
	.pc-detaile-left{
		min-width:300px;
		min-height:300px;
		border:4px solid white;
		border-radius:3px;
	}
	.pc-detaile-right{
		min-height:319px;
	}
	.pc-thumbnail{
		 min-width:300px;
		 min-height:300px;
		 display:block;
		 margin:0 auto;
	}
	.pc-dright-top{
		 min-height:250px;
	}
	.pc-color-select{
		margin-top:20px;
	}
	.pc-color-select ul{
		max-width:200px;
		min-height:100px;
		display:inline-block;
		float:left;
		margin-left:5px;
		list-style:none;
	}
	.pc-color-select ul li{
		float:left;
		padding-top:8px;
		padding-left:10px;
	}
	.pc-color-select ul li a img{
		width:20px;
		height:20px;
	}
	.pc-size-select{
		margin-top:20px;
	}
	.pc-size-select ul{
		width:200px;
		min-height:100px;
		float:left;
		margin-left:5px;
		list-style:none;
	}
	.pc-size-select ul li{
		float:left;
		padding-left:5px;
		padding-top:5px;
	}
	.pc-size-detail{
		display:block;
		width:30px;
		height:30px;
		text-align:center;
		background-color:#CCCCCE;
		border:2px solid #CCCCCE;
		border-radius:1px;
		color:#000;
	}
	.pc-size-change{
		display:inline-block;
		width:30px;
		height:30px;
		text-align:center;
		background-colo:red;
		border:2px #10acf7 solid;
		border-radius:1px;
		color:#000;
	}
	.pc-group-select ul{
		width:200px;
		min-height:100px;
		float:left;
		margin-left:5px;
		list-style:none;
	}
	.pc-group-select ul li{
		float:left;
		padding-left:5px;
		padding-top:5px;
	}
	.pc-group-detail{
		display:block;
		width:60px;
		height:30px;
		background-color:#CCCCCE;
		border:2px #CCCCCE solid;
		border-radius:1px;
		color:black;
	}
	.pc-none{
		background-color:#C33;
	}
	.pc-group-change{
		display:block;
		width:60px;
		height:30px;
		background-color:#CCCCCE;
		border:2px #10acf7 solid;
		border-radius:1px;
		color:black;
	}
	.pc-mold-select ul{
		width:200px;
		min-height:100px;
		float:left;
		margin-left:5px;
		list-style:none;
	}
	.pc-mold-select ul li{
		float:left;
		padding-left:5px;
		padding-top:5px;
	}
	.pc-mold-detail{
		display:block;
		width:50px;
		height:30px;
		background-color:#CCCCCE;
		border:2px #CCCCCE solid;
		border-radius:1px;
		color:black;
	}
	.pc-mold-change{
		display:block;
		width:50px;
		height:30px;
		background-color:#CCCCCE;
		border:2px #10acf7 solid;
		border-radius:1px;
		color:black;
	}
	.pc-dright-bottom{
		min-height:50px;
	}
	.mobile-color-change{
		width: 40px;
		height: 40px;
		display: block;
		overflow: hidden;
		border: 3px solid #10acf7;
	}
	.mobile-none{
		background-color:#C33;
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
	
   <header class="navbar navbar-sticky">

      
      <a href="index.html" class="site-logo visible-desktop">
        COLOR <span>&</span> SHAPE
      </a>
      <a href="index.html" class="site-logo visible-mobile">
        COLOR <span>&</span> SHAPE
      </a>


      
      <div class="toolbar">
        <div class="inner">
          <a href="#menu" class="toolbar-toggle"><i class="material-icons menu"></i></a>
          <a href="#cart" class="toolbar-toggle">
            <i>
              <span class="material-icons shopping_basket"></span>
<!--              <span class="count">2</span>-->
            </i>
          </a>
          <a href="#account" class="toolbar-toggle"><i class="material-icons person"></i></a>
        </div>
      </div>

      
      <div class="toolbar-dropdown">

        
        <div class="toolbar-section" id="menu">
          <div class="inner">
            <ul class="main-navigation space-bottom">
              <li><a href="index.html">首页</a></li>
              <li><a href="shop-fullwidth-sl.html">商品</a></li>
              <li><a href="artist-list.html">艺术家</a></li>
              <li><a href="about-us.html">关于我们</a></li>
            </ul>

          </div>
          
        </div>

        
        <div class="toolbar-section" id="account">
          <h3 class="toolbar-title space-bottom">用户登录</h3>
          <div class="inner">
          	<a href="#userinfo" class="btn btn-primary waves-effect waves-light toggle-section">
          		<i class="material-icons question_answer"></i>
          		点击扫二维码登录
      		</a>
          </div>
        </div>

        
        <div class="toolbar-section" id="userinfo">
            <div class="clearfix">
            <a href="#account" class="btn btn-primary waves-effect waves-light pull-right toggle-section">退出</a>
            <div class="quotation pull-left" style="width:auto;">
              <div class="quotation-author-ava pull-left">
                <img class="" src="<?php echo $this->_var['ectouch_themes']; ?>/img/team/quote_author.jpg" alt="James Cameron">
              </div>
              &nbsp;&nbsp;
              <span style="display:inline-block; line-height:74px;">微信名称</span>
          	</div>
      	  	</div>
      	  	<hr class="padding-bottom">
      	  	<ul class="main-navigation space-bottom">
      	  		<li><a href="my_order.html">我的订单</a></li>
      	  		<li><a href="#">我的收藏</a></li>
      	  		<li><a class="relative" href="#">消息记录<!--<span class="count">2</span>--></a></li>
      	  		<li><a href="#">管理地址</a></li>
      	  	</ul>
        </div>

        
        <div class="toolbar-section" id="cart">
          <div class="shopping-cart">
          		<div style=" border-bottom: 2px solid #ededed; margin-bottom:30px; ">
          		<label class="checkbox">
                  	<input style="position: absolute; opacity: 0;" type="checkbox">
                  	<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                  <h4 style="margin-left:18px ;">全选</h4>
                </label>
                </div>
            
            <div class="item">
            	<label class="checkbox">
                  	<input style="position: absolute; opacity: 0;" type="checkbox">
                  	<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
              <a href="shop-single.html" class="item-thumb">
                <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/cart/item01.jpg" alt="Item">
              </a>
              <div class="item-details">
                <h3 class="item-title"><a href="shop-single.html">商品名称</a></h3>
                <h4 class="item-price">$85.90</h4>
                <div class="count-input">
                  <a class="incr-btn" data-action="decrease" href="#">–</a>
                  <input class="quantity" type="text" value="1">
                  <a class="incr-btn" data-action="increase" href="#">+</a>
                </div>
              </div>
              <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="Remove">
                <i class="material-icons delete"></i>
              </a>
            </div>
            
            <div class="item">
            	<label class="checkbox">
                  	<input style="position: absolute; opacity: 0;" type="checkbox">
                  	<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
              <a href="shop-single.html" class="item-thumb">
                <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/cart/item02.jpg" alt="Item">
              </a>
              <div class="item-details">
                <h3 class="item-title"><a href="shop-single.html">商品名称</a></h3>
                <h4 class="item-price">$38.00</h4>
                <div class="count-input">
                  <a class="incr-btn" data-action="decrease" href="#">–</a>
                  <input class="quantity" type="text" value="2">
                  <a class="incr-btn" data-action="increase" href="#">+</a>
                </div>
              </div>
              <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="Remove">
                <i class="material-icons delete"></i>
              </a>
            </div>
            
            <div class="cart-subtotal space-bottom">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>
              <div class="column">
                <h3 class="amount">$161.90</h3>
              </div>
            </div>
            
            <div class="text-right">
              <a href="#checkout" class="btn btn-primary waves-effect waves-light toggle-section">支付结算</a>
            </div>
          </div>
        </div>

        
        <div class="toolbar-section" id="checkout">
          <form method="post" class="checkout-form container">
            <div class="cart-subtotal space-bottom" style="border-bottom: 2px solid #ededed;">
              <div class="column">
                <h3 class="toolbar-title">订单确认</h3>
              </div>
              <div class="column">
                <h3 class="amount"><small class="hidden-xs">数量：6&nbsp;&nbsp;&nbsp;</small>$161.90</h3>
              </div>
            </div>

            <div class="form-group">
              <label class="radio radio-inline">
                <input type="radio" name="co_shipping" checked>
                	联系人：里默默<br>
					手机号：18954781245<br>
					地   址 ：上海市五角场黄兴路100号1号楼102室
              </label>
            </div>

            <div class="form-group">
              <label class="radio radio-inline">
                <input type="radio" name="co_shipping">
                	联系人：里默默<br>
					手机号：18954781245<br>
					地   址 ：上海市五角场黄兴路100号1号楼102室
              </label>
            </div>
            <h3><a class="toggle-section" href="#address">新增地址</a></h3>
            <div class="text-right">
              <a href="#cart" class="btn btn-default btn-ghost icon-left toggle-section">
                	取消
              </a>
              <a href="#" class="btn btn-primary waves-effect waves-light">
                	确认
              </a>
            </div>
          </form>
        </div>

        
        <div class="toolbar-section" id="address">
          <form method="post" class="checkout-form container">
            <div class="cart-subtotal space-bottom" style="border-bottom: 2px solid #ededed;">
              <div class="column">
                <h3 class="toolbar-title">填写地址</h3>
              </div>
            </div>

            <input type="text" class="form-control" name="" placeholder="收件人">
            <input type="text" class="form-control" name="" placeholder="手机号码">
            <div class="row">
              <div class="col-md-4">
                <div class="form-element form-select">
                  <select class="form-control" name="">
                    <option value="">省</option>
                    <option value="australia">Australia</option>
                    <option value="gb">Great Britain</option>
                    <option value="poland">Poland</option>
                    <option value="switzerland">Switzerland</option>
                    <option value="usa">USA</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-element form-select">
                  <select class="form-control" name="">
                    <option value="">市</option>
                    <option value="1">State 1</option>
                    <option value="2">State 2</option>
                    <option value="3">State 3</option>
                    <option value="4">State 4</option>
                    <option value="5">State 5</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-element form-select">
                  <select class="form-control" name="">
                    <option value="">区</option>
                    <option value="1">State 1</option>
                    <option value="2">State 2</option>
                    <option value="3">State 3</option>
                    <option value="4">State 4</option>
                    <option value="5">State 5</option>
                  </select>
                </div>
              </div>
            </div>
            <input type="text" class="form-control" name="" placeholder="详细地址">
            <div class="text-right">
              <a href="#checkout" class="btn btn-default btn-ghost icon-left toggle-section">
                	返回
              </a>
              <a href="#checkout" class="btn btn-primary waves-effect waves-light toggle-section">
                	确认
              </a>
            </div>
            </form>
            </div>
      </div>
    </header>
	

    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="swiper-container">
            <div class="swiper-wrapper">
					<?php $_from = $this->_var['xiangce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xiangce_0_82157000_1483068240');if (count($_from)):
    foreach ($_from AS $this->_var['xiangce_0_82157000_1483068240']):
?>
						<div class="swiper-slide"><img src="../<?php echo $this->_var['xiangce_0_82157000_1483068240']['img_url']; ?>"></div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>

            
    		<div class="swiper-pagination"></div>
            <!--<div class="swiper-button-prev" style="width:50px;">-PREV</div>
            <div class="swiper-button-next" style="width:50px;">NEXT-</div>-->
		</div>
    </section>

    
    <section class="fw-section bg-gray padding-bottom-3x  hidden-xs">
      <div class="container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half">创 意 椅 子</h1>
          <h2 class="hidden-xs" style="color:#E7322E;">￥128.00</h2>
          
          	<div class="pc-detaile-left col-lg-4 col-md-4 col-sm-4 hidden-xs">
			   <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview01.jpg" class="pc-thumbnail">
            </div>
          
            <div class="pc-detaile-right col-lg-8 col-md-8 col-sm-8 hidden-xs">
           		<div class="pc-dright-top">
                	<div class="pc-color-select col-lg-6 col-md-6 col-sm-6" id="pc-select-color">
                    	<span style="float:left; margin-top:5px;">选择颜色:</span>
                        <ul>
                        	<li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                            <li><a href="#"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                        </ul>
                     	<div class="clear"></div>
                    </div>
                    <div class="pc-size-select col-lg-6 col-md-6 col-sm-6" id="pc-select-size">
                    	<span style="float:left; margin-top:5px;">选择尺寸:</span>
                        <ul>
                        	<li><a href="#" class="pc-size-detail pc-none">大</a></li>
                            <li><a href="#" class="pc-size-detail">中</a></li>
                            <li><a href="#" class="pc-size-detail">小</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="pc-group-select col-lg-6 col-md-6 col-sm-6" id="pc-select-group">
                    	<span style="float:left; margin-top:5px;">组合形式:</span>
                        <ul>
                        	<li><a href="#" class="pc-group-detail">单件</a></li>
                            <li><a href="#" class="pc-group-detail">2件</a></li>
                            <li><a href="#" class="pc-group-detail">103件</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="pc-mold-select col-lg-6 col-md-6 col-sm-6" id="pc-select-mold">
                    	<span style="float:left; margin-top:5px;">外框类型:</span>
                        <ul>
                        	<li><a href="#" class="pc-mold-detail">水泥</a></li>
                            <li><a href="#" class="pc-mold-detail">陶瓷</a></li>
                            <li><a href="#" class="pc-mold-detail">布艺</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="pc-dright-bottom">
                	<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="count-input">
                          <a class="incr-btn" data-action="decrease" href="#">–</a>
                          <input class="quantity" type="text" value="1">
                          <a class="incr-btn" data-action="increase" href="#">+</a>
                		</div>
                    </div>
                	<div class="col-lg-3 col-md-3 col-sm-3" style="padding-top:8px;min-height:48px;">
                         <a href="#" class="add-to-cart-pay">
                                <em>立即支付</em>
                         </a>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2" style="padding-top:8px;min-height:48px;">
                        <a href="#" class="add-to-cart">
                            <em>放入购物车</em>
                        </a>
                   </div>
                   <div class="col-lg-5 col-md-4 col-sm-4" style="padding-top:10px;min-height:48px;">
                     <span>收藏:</span><a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-heart"></i></a>
                    <span>分享:</span><a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-wechat" id="fenxiang"></i></a>
                   </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    <section class="mobile-detail hidden-lg hidden-md hidden-sm">
    	<div class="mobile-thumbnail col-xs-5" style="padding:5px;">
        	<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview03.jpg" id="Mobilethumbnail">
        </div>
        <div class="col-xs-7">
            <div class="mobile-detail-1">
                <span class="mobile-shop-name">创意椅子哈哈哈哈哈哈哈测试哈哈哈测试</span>
            </div>
            <div class="mobile-shop-price">￥128.00</div>
            <div class="mobile-count-input">
                  <a class="mobile-incr-btn" href="#">–</a>
                  <input class="mobile-quantity" type="text" value="1">
                  <a class="mobile-incr-btn" href="#">+</a>
            </div>
        </div>
        <div class="clear"></div>
        <p class="mobile-cart-color-text">颜色<span style="margin-left:10px; font-size:17px;color:#09F" id="selectcolor"></span></p>
        <div class="mobile-cart-color" id="mobile-select-color">
            <ul class="mobile-cart-color-select">
            	<li><a href="#" title="绿色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                <li><a href="#" title="紫色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                <li><a href="#" title="红色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                <li><a href="#" title="青色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                <li><a href="#" title="蓝色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
                <li><a href="#" title="粉色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/orange.png"></a></li>
               	<li><a href="#" title="橙色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                <li><a href="#" title="褐色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                <li><a href="#" title="黄色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                <li><a href="#" title="黑色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                <li><a href="#" title="青色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
                <li><a href="#" title="玫红色"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/bottle green.png"></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-size-text">尺寸</p>
        <div class="mobile-cart-size">
          	<ul class="mobile-cart-size-select" id="mobile-sizebox">
                <li><a href="#" class="mobile-cart-size-select-details mobile-none" title="大码">大</a></li>
                <li><a href="#" class="mobile-cart-size-select-details" title="中码">中</a></li>
                <li><a href="#" class="mobile-cart-size-select-details" title="小码">小</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-group-text">组合形式</p>
        <div class="mobile-cart-group">
          	<ul class="mobile-cart-group-select" id="mobile-groupbox">
                <li><a href="#" class="mobile-cart-group-details" title="单件">单件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="两件">两件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="三件">三件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="四件">四件</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-border-text">外框类型</p>
        <div class="mobile-cart-border">
          	<ul class="mobile-cart-border-select" id="mobile-borderbox">
                <li><a href="#" class="mobile-cart-border-details" title="水泥">水泥</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="陶瓷">陶瓷</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="布艺">布艺</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="泥巴">麻绳</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </section>
    <div class="clear"></div>
	
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
	      <?php $_from = $this->_var['spysj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spysj_0_82404100_1483068240');if (count($_from)):
    foreach ($_from AS $this->_var['spysj_0_82404100_1483068240']):
?>
       		<p>
            	<img src="<?php echo $this->_var['spysj_0_82404100_1483068240']['hav_logo']; ?>" style="width:80px;height:80px;border:1px solid transparent;border-radius:50px; float:left;">
            	<span style="margin-top:20px;margin-left:15px; margin-right:15px;display:inline-block; font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_82404100_1483068240']['user_name']; ?></span>
            	<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
            	<span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_82404100_1483068240']['country']; ?></span>
           	</p>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
       <!--<div class="artist-rt col-lg-6 col-md-6 col-sm-6">
           <p style="font-size:16px; font-weight:bold; margin-bottom:0px;">艺术家说:</p>
           <div style="font-size:15px; font-weight:bold; margin-top:5px;">人生的磨难是很多的，所以我们不可对于每一件轻微的伤害都过于敏感。在生活磨难面前，精神上的坚强和无动于衷是我们抵抗罪恶和人生意外的最好武器。 —— 洛克</div>
       </div>-->
    </div>
    </section>
    
    <section class="container padding-top-2x">
      
      <ul class="nav-tabs text-center" role="tablist">
        <li class="active"><a href="#description" role="tab" data-toggle="tab">产品介绍</a></li>
        <li><a href="#additional" role="tab" data-toggle="tab">商品规格</a></li>
<!--        <li><a href="#reviews" role="tab" data-toggle="tab">Reviews <sup>3</sup></a></li>-->
      </ul>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane transition fade in active" id="description">
          <div class="row space-top">
                <?php $_from = $this->_var['goodsdesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goodsdesc_0_82442400_1483068240');if (count($_from)):
    foreach ($_from AS $this->_var['goodsdesc_0_82442400_1483068240']):
?>
		             <?php echo $this->_var['goodsdesc_0_82442400_1483068240']['goods_desc']; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
          <?php $_from = $this->_var['spguige']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spguige_0_82467100_1483068240');if (count($_from)):
    foreach ($_from AS $this->_var['spguige_0_82467100_1483068240']):
?>
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige1']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu1']; ?></td>
                </tr>
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige2']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu2']; ?></td>
                </tr>
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige3']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu3']; ?></td>
                </tr>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige4']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu4']; ?></td>
                </tr>
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige5']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu5']; ?></td>
                </tr>
                <tr>
                  <th><?php echo $this->_var['spguige_0_82467100_1483068240']['guige6']; ?></th>
                  <td><?php echo $this->_var['spguige_0_82467100_1483068240']['canshu6']; ?></td>
                </tr>
              </table>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
        </div>
      </div>
    </section>

    
    <section class="container padding-top padding-bottom">
    	<div style="width:100px; height:30px;background-color:#ededed;position:absolute; margin-top:10px;"></div>
      	<hr style="position:relative;">
      <h3 class="padding-top">猜 你 喜 欢</h3>
      <div class="row padding-top">

	    <?php $_from = $this->_var['xh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xh_0_82544800_1483068240');if (count($_from)):
    foreach ($_from AS $this->_var['xh_0_82544800_1483068240']):
?>
			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=<?php echo $this->_var['xh_0_82544800_1483068240']['goods_id']; ?>" class="item-link"></a>
				  <img src="../<?php echo $this->_var['xh_0_82544800_1483068240']['goods_img']; ?>" alt="Shop item">
				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xh_0_82544800_1483068240']['goods_id']; ?>"><?php echo $this->_var['xh_0_82544800_1483068240']['goods_name']; ?></a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥<?php echo $this->_var['xh_0_82544800_1483068240']['shop_price']; ?>
				  </span>
				</div>
			  </div>
			</div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


      </div>
    </section>

 	
    <footer class="footer padding-top-2x">
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons credit_card"></i>
            </div>
			<h4 class="feature-title"><a id="Cooperate" href="about-us.html">与我们合作</a></h4>
          </div>
      </div>
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons settings"></i>
            </div>
            <h4 class="feature-title"><a href="about-us.html">关于我们</a></h4>
          </div>
      </div>
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons face"></i>
            </div>
            <h4 class="feature-title"><a href="about-us.html">物流及售后服务</a></h4>
          </div>
      </div>
    </footer>

	<section class="container space-top space-bottom padding-top-1x padding-bottom-1x">
		<div class="text-center">
			<div class="hidden-xs">
				<div>联系我们：电话|微信：13502637171（KITTY）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系邮箱：3412355834@qq.com</div>
				<!-- <div>公司地址：广东省潮州市潮安区江东镇沙洲工业区</div> -->
				<div style="margin-top: 10px;">ICP备案号</div>
			</div>
			<div class="visible-xs">
				<div>联系我们：电话|微信：13502637171（KITTY）</div>
				<div style="margin-top: 10px;">联系邮箱：3412355834@qq.com</div>
				<div style="margin-top: 10px;">ICP备案号</div>
			</div>
		</div>
	</section>
    
    <div class="mobile-foot col-xs-12 hidden-sm hidden-md hidden-lg" style="position:fixed;bottom:0;padding:0px;">
		<div class="col-xs-6" style="padding:0px;">
        	<a href="#" class="mobile-add-to-cart">
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay">
              立即支付
         </a>
        </div>
    </div>
  </div>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/Swiper-3.4.0/dist/js/swiper.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>

  <script>
	  var mySwiper = new Swiper ('.swiper-container', {
		direction: 'horizontal',
		loop: true,
		//双击放大
/*		zoom : true,*/
		// 如果需要前进后退按钮
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        spaceBetween: 30,
        effect: 'slide'
	  })
  	</script>


<script type="text/javascript">
  $(document).ready(function(){
	  $("#fenxiang").click(function(){
		  var content= '<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/fenxiangerweima.png">';
			layer.open({
				closeBtn: 0,
				title: false,
				type: 1,
				content: content
			});
		});
	$("#Mobilethumbnail").click(function(){
		  var content= '<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview03.jpg">';
			layer.open({
				closeBtn: 0,
				title: false,
				type: 1,
				content: content,
				style:'width:300px; height:250px;'
			});
		});
	})
</script>

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.validate.js" type="text/javascript"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/messages_zh.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function () {
        $("#xqcar").click(function(){
            layer.open({
                content: '已加入购物车',
                skin: 'msg',
                time: 0.5 //0.5秒后自动关闭
            });
            $.ajax({
                type:"GET",
                url:"3.json",
                dataType: "json",
                success: function(data){
                    $(".item").find("input[type='checkbox']").iCheck("destroy");
                    //console.log(data);
                    $.each(data,function(i){
                        $("#zongjia").before('<div class="item">'+'<label class="checkbox">'+'<input style="position: absolute; opacity: 0;" type="checkbox" value="1">'+'</label>'+'<a href="shop-single.html" class="item-thumb">'+'<img src="'+data[i].img+'" alt="Item">'+'</a>'+'<div class="item-details">'+'<h3 class="item-title"><a href="shop-single.html">'+data[i].tradename+'</a></h3>'+'<h4 class="item-price" data-price="'+data[i].money+'">'+'￥'+data[i].money+'</h4>'+'<div class="count-input">'+'<a class="incr-btn" data-action="decrease" href="#">–</a>'+'<input class="quantity" type="text" value="'+data[i].value+'">'+'<a class="incr-btn" data-action="increase" href="#">+</a>'+'</div>'+'</div>'+'<a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车">'+'<i class="material-icons delete"></i>'+'</a>'+'</div>');//内容添加到页面上.
                    });
                    $(".item").find("input[type='checkbox']").on('ifChanged', function(event){ //ifCreated 事件应该在插件初始化之前绑定
                        jisuanjiage();
                    });
                    $(".item").find("input[type='checkbox']").iCheck();
                },
                error: function(){
                    alert("json出错");
                }
            });

        });
        $('#checkbox-all').on('ifChanged', function(event){ //ifCreated 事件应该在插件初始化之前绑定
            choseAll();
        });
        var $checkbox = $('input[type="checkbox"], input[type="radio"]');
        if($checkbox.length) {
            $('input').iCheck();
        }
        $("#cart").on("click",".item-remove",function(){
            $(this).parents(".item").remove();;
            jisuanjiage();
        });
        $("#cart").on("click",".incr-btn",function(){
            var $button = $(this);
            var oldValue = $button.parent().find('.quantity').val();
            $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
            if ($button.data('action') == "increase") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below 1
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                    $button.addClass('inactive');
                }
            }
            $button.parent().find('.quantity').val(newVal);
            jisuanjiage();
        });
        jisuanjiage();
	});
    function choseAll(){
        console.info($("#checkbox-all")[0].checked);
        if($("#checkbox-all")[0].checked==true) {
            $(".shopping-cart").find("input[type='checkbox']").iCheck('check');
        }else{
            $(".shopping-cart").find("input[type='checkbox']").iCheck('uncheck');
        }
        jisuanjiage();
        // $(".shopping-cart").find("input[type='checkbox']").attr("checked",$("#checkbox-all").attr('checked'));;
    }
    function jisuanjiage(){
        var pay=0;
        $(".shopping-cart").children(".item").each(function () {
            if($(this).find("input[type='checkbox']")[0].checked){
                var price =parseFloat($(this).find(".item-price").attr("data-price"));
                var quantity=parseFloat($(this).find("input[class='quantity']").val());
                pay+=price*quantity;
            }
        });
        if(pay>0){
            $("#qujiesuan").show();
        }else{
            $("#qujiesuan").hide();
        }
        $(".amount").text("￥"+pay.toFixed(2));
        // $(".shopping-cart").find("input[type='checkbox']").attr("checked",$("#checkbox-all").attr('checked'));;
    }
	</script>

    <script type="text/javascript">
	// 手机号码验证
	jQuery.validator.addMethod("isMobile", function(value, element) {
    	var length = value.length;
    	var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
    	return this.optional(element) || (length == 11 && mobile.test(value));
	}, "请正确填写您的手机号码");

	 $(function () {
		$("#xzdz").validate({
			 rules: {
                    UserName: {required: true,},
                    UserTel: {required: true, number:true,isMobile:true,min:11},
                    UserSf: {required: true,},
                    UserCity: {required: true,minlength:2,maxlength:15},
					UserAddress: {required: true,minlength:2,maxlength:30}
                },
                messages:{
                    UserName: {
                        required: "请输入收货人！",
                     },
                    UserTel: {
                        required: "请填写你的手机号码",
                        number:"手机号码只能为数字",
						min: "手机号码必须为11位数！",
						isMobile:"请正确填写您的手机号码",
                     },
                    UserSf: {
                        required: "请输入省份！",
                    },
                    UserCity: {
                        required: "请输入城市!",
                    },
					UserAddress: {
                        required: "请输入地址!",
                    }
                },
                /*错误提示位置*/
                errorPlacement: function (error, element) {
                    error.appendTo(element.siblings("span"));
                }
		})
	})
	</script>
    <script type="text/javascript">
	 function click_scroll() {
 		 document.getElementById("zhankai").click();
	 }
	</script>
    
    <script type="text/javascript">
		$(document).ready(function (){
		  $("#pc-select-color li a").each(function(index){
			  $(this).click(function(){
				  $("#pc-select-color li a").removeClass("cart-color-details-change");
				  $("#pc-select-color li a").eq(index).addClass("cart-color-details-change");
		  		});
		  	});
			$("#pc-select-size li a").each(function(index){
			  $(this).click(function(){

				  $("#pc-select-size li a").removeClass("pc-size-change");
				  $("#pc-select-size li a").eq(index).addClass("pc-size-change");
		  		});
		  	});
			$("#pc-select-group li a").each(function(index){
			  $(this).click(function(){
				  $("#pc-select-group li a").removeClass("pc-group-change");
				  $("#pc-select-group li a").eq(index).addClass("pc-group-change");
		  		});
		  	});
			$("#pc-select-mold li a").each(function(index){
			  $(this).click(function(){
				  $("#pc-select-mold li a").removeClass("pc-mold-change");
				  $("#pc-select-mold li a").eq(index).addClass("pc-mold-change");
		  		});
		  	});
			$("#mobile-select-color li a").each(function(index){
			  $(this).click(function(){
				  $("#mobile-select-color li a").removeClass("mobile-color-change");
				  $("#mobile-select-color li a").eq(index).addClass("mobile-color-change");
				  var adom = $(this);//根据标签的id获取标签a的dom节点
				  var gettitle = adom.attr("title");//获取title内容
				  var f = $("#selectcolor").text(gettitle);
		  		});
		  	});
			$("#mobile-sizebox li a").each(function(index){
			  $(this).click(function(){
				  $("#mobile-sizebox li a").removeClass("mobile-cart-size-change");
				  $("#mobile-sizebox li a").eq(index).addClass("mobile-cart-size-change");
		  		});
		  	});
			$("#mobile-groupbox li a").each(function(index){
			  $(this).click(function(){
				  $("#mobile-groupbox li a").removeClass("mobile-cart-group-change");
				  $("#mobile-groupbox li a").eq(index).addClass("mobile-cart-group-change");
		  		});
		  	});
			$("#mobile-borderbox li a").each(function(index){
			  $(this).click(function(){
				  $("#mobile-borderbox li a").removeClass("mobile-cart-border-change");
				  $("#mobile-borderbox li a").eq(index).addClass("mobile-cart-border-change");
		  		});
		  	});
 		});
	</script>
</body><!-- <body> -->

</html>
