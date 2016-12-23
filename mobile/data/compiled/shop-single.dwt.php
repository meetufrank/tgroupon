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

  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/pshow.css" rel="stylesheet" media="screen">
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/increase-68.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>
   <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/magiczoom_plus.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="js/transport.js"></script>
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
          <a href="#cart" class="toolbar-toggle" id="zhankai">
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
              <li><a href="artist-list.html">设计师</a></li>
              <li><a href="#">关于我们</a></li>
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
<!--      	  		<li><a class="relative" href="#">消息记录<span class="count">2</span></a></li>-->
                <li><a class="relative" href="#">消息记录</a></li>
      	  		<li><a href="#">管理地址</a></li>
              <li><a href="#">商品销量</a></li>
      	  	</ul>
        </div>

        
        <div class="toolbar-section" id="cart">
          <div class="shopping-cart" >
          		<div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;">
	          		<label class="checkbox check-label"  >
	                  	<input style="position: absolute; opacity: 0;" type="checkbox"  id="checkbox-all" value="all">
	                  <h4 style="margin-left:18px ;">全选</h4>
	                </label>
                </div>
            <div class="cart-subtotal space-bottom" id="zongjia">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>
              <div class="column">
                <h3 class="amount">￥0.00</h3>
              </div>
            </div>

            <div class="text-right">
              <a href="#checkout" id="qujiesuan" class="btn btn-primary waves-effect waves-light toggle-section">支付结算</a>
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
                <h3 class="amount"><small class="hidden-xs">数量：6&nbsp;&nbsp;&nbsp;</small>￥0.00</h3>
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

            <div class="cart-subtotal space-bottom" style="border-bottom: 2px solid #ededed;">
              <div class="column">
                <h3 class="toolbar-title">新增地址</h3>
              </div>
            </div>

            <form method="post" class="checkout-form container" action="#" id="xzdz">
            <div>

                <p><input type="text" class="form-control" name="UserName" placeholder="收件人"><span></span></p>
                <p><input type="text" class="form-control" name="UserTel" placeholder="手机号码"><span></span></p>
                <div class="row">
                  <div class="col-sm-6">
                  <p><input type="text" class="form-control" name="UserSf" placeholder="省份"><span></span></p>
                  </div>
                  <div class="col-sm-6">
                      <p><input type="text" class="form-control" name="UserCity" placeholder="城市"><span></span></p>
                  </div>
                </div>
                <p><input type="text" class="form-control" name="UserAddress" placeholder="详细地址"><span></span></p>
            </div>
            <div class="text-right">
              <a href="#checkout" class="btn btn-default btn-ghost icon-left toggle-section">
                	返回
              </a>
              <button class="btn btn-primary waves-effect waves-light" >
                	确认
              </button>
            </div>
            </form>
            </div>
      </div>
    </header>
    

    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="container padding-top">

        
        <div class="product-gallery">
          
          <ul class="product-gallery-preview">
            <li id="preview01"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview01.jpg" alt="Product"></li>
            <li id="preview02" class="current"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview02.jpg" alt="Product"></li>
            <li id="preview03"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview03.jpg" alt="Product"></li>
          </ul>

        </div>
      </div>
    </section>

         
    <section class="fw-section bg-gray padding-bottom-3x  hidden-xs">
      <div class="container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half">创 意 椅 子</h1>
          <h2 class="hidden-xs">￥128.00</h2>




		  <script type="text/javascript">
		                function attridfun(ids,type){
                            var arrtipt='#attidshuxingipt'+type;
							$(arrtipt).val(ids);
							var  idstr=ids;

							if(type == 2){

							       var top='#attidshuxingipt'+(type-1);
							       var  idstr=$(top).val()+','+ids;
								   
							}
							if(type == 3){

							       var top='#attidshuxingipt'+(type-2);
							       var  idstr=$(top).val()+','+ids;
								   
							}
							 var id = document.getElementById("goodsid").value;
							
							  $.ajax({
									type:"post",
									url:"shop-single.php?act=goodsattr",
									async:true,
									data:{'attrid':idstr,'id':id},

									dataType: "json",
									success: function (result) {
									type++;
									var box='#attridshuxdiv'+type+' a';
										    $(box).hide();
											$.each(result,function(i){


											     var str='#attrid_'+result[i].goods_attr;
											     var shuxindivid =  document.getElementById("attridshuxdiv");


												 $(str).show();
											});
										  }
							});



					   }

					   function attridshuxidfun(result){

					     console.log(result);

					   }
		  </script>

		   <!--
		        类型名称  <?php echo $this->_var['spec']['name']; ?> (如颜色、尺寸)
				属性名称  <?php echo $this->_var['value']['label']; ?> (如颜色中的黄色、黑色、白色)
		  -->
		 <input id="goodsid" type="hidden" value="<?php echo $this->_var['goods_id']; ?>">
		  <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
            <div class="cart-border col-lg-6 col-md-6 col-sm-6 hidden-xs" id="attridshuxdiv<?php echo $this->_foreach['name']['iteration']; ?>">

					<span class="cart-border-text"><?php echo $this->_var['spec']['name']; ?></span>

                     <input id="attidshuxingipt<?php echo $this->_foreach['name']['iteration']; ?>" type="hidden" value="">
					 <ul  class="cart-border-select" id="borderbox">
					 <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
						<li>
                           <?php echo $this->_var['value']['attr_img']; ?>
                           <input type="button" value="<?php echo $this->_var['value']['id']; ?>">
						   <a href="#" id="attrid_<?php echo $this->_var['value']['id']; ?>" onclick="attridfun(<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_foreach['name']['iteration']; ?>)" class="cart-border-select-details" title="<?php echo $this->_var['value']['label']; ?>"><?php echo $this->_var['value']['label']; ?></a>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>

				   <div class="clear"></div>
           </div>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>















          


          <div class="cart-color col-lg-6  col-md-6 col-sm-6 hidden-xs">
          	<span class="cart-color-text">颜色</span>
            <ul class="cart-color-select" id="colorbox">
            	<li><a href="#" class="cart-color-details cart-yellow" title="黄色"></a></li>
                <li><a href="#" class="cart-color-details cart-red" title="红色"></a></li>
                <li><a href="#" class="cart-color-details cart-white" title="灰色"></a></li>
                <li><a href="#" class="cart-color-details cart-deongaree" title="深蓝色"></a></li>
                <li><a href="#" class="cart-color-details cart-blue" title="淡蓝色"></a></li>
                <li><a href="#" class="cart-color-details cart-blue-1" title="浅蓝色"></a></li>
                <br/>
               	<li><a href="#" class="cart-color-details cart-yellow" title="黄色"></a></li>
                <li><a href="#" class="cart-color-details cart-red" title="红色"></a></li>
                <li><a href="#" class="cart-color-details cart-white" title="灰色"></a></li>
                <li><a href="#" class="cart-color-details cart-deongaree" title="深蓝色"></a></li>
                <li><a href="#" class="cart-color-details cart-blue" title="淡蓝色"></a></li>
                <li><a href="#" class="cart-color-details cart-blue-1" title="浅蓝色"></a></li>
            </ul>
            <div class="clear"></div>
          </div>



          <div class="cart-size col-lg-6 col-md-6 col-sm-6 hidden-xs">
          	<ul class="cart-size-select" id="sizebox">
            	<li><span>尺寸</span></li>
                <li><a href="#" class="cart-size-select-details" title="大码">大</a></li>
                <li><a href="#" class="cart-size-select-details" title="中码">中</a></li>
                <li><a href="#" class="cart-size-select-details" title="小码">小</a></li>
            </ul>
            <div class="clear"></div>
          </div>
          <div class="cart-group col-lg-6 col-md-6 col-sm-6 hidden-xs">
         	<span class="cart-group-text">组合形式</span>
             <ul class="cart-group-select" id="groupbox">
            	<li><a href="#" class="cart-group-select-details" title="单件">单件</a></li>
                <li><a href="#" class="cart-group-select-details" title="2件">2件</a></li>
                <li><a href="#" class="cart-group-select-details" title="3件">113件</a></li>
            </ul>
             <div class="clear"></div>
          </div>
          <div class="cart-border col-lg-6 col-md-6 col-sm-6 hidden-xs">
         	<span class="cart-border-text">外框类型</span>
             <ul class="cart-border-select" id="borderbox">
            	<li><a href="#" class="cart-border-select-details" title="单件">水泥</a></li>
                <li><a href="#" class="cart-border-select-details" title="2件">陶瓷</a></li>
                <li><a href="#" class="cart-border-select-details" title="3件">布艺</a></li>
            </ul>
             <div class="clear"></div>
          </div>
          
          <br/>
          <div class="product-tools shop-item hidden-xs">
            <div class="count-input">
              <a class="incr-btn" data-action="decrease" href="#">–</a>
              <input class="quantity" type="text" value="1">
              <a class="incr-btn" data-action="increase" href="#">+</a>
            </div>
            <a href="#" class="add-to-cart-pay" onclick="click_scroll();">
              <em>立即支付</em>
            </a>
            <a href="#" class="add-to-cart" id="xqcar">
              <em>放入购物车</em>
              <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
  							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
  						</svg>
            </a>
          </div>
         <div class="product-share hidden-xs">
            <span>收藏:</span>
              <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-heart"></i>
              </a>
            <span style="margin-left:10px;">分享:</span>
            <div class="social-bar hidden-xs">
                  <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top">
                    <i class="fa fa-wechat" id="fenxiang"></i>
                  </a>
                 <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top">
                    <img src="img/fenxiangerweima.png" width="150px;" height="150px;" style="display:none;" id="erweima">
                  </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="mobile-detail hidden-lg hidden-md hidden-sm">
    	<div class="col-xs-12 mobile-detail-1">
        	<span class="mobile-shop-name">创意椅子商品名称多了的话，显示效果测试情况如下创意椅子商品名</span>
        </div>
        <div class="col-xs-6 mobile-shop-price">￥128.00</div>
        <div class="mobile-count-input col-xs-6">
              <a class="mobile-incr-btn" href="#">–</a>
              <input class="mobile-quantity" type="text" value="1">
              <a class="mobile-incr-btn" href="#">+</a>
        </div>
        <div class="clear"></div>
        <p class="mobile-cart-color-text">颜色<span style="margin-left:10px; font-size:16px;color:#0CF" id="selectcolor"></span></p>
        <div class="mobile-cart-color">
            <ul class="mobile-cart-color-select" id="mobile-colorbox">
            	<li><a href="#" class="mobile-cart-color-details cart-yellow" title="黄色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-red" title="红色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-white" title="灰色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-deongaree" title="深蓝色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-blue" title="淡蓝色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-blue-1" title="浅蓝色"></a></li>
                <br/>
               	<li><a href="#" class="mobile-cart-color-details cart-yellow" title="黄色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-red" title="红色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-white" title="灰色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-deongaree" title="深蓝色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-blue" title="淡蓝色"></a></li>
                <li><a href="#" class="mobile-cart-color-details cart-blue-1" title="浅蓝色"></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-size-text">尺寸</p>
        <div class="mobile-cart-size">
          	<ul class="mobile-cart-size-select" id="mobile-sizebox">
                <li><a href="#" class="mobile-cart-size-select-details" title="大码">大</a></li>
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
	<?php $_from = $this->_var['spxx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spxx_0_75210300_1481682983');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['spxx_0_75210300_1481682983']):
        $this->_foreach['no']['iteration']++;
