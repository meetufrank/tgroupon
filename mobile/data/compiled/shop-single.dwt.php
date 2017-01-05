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
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
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

<script type="text/javascript">
$(function(){
  var data=<?php echo $this->_var['select']; ?>;
  $(".type_arr  ul li ").css("display",'none');
  $.each(data,function(i){
    $.each(data[i],function(x){
          $("#type_"+data[i][x]).parent("li").css("display",'block');
    })


  })

});
     function attrshuaixuan(attrid,typeid,typenum){

        $("#type_"+attrid).parent().siblings('li').children('a').removeClass('pc-group-change');
        $("#type_"+attrid).addClass("pc-group-change");
        $("input[name='spec_"+typeid+"']").val(attrid);
         var formBuy      = document.forms['ECS_FORMBUY'];
          if (formBuy)
          {
            spec_arr = getSelectedAttributes(formBuy);


          }


         $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=attrshuaixuan",
                                    async:true,
                                    data:{attrid:attrid,typenum:typenum,spec_arr:spec_arr,typeid:typeid},
                                    dataType: "json",
                                    success: function (data) {
                                      if(data.error==1){
                                        alert('未找到该商品!');
                                        window.location.href=window.location.href;
                                        return;
                                      }
                                       $(".type_arr  ul li ").css("display",'none');
                                       // $("#pc-select-group"+typenum+"  ul li ").css("display",'block');

                                      $.each(data.select,function(i) {

                                        $.each(data.select[i],function(x){

                                          $("#type_"+data.select[i][x]).parent("li").css("display",'block');

                                        });


                                      });
                                      $.each(data.checked,function(i){
                                          $("#type_"+data.checked[i]).parent().siblings('li').children('a').removeClass('pc-group-change');
                                          $("#type_"+data.checked[i]).addClass("pc-group-change");
                                        });
                                     $(".pc-thumbnail").attr("src","././admin/"+data.data.attributeimg);
                                     $("#pc_price").text("￥"+data.data.attributeprice);
                                          }//回调函数结束
                               });//ajax结束

       }



</script>




</head>


<body class="page-preloading">

  
  <div class="page-preloader">
    <div class="preloader">
      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/preloader.gif" alt="Preloader">
    </div>
  </div>

  
  <div class="page-wrapper">
	
   <?php echo $this->fetch('head.dwt'); ?>
	

    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="swiper-container">
            <div class="swiper-wrapper">
					<?php $_from = $this->_var['xiangce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xiangce_0_15402300_1483584229');if (count($_from)):
    foreach ($_from AS $this->_var['xiangce_0_15402300_1483584229']):
?>
						<div class="swiper-slide"><img src="../<?php echo $this->_var['xiangce_0_15402300_1483584229']['img_url']; ?>"></div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>

            
    		<div class="swiper-pagination"></div>
            <!--<div class="swiper-button-prev" style="width:50px;">-PREV</div>
            <div class="swiper-button-next" style="width:50px;">NEXT-</div>-->
		</div>
    </section>



    
    <section class="fw-section bg-gray padding-bottom-3x  hidden-xs">
     <input id="goodsid" type="hidden" value="<?php echo $this->_var['goods_id']; ?>">
      <div class="container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half"></h1>
          <h2 class="hidden-xs" style="color:#E7322E;" id="pc_price">￥<?php echo $this->_var['jiagedata']['attributeprice']; ?></h2>
          
          	<div class="pc-detaile-left col-lg-4 col-md-4 col-sm-4 hidden-xs">
            <?php if ($this->_var['jiagedata']['attributeimg']): ?>
			   <img src="././admin/<?php echo $this->_var['jiagedata']['attributeimg']; ?>" class="pc-thumbnail">
            <?php endif; ?>
            </div>

          

            <div class="pc-detaile-right col-lg-8 col-md-8 col-sm-8 hidden-xs">
           		<div class="pc-dright-top">
                    <form  name="ECS_FORMBUY">
                           <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
                           <input type="hidden" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)]; ?>" >

                                 <div class="pc-group-select col-lg-6 col-md-6 col-sm-6 type_arr" id="pc-select-group<?php echo ($this->_foreach['name']['iteration'] - 1); ?>">
                            <span style="float:left; margin-top:5px;"><?php echo $this->_var['spec']['name']; ?>:</span>
                              <ul>
                              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                <li>
                                    <a href="#" onclick="attrshuaixuan(<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>,<?php echo ($this->_foreach['name']['iteration'] - 1); ?>)" <?php if ($this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)] == $this->_var['value']['id']): ?>class="pc-group-detail pc-group-change"<?php else: ?>class="pc-group-detail"<?php endif; ?> id="type_<?php echo $this->_var['value']['id']; ?>" data-type="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?><img src="<?php echo $this->_var['value']['attrimg']; ?>"></a>
                                </li>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                              </ul>
                              <div class="clear"></div>
                          </div>
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </form>
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
                         <a href="#" class="add-to-cart-pay" onClick="addToCart(164,'',1)">
                                <em>立即支付</em>
                         </a>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2" style="padding-top:8px;min-height:48px;">
                        <a href="#" class="add-to-cart"  onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
                            <em>放入购物车</em>
                        </a>
                   </div>
                   <div class="col-lg-5 col-md-4 col-sm-4" style="padding-top:10px;min-height:48px;">
                     <span>收藏:</span><a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top"><i id="shochang"  class="fa fa-heart"></i></a>
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
            <div class="mobile-shop-price">￥1280.00</div>
            <div class="mobile-count-input">
                  <a class="mobile-incr-btn" href="#">–</a>
                  <input class="mobile-quantity" type="text" value="1">
                  <a class="mobile-incr-btn" href="#">+</a>
            </div>
        </div>
        <div class="clear"></div>
        <p class="mobile-cart-color-text">颜色<span style="margin-left:10px; font-size:17px;color:#09F" id="selectcolor"></span></p>

      <form  name="ECS_FORMBUY">
      <!--   <div class="mobile-cart-color" id="mobile-select-color"><input  name="spec_1"  value="367"/>
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
        <div class="mobile-cart-size"><input  name="spec_2"  value="377"/>
          	<ul class="mobile-cart-size-select" id="mobile-sizebox">
                <li><a href="#" class="mobile-cart-size-select-details mobile-none" title="大码">大</a></li>
                <li><a href="#" class="mobile-cart-size-select-details" title="中码">中</a></li>
                <li><a href="#" class="mobile-cart-size-select-details" title="小码">小</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-group-text">组合形式</p>
        <div class="mobile-cart-group"><input  name="spec_3"  value="387"/>
          	<ul class="mobile-cart-group-select" id="mobile-groupbox">
                <li><a href="#" class="mobile-cart-group-details" title="单件">单件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="两件">两件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="三件">三件</a></li>
                <li><a href="#" class="mobile-cart-group-details" title="四件">四件</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p class="mobile-cart-border-text">外框类型</p>
        <div class="mobile-cart-border"><input  name="spec_4"  value="397"/>
          	<ul class="mobile-cart-border-select" id="mobile-borderbox">
                <li><a href="#" class="mobile-cart-border-details" title="水泥">水泥</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="陶瓷">陶瓷</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="布艺">布艺</a></li>
                <li><a href="#" class="mobile-cart-border-details" title="泥巴">麻绳</a></li>
            </ul>
            <div class="clear"></div>
        </div> -->
         <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
                 <p class="mobile-cart-border-text"><?php echo $this->_var['spec']['name']; ?></p>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </form>
    </section>
    <div class="clear"></div>
	
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
	      <?php $_from = $this->_var['spysj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spysj_0_15402300_1483584229');if (count($_from)):
    foreach ($_from AS $this->_var['spysj_0_15402300_1483584229']):
