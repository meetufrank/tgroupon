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


<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head>
<meta name="Generator" content="TGROUPON v2.7.3" /> of the document. -->
<body class="page-preloading">

  
  <div class="page-preloader">
    <div class="preloader">
      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/preloader.gif" alt="Preloader">
    </div>
  </div>

  
  <div class="page-wrapper">
 
    <?php echo $this->fetch('head.dwt'); ?>
    


    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="container padding-top">

        
        <div class="product-gallery">
          
          <ul class="product-gallery-preview">
            <li id="preview01"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview01.jpg" alt="Product"></li>
            <li id="preview02" class="current"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview02.jpg" alt="Product"></li>
            <li id="preview03"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview03.jpg" alt="Product"></li>
          </ul>
          
          <ul class="product-gallery-thumblist">
            <li><a href="#preview01">
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/thumb01.jpg" alt="Product">
            </a></li>
            <li class="active"><a href="#preview02">
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/thumb02.jpg" alt="Product">
            </a></li>
            <li><a href="#preview03">
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/thumb03.jpg" alt="Product">
            </a></li>
          </ul>
        </div>
      </div>
    </section>

    
    <section class="fw-section bg-gray padding-bottom-3x">
      <div class="container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half">商品名称</h1>
          <h2>￥128.00</h2>
          <p class="text-sm text-gray">商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述商品描述</p>
          
          <div class="product-tools shop-item">
            <div class="count-input">
              <a class="incr-btn" data-action="decrease" href="#">–</a>
              <input class="quantity" type="text" value="1">
              <a class="incr-btn" data-action="increase" href="#">+</a>
            </div>
            <div class="form-element">
              <select class="form-control form-control-sm color-select">
                <option value="blue" data-image="preview02">蓝色</option>
                <option value="creme" data-image="preview01">灰色</option>
                <option value="red" data-image="preview03">红色</option>
              </select>
            </div>
            <div class="form-element">
              <select class="form-control form-control-sm color-select">
                <option value="blue" data-image="preview02">大尺寸</option>
                <option value="creme" data-image="preview01">中尺寸</option>
                <option value="red" data-image="preview03">小尺寸</option>
              </select>
            </div>
            <div class="form-element">
              <select class="form-control form-control-sm color-select">
                <option value="blue" data-image="preview02">组合形式</option>
                <option value="creme" data-image="preview01">组合形式</option>
                <option value="red" data-image="preview03">组合形式</option>
              </select>
            </div>
            <div class="form-element">
              <select class="form-control form-control-sm color-select">
                <option value="blue" data-image="preview02">外框类型</option>
                <option value="creme" data-image="preview01">外框类型</option>
                <option value="red" data-image="preview03">外框类型</option>
              </select>
            </div>
            <a href="#" class="add-to-cart" id="xqcar" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">
              <em>放入购物车</em>
              <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
  							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
  						</svg>
            </a>
            <a href="#" class="add-to-cart-pay" onclick="click_scroll();">
              <em>立即支付</em>
            </a>
          </div>
         <div class="product-share hidden-xs">
            <span>收藏:</span>
              <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-heart"></i>
              </a>
            <span style="margin-left:10px;">分享:</span>
            <div class="social-bar">
              <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" >
                <i class="fa fa-wechat" id="fenxiang"></i>
              </a>
             <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top">
                <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/fenxiangerweima.png" width="150px;" height="150px;" style="display:none;" id="erweima">
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
	
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6">
       		<p><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/artist-logo.png" style="width:60px;height:60px;border:1px solid transparent;border-radius:30px; float:left;"><span style="margin-top:15px;margin-left:15px; margin-right:15px;display:inline-block; font-size:18px; font-weight:blod;">达芬奇</span><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;"><span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:18px; font-weight:blod;">意大利</span></p>
       </div>
       <div class="artist-rt col-lg-6">
           <p style="font-size:16px; font-weight:bold;">线下门店</p>
           <div>
           <a href="#" style="float:left"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/yika.jpg" width="100px" height="120px" alt="店铺名称"/></a>
           <dl style="margin-left:110px; font-size:15px;">
           	<dt>
            	名称：<span>宜家家居（IEKA）</span>
            </dt>
            <dt>
            	地址：<span>上海市杨浦区昌源北路588号</span>
            </dt>
            <dt>
            	电话：<span>021:88888888</span>
            </dt>
           </dl>
           <div class="clear"></div>
           </div>
       </div>
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
            <div class="col-md-6 space-bottom">
              <div class="embed-responsive embed-responsive-16by9">
              	<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/blog/02.jpg">
                <!--<iframe src="https://player.vimeo.com/video/105829213?color=77cde3&title=0&byline=0&portrait=0" allowfullscreen></iframe>-->
              </div>
            </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero.</p>
              <p>Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.</p>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th>Weight</th>
                  <td>2.65 kg</td>
                </tr>
                <tr>
                  <th>Dimensions</th>
                  <td>120 x 75 x 90 cm</td>
                </tr>
                <tr>
                  <th>Materials</th>
                  <td>40% wood, 37% cotton, 23% plastic</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th>Colors</th>
                  <td>Blue, Creme, Orange, Red</td>
                </tr>
                <tr>
                  <th>Manufacturer</th>
                  <td>Norway</td>
                </tr>
                <tr>
                  <th>Other Info</th>
                  <td>Repellendus ea laudantium pariatur eum.</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        
        