?>
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
       		<p>
            	<img src="<?php echo $this->_var['spxx_0_75210300_1481682983']['hav_logo']; ?>" style="width:60px;height:60px;border:1px solid transparent;border-radius:30px; float:left;">
            	<span style="margin-top:15px;margin-left:15px; margin-right:15px;display:inline-block; font-size:18px; font-weight:blod;"><?php echo $this->_var['spxx_0_75210300_1481682983']['user_name']; ?></span>
            	<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
            	<span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:18px; font-weight:blod;"><?php echo $this->_var['spxx_0_75210300_1481682983']['country']; ?></span>
           	</p>
       </div>

       <div class="artist-rt col-lg-6 col-md-6 col-sm-6">
           <p style="font-size:16px; font-weight:bold; margin-bottom:0px;">艺术家说:</p>
           <div style="font-size:15px; font-weight:bold; margin-top:5px;"><?php echo $this->_var['spxx_0_75210300_1481682983']['artiststalk']; ?></div>
       </div>
    </div>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </section>
    
    <section class="container padding-top-2x">
      
      <ul class="nav-tabs text-center" role="tablist">
        <li class="active"><a href="#description" role="tab" data-toggle="tab">产品介绍</a></li>
        <li><a href="#additional" role="tab" data-toggle="tab">商品规格</a></li>
