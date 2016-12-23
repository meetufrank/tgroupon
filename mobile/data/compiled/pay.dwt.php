<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>支付方式</title>

  
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>

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
    

    
    <section class="container-fluid padding-top-3x padding-bottom-3x">

      <div class="row">
      	<div class="col-sm-6">

	        	<div class="shopping-cart-1 padding-bottom-1x" style="padding:15px; margin-bottom: 30px;">
				          		<div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
				          			<h4 class="text-primary">选择支付方式</h4>
				                </div>
                         <input type="hidden" value="<?php echo $this->_var['order']['order_id']; ?>" name="orderid">
                         <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
				                <div class="clearfix" style="position: relative;">

			          				<input style="position:relative;" name="pay_list" type="radio" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> value="<?php echo $this->_var['payment']['pay_id']; ?>"><div class="pull-left" style="margin-left: 22px;"><?php echo $this->_var['payment']['pay_name']; ?></div><?php if ($this->_var['payment']['logo']): ?><div class="pull-left" style="margin-top:-5px;margin-left: 20px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/<?php echo $this->_var['payment']['logo']; ?>"></div><?php endif; ?>

			          			</div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				          		<div class="padding-top-2x" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
				          			<h4 class="text-primary">确认付款</h4>
				                </div>
				                <div class="clearfix hidden-xs">
				                <h3 class="amount_pay pull-left" style="color:#f20000"><?php echo $this->_var['order']['goo']; ?></h3>
				                <div class="pull-right"><a href="#" class="btn btn-primary payput" >确认支付</a></div>
				                </div>
				                <div class="visible-xs">
				                <h3 class="amount_pay" style="color:#f20000"><?php echo $this->_var['order']['total_fee']; ?></h3>
				                <a href="#"  class="btn btn-primary payput" >确认支付</a>
				                </div>
				          </div>

      	</div>


      	<div class="col-sm-6 hidden-xs">

		        	<div class="shopping-cart-1 padding-bottom-1x" style="padding:15px; margin-bottom: 30px;">
					          		<div class="clearfix" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
					          			<h4 class="text-primary pull-left">订单信息</h4>
					          			<div class="pull-right">订单编号：<?php echo $this->_var['order']['order_sn']; ?></div>
					                </div>
                          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'og');if (count($_from)):
    foreach ($_from AS $this->_var['og']):
?>
					            
					            <div class="item">
					              <a href="shop-single.html" class="item-thumb">
					                <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/cart/item01.jpg" alt="Item">
					              </a>
					              <div class="item-details hidden-sm">
					                <h3 class="item-title"><a href="shop-single.html"><?php echo $this->_var['og']['goods_name']; ?></a></h3>
					                <h4 class="item-price">数量：<?php echo $this->_var['og']['goods_number']; ?></h4>
					                <h4 class="item-price"><?php echo $this->_var['og']['goods_price']; ?></h4>
					              </div>
					              <div class="item-details visible-sm">
					                <h3 class="item-title" style="font-size: 18px;"><a href="shop-single.html"><?php echo $this->_var['og']['goods_name']; ?></a></h3>
					                <h4 class="item-price" style="font-size: 14px;">数量：<?php echo $this->_var['og']['goods_name']; ?> </h4>
					                <h4 class="item-price" style="font-size: 14px;"><?php echo $this->_var['og']['goods_name']; ?></h4>
					              </div>
					            </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


					            	<h4 class="text-primary" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">收件人信息</h4>
					            	<div>
					            	收件人：<?php echo $this->_var['order']['consignee']; ?><br>
									手机号：<?php echo $this->_var['order']['tel']; ?><br>
									地   址 ：<?php echo $this->_var['order']['address']; ?>
									</div>
					          </div>

      	</div>

		</div>
    </section>
  </div>

  
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

	<section class="container space-top space-bottom padding-top-1x padding-bottom-1x">
		<div class="text-center">
			<div>联系我们：电话|微信：13502637171（KITTY）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系邮箱：3412355834@qq.com</div>
			<div>公司地址：广东省潮州市潮安区江东镇沙洲工业区</div>
			<div>ICP备案号</div>
		</div>
	</section>
  </div>
  

  
 <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/nouislider.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
 <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
 <script type="text/javascript">

    //确认支付
   $('.payput').click(function(){
     var pay_id=$("input[name='pay_list']:checked").val();//备用
    var content ='<div><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/code_weixin.jpg"></div>';
      var orderid='<?php echo $this->_var['order']['order_id']; ?>';

   alert(orderid);
    layer.open({
                        content:content,
                        btn: ['关闭'],
                        style:'width:190px;'
                      });


      });
 </script>

</body><!-- <body> -->

</html>