?>
       		<p>
            	<img src="<?php echo $this->_var['spysj_0_15402300_1483584229']['hav_logo']; ?>" style="width:80px;height:80px;border:1px solid transparent;border-radius:50px; float:left;">
            	<span style="margin-top:20px;margin-left:15px; margin-right:15px;display:inline-block; font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_15402300_1483584229']['user_name']; ?></span>
            	<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
            	<span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_15402300_1483584229']['country']; ?></span>
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
                <?php $_from = $this->_var['goodsdesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goodsdesc_0_15402300_1483584229');if (count($_from)):
    foreach ($_from AS $this->_var['goodsdesc_0_15402300_1483584229']):
?>
		             <?php echo $this->_var['goodsdesc_0_15402300_1483584229']['goods_desc']; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
          <?php $_from = $this->_var['spguige']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spguige_0_15402300_1483584229');if (count($_from)):
    foreach ($_from AS $this->_var['spguige_0_15402300_1483584229']):
?>
            <div class="col-md-6">
              <table class="table-no-border">
                <tr>
                  <th><?php echo $this->_var['spguige_0_15402300_1483584229']['attr_name']; ?>:</th>
                  <td><?php echo $this->_var['spguige_0_15402300_1483584229']['attr_value']; ?></td>
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

	    <?php $_from = $this->_var['xh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xh_0_15402300_1483584229');if (count($_from)):
    foreach ($_from AS $this->_var['xh_0_15402300_1483584229']):
?>
			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=<?php echo $this->_var['xh_0_15402300_1483584229']['goods_id']; ?>" class="item-link"></a>
				  <?php if ($this->_var['xh_0_15402300_1483584229']['goods_img']): ?><img src="../<?php echo $this->_var['xh_0_15402300_1483584229']['goods_img']; ?>" alt="Shop item"><?php endif; ?>
				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xh_0_15402300_1483584229']['goods_id']; ?>"><?php echo $this->_var['xh_0_15402300_1483584229']['goods_name']; ?></a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥<?php echo $this->_var['xh_0_15402300_1483584229']['shop_price']; ?>
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
        	<a href="#" class="mobile-add-to-cart" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" >
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,'',1)" >
              立即支付
         </a>

        </div>
    </div>
  </div>

  


  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/Swiper-3.4.0/dist/js/swiper.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
  <script type="text/javascript">
    //点击收藏与取消收藏
    var oDiv = document.getElementById('shochang');
    var goodsid = document.getElementById('goodsid').value;
    oDiv.onclick=function(){

        if(this.style.color == 'red'){
            $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=delsc",
                                    async:true,
                                    data:{goodsid:goodsid},
                                    dataType: "json",
                                    success: function (result) {


                                          }//回调函数结束
                               });//ajax结束
            this.style.color = '#ccc';
        }else{
             $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=shochang",
                                    async:true,
                                    data:{goodsid:goodsid},
                                    dataType: "json",
                                    success: function (result) {


                                          }//回调函数结束
                               });//ajax结束
            this.style.color = 'red';
        }
    };
</script>



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