<!--        <li><a href="#reviews" role="tab" data-toggle="tab">Reviews <sup>3</sup></a></li>-->
      </ul>
      
      <div class="tab-content">



        <div role="tabpanel" class="tab-pane transition fade in active" id="description">
         <?php echo $this->_var['miaoshu']['goods_desc']; ?>

        </div>

        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th>品牌</th>
                  <td>品牌<td>
                </tr>
                <tr>
                  <th>风格</th>
                  <td>风格</td>
                </tr>
                <tr>
                  <th>材质</th>
                  <td>材质</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th>颜色</th>
                  <td>颜色颜色颜色颜色颜色</td>
                </tr>
                <tr>
                  <th>尺寸</th>
                  <td>尺寸</td>
                </tr>
                <tr>
                  <th>重量</th>
                  <td>重量</td>
                </tr>
              </table>
            </div>
          </div>
        </div>



      </div>
    </section>












    
    <section class="container padding-top padding-bottom">
      <hr>
      <h3 class="padding-top">猜 你 喜 欢</h3>
      <div class="row padding-top">


		<?php $_from = $this->_var['xihuan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xihuan_0_75259600_1481682983');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['xihuan_0_75259600_1481682983']):
        $this->_foreach['no']['iteration']++;
?>
        <div class="col-lg-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="../<?php echo $this->_var['xihuan_0_75259600_1481682983']['goods_img']; ?>" alt="Shop item">
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#"><?php echo $this->_var['xihuan_0_75259600_1481682983']['goods_name']; ?></a></h3>
              <span class="shop-item-price">
                ￥<?php echo $this->_var['xihuan_0_75259600_1481682983']['market_price']; ?>
              </span>
            </div>
          </div>
        </div>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </div>
    </section>

 
  <footer class="footer">
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons credit_card"></i>
            </div>
            <h4 class="feature-title">微信支付</h4>
          </div>
      </div>
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons settings"></i>
            </div>
            <h4 class="feature-title">关于我们</h4>
          </div>
      </div>
      <div class="column">
      	<div class="feature text-center">
            <div class="feature-icon">
              <i class="material-icons face"></i>
            </div>
            <h4 class="feature-title">物流及售后服务</h4>
          </div>
      </div>
    </footer>
    
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
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
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
		  $("#colorbox li a").each(function(index){
			  $(this).click(function(){
				  $("#colorbox li a").removeClass("cart-color-details-change");
				  $("#colorbox li a").eq(index).addClass("cart-color-details-change");
		  		});
		  	});
			$("#sizebox li a").each(function(index){
			  $(this).click(function(){
				  $("#sizebox li a").removeClass("cart-size-select-details-visited");
				  $("#sizebox li a").eq(index).addClass("cart-size-select-details-visited");
		  		});
		  	});
			$("#groupbox li a").each(function(index){
			  $(this).click(function(){
				  $("#groupbox li a").removeClass("cart-group-select-details-visited");
				  $("#groupbox li a").eq(index).addClass("cart-group-select-details-visited");
		  		});
		  	});
			$("#borderbox li a").each(function(index){
			  $(this).click(function(){
				  $("#borderbox li a").removeClass("cart-border-details-visited");
				  $("#borderbox li a").eq(index).addClass("cart-border-details-visited");
		  		});
		  	});
			$("#mobile-colorbox li a").each(function(index){
			  $(this).click(function(){
				  $("#mobile-colorbox li a").removeClass("mobile-cart-color-details-change");
				  $("#mobile-colorbox li a").eq(index).addClass("mobile-cart-color-details-change");
				  var adom = $(this);//根据标签的id获取标签a的dom节点
				  var title = adom.attr('title');//获取title内容
				  var f = $("#selectcolor").text(title);
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
