<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>COLOR & SHAPE</title>

  
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
-->
  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
   <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>
  
  
  <style>
    .quotation{
    	width:50%;
    }
    .quotation .quotation-author-ava{
    	width:100px;
    	float:left;
    	margin-right:20px;
    }
	.quotation-author a:hover {
	    color: #333;
	}
	.quotation-author a {
		display:block;
		margin-top:30px;
	    text-decoration: none;
	    color: #999;
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
    
 <?php $_from = $this->_var['ysjxx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ysjxx_0_82573600_1480670497');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['ysjxx_0_82573600_1480670497']):
        $this->_foreach['no']['iteration']++;
?>
    
    <div class="featured-image" style="background-image: url(<?php echo $this->_var['ectouch_themes']; ?>/img/featured-image/faq.jpg);"></div>
	
	<section class="container padding-top-2x">
		<div class="clearfix">
			<div class="quotation pull-left">
	            <div class="quotation-author">
	              <div class="quotation-author-ava">
	                <img src="<?php echo $this->_var['ysjxx_0_82573600_1480670497']['hav_logo']; ?>" alt="James Cameron">
	              </div>
	              <a href="#"><?php echo $this->_var['ysjxx_0_82573600_1480670497']['user_name']; ?>&nbsp;|&nbsp;<?php echo $this->_var['ysjxx_0_82573600_1480670497']['country']; ?></a>
	            </div>
	          </div>
	          <div class="pull-right" style="margin-top: 20px;">
	          	<a href="#" class="sb-twitter">
                  <i class="fa fa-heart" style="width:30px; height:30px; border:1px solid #999; background-color:#999; border-radius:10px; text-align:center; padding-top:5px;"></i>
                </a>
	          <!--	<a href="#" class="btn btn-default btn-sm" title="">
                  <i class="material-icons question_answer"></i>
                </a>-->
             </div>
          </div>
		<hr>
      	<h3 class="padding-top">艺术家简介</h3>
      	<div class="row space-top">
           <?php echo $this->_var['ysjxx_0_82573600_1480670497']['artiststalk']; ?>
          </div>
	    
    </section>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
    <section class="container padding-top padding-bottom">
      <hr>
      <h3 class="padding-top">近期作品</h3>
      <div class="row padding-top">
	  <?php $_from = $this->_var['ysjzp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ysjzp_0_82619200_1480670497');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['ysjzp_0_82619200_1480670497']):
        $this->_foreach['no']['iteration']++;
?>
        <div class="col-lg-3 col-sm-6" id="nextsp">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="#" class="item-link"></a>
              <img src="../<?php echo $this->_var['ysjzp_0_82619200_1480670497']['goods_img']; ?>" alt="Shop item">
             
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#"><?php echo $this->_var['ysjzp_0_82619200_1480670497']['goods_name']; ?></a></h3>
              <span class="shop-item-price">
                <?php echo $this->_var['ysjzp_0_82619200_1480670497']['market_price']; ?>
              </span>
            </div>
          </div>
        </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	   
	   
	   
       
      </div>
    </section>
    <br>
	    <div class="row padding-top" id="more">          
          <div class="text-center padding-bottom-2x">
          	<a href="#" class="btn btn-primary waves-effect waves-light" id="getValue-2">加载更多</a>
          	<br>
          	<a><i class="material-icons arrow_downward"></i></a>
          </div>
      
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

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.validate.js" type="text/javascript"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/messages_zh.js" type="text/javascript"></script>
   <script type="text/javascript">
        $(function(){			
            $("#getValue-2").click(function(){										
                $.ajax({
                    type:"GET",
                    url:"2.json",
                    dataType: "json",
                    success: function(data){
						//console.log(data);
						$.each(data,function(i){
							layer.open({
    						type: 2
    						,content: '加载中'
							,time: 0.5 //2秒后自动关闭
  					});							
                           $("#nextsp").after('<div class="col-lg-3 col-sm-6">'+'<div class="shop-item">'+'<div class="shop-thumbnail">'+'<a href="#" class="item-link"></a>'+'<img src="'+data[i].photo+'" alt="Shop item">'+'</div>'+'<div class="shop-item-details">'+'<h3 class="shop-item-title"><a href="#">'+data[i].name+'</a></h3>'+'<span class="shop-item-price">'+data[i].money+'</span>'+'</div>'+'</div>'+'</div>');//内容添加到页面上.           
                             });                     
                    },
                    error: function(){
                        alert("出错");
                    }
                });
				
            })
        })
    </script>
    <script type="text/javascript">
	$(document).ready(function () {
        $("#newcomers .shop-item-tools a").click(function(){
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
</body><!-- <body> -->

</html>