<!--        <div role="tabpanel" class="tab-pane transition fade" id="reviews">

          <div class="review">
            <div class="review-author-ava">
              <img src="img/shop/reviews/01.jpg" alt="Review Author">
            </div>
            <div class="review-body">
              <div class="review-meta">
                <div class="column">
                  <h4 class="review-title">Very stylish. Great Deal!</h4>
                </div>
                <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                  </span>
                </div>
              </div>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
              <cite>Jessie James</cite>
            </div>
          </div>

          <div class="review">
            <div class="review-author-ava">
              <img src="img/shop/reviews/02.jpg" alt="Review Author">
            </div>
            <div class="review-body">
              <div class="review-meta">
                <div class="column">
                  <h4 class="review-title">Nice nordic design, afordable price.</h4>
                </div>
                <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star_border"></i>
                  </span>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.</p>
              <cite>Susanna Davis</cite>
            </div>
          </div>

          <div class="review">
            <div class="review-author-ava">
              <img src="img/shop/reviews/03.jpg" alt="Review Author">
            </div>
            <div class="review-body">
              <div class="review-meta">
                <div class="column">
                  <h4 class="review-title">Godd value for your money.</h4>
                </div>
                <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star_border"></i>
                  </span>
                </div>
              </div>
              <p>Anuo ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
              <cite>Donald Murphy</cite>
            </div>
          </div>

          <h4 class="padding-top">Leave a review</h4>
          <form method="post" class="row padding-top">
            <div class="col-sm-4">
              <div class="form-element">
                <input type="text" class="form-control" placeholder="Name*" required>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-element">
                <input type="email" class="form-control" placeholder="Email*" required>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-element form-select">
                <select class="form-control">
                  <option>5 stars</option>
                  <option>4 stars</option>
                  <option>3 stars</option>
                  <option>2 stars</option>
                  <option>1 star</option>
                </select>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-element">
                <textarea rows="8" class="form-control" placeholder="Review*" required></textarea>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-lg-offset-9 col-md-offset-8 col-sm-offset-6">
                  <button type="submit" class="btn btn-block btn-primary waves-effect waves-light space-top-none space-bottom-none">Leave Review</button>
                </div>
              </div>
            </div>
          </form>
        </div>-->
        
        
        
      </div>
    </section>

    
    <section class="container padding-top padding-bottom">
      <hr>
      <h3 class="padding-top">猜 你 喜 欢</h3>
      <div class="row padding-top">
        <div class="col-lg-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th05.jpg" alt="Shop item">
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#">商品 名称</a></h3>
              <span class="shop-item-price">
                <span class="old-price">￥69.00</span>
                ￥48.00
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th06.jpg" alt="Shop item">
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#">LED 大灯泡</a></h3>
              <span class="shop-item-price">
                ￥130.00
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th04.jpg" alt="Shop item">
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#">超级大灯泡</a></h3>
              <span class="shop-item-price">
                ￥178.00
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th08.jpg" alt="Shop item">
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#">包邮超级大灯泡</a></h3>
              <span class="shop-item-price">
                ￥112.35
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php echo $this->fetch('foot.dwt'); ?>

  </div>

  

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
	<script type="text/javascript">
  $(document).ready(function(){
	  $("#fenxiang").click(function(){
		if($("#erweima").css("display")=="none"){
			$("#erweima").show();
			}else{
			$("#erweima").hide();
			}
		});
	})
  </script>


</body><!-- <body> -->

</html>
