<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:53:"E:/www/tgroupon/mobile/themes/miqinew/shop-single.dwt";i:1;s:46:"E:/www/tgroupon/mobile/themes/miqinew/head.dwt";i:2;s:46:"E:/www/tgroupon/mobile/themes/miqinew/foot.dwt";}s:7:"expires";i:1482299578;s:8:"maketime";i:1482295978;}<!DOCTYPE html>
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
  
  <link href="themes/miqinew/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/vendor/font-awesome.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/theme.min.css" rel="stylesheet" media="screen">
  
  <script src="themes/miqinew/js/vendor/page-preloading.js"></script>
  
  <script src="themes/miqinew/js/vendor/modernizr.custom.js"></script>
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
      <img src="themes/miqinew/img/preloader.gif" alt="Preloader">
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
                <img class="" src="themes/miqinew/img/team/quote_author.jpg" alt="James Cameron">
              </div>
              &nbsp;&nbsp;
              <span style="display:inline-block; line-height:74px;">微信名称</span>
            </div>
            </div>
            <hr class="padding-bottom">
            <ul class="main-navigation space-bottom">
              <li><a href="my_order.html">我的订单</a></li>
              <li><a href="#">我的收藏</a></li>
<!--              <li><a class="relative" href="#">消息记录<span class="count">2</span></a></li>-->
                <li><a class="relative" href="#">消息记录</a></li>
              <li><a href="#">管理地址</a></li>
            </ul>
        </div>
         <div class="toolbar-section" id="cart">
          <div class="shopping-cart">
              <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px; ">
              <label class="checkbox">
                    <input style="position: absolute; opacity: 0;" type="checkbox" id='checkbox-all' value="all" checked="checked">
                    <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                  <h4 style="margin-left:18px ;">全选</h4>
                </label>
                </div>
            
                            <div class="item">
                <label class="checkbox" id="checkone">
                <input style="position: absolute; opacity: 0;" type="checkbox" value="2554" checked="checked"  id="rec_id" name="rec_check">
                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
                <a href="shop-single.php?id=164" class="item-thumb">
                <img src="../images/201611/thumb_img/165_thumb_G_1479754661779.jpg" alt="Item">
                </a>
                <div class="item-details"><h3 class="item-title">
                <a href="shop-single.php?id=164">娃娃啊啊</a>
                </h3>
                <h4 class="item-price" data-price="￥<span>60.00</span>">￥<span>60.00</span></h4>
                <div class="count-input">
                <a class="incr-btn" data-action="decrease" href="#" onclick="changenum(2554,-1)">–</a>
                <input class="quantity" type="text" value="6" min="1" max="1000" name="goods_number[2554]" id="goods_number_2554" onkeyup="changenum(2554,0)" readonly>
                <a class="incr-btn" data-action="increase" href="#" onclick="changenum(2554,1)">+</a>
                </div></div>
                <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车"><i class="material-icons delete"></i></a></div>
                            
            
            <div class="cart-subtotal space-bottom" id="zongjia">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>
              <div class="column">
                <h3 class="amount">￥<span>360.00</span></h3>
              </div>
            </div>
            
            <div class="text-right">
              <a href="#" class="btn btn-primary waves-effect waves-light toggle-section" id="sub_cart">去结算</a>
            </div>
          </div>
        </div>
            </div>
      </div>
    </header>
<script src="themes/miqinew/js/vendor/jquery-2.1.4.min.js"></script>
<script src="themes/miqinew/js/layer_mobile/layer.js"></script>
  <script src="themes/miqinew/js/jquery.validate.js" type="text/javascript"></script>
  <script src="themes/miqinew/js/messages_zh.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function () {
 $("#sub_cart").click(function(){
                 var chk_value=[];
                  $('input[name="rec_check"]:checked').each(function(){
                  chk_value.push($(this).val());
                  });
window.location.href="flow.php?step=pay_select&cartid="+chk_value.join(",");
    });
        $("#newcomers .shop-item-tools a").click(function(){
        });
        $('#checkbox-all').on('ifChanged', function(event){ //ifCreated 事件应该在插件初始化之前绑定
            choseAll();
        });
        $('#checkone input[type="checkbox"]').on('ifChanged', function(event){ //ifCreated 事件应该在插件初始化之前绑定
            jisuanjiage();
        });
        var $checkbox = $('input[type="checkbox"], input[type="radio"]');
        if($checkbox.length) {
            $('input').iCheck();
        }
        $("#cart").on("click",".item-remove",function(){
            var  id=$(this).parents(".item").find('input[type="checkbox"]').val();
            var parentitem=$(this).parents(".item");
            $.ajax({
              url:"flow.php",
              data:{step:'drop_goods',id:id},
              success: function(data){
                parentitem.remove();
                jisuanjiage();
              },
              error:function(){
                   alert("删除异常");
              }
            });
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
                var price =parseFloat($(this).find(".item-price span").text());
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
        function changenum(rec_id,diff){
          var num = parseInt(document.getElementById('goods_number_'+rec_id).value);
          var goods_number = num + Number(diff);
          if( goods_number >= 1){
            //document.getElementById('goods_number_'+rec_id).value = goods_number;//更新数量
            change_goods_number(rec_id,goods_number);
          }
        }
        function change_goods_number(rec_id, goods_number)
        {
          $.ajax({
                type:"POST",
                url:"flow.php",
                dataType: "json",
                data:{step:'ajax_update_cart',rec_id:rec_id,goods_number:goods_number},
                success: function(data){
                   // document.getElementById('total_number').innerHTML = data.total_number;//更新数量
                  //document.getElementById('goods_subtotal').innerHTML = data.total_desc;//更新小计
                    if (document.getElementById('ECS_CARTINFO'))
                    {//更新购物车数量
                    document.getElementById('ECS_CARTINFO').innerHTML = data.cart_info;
                    }
                },
                error: function(){
                    alert("json出错");
                }
            });
        }
      </script>
        <script type="text/javascript">
     function click_scroll() {
         document.getElementById("zhankai").click();
     }
    </script>
    <script src="themes/miqinew/js/jquery.json-2.3.js"></script>
  <script src="themes/miqinew/js/jquery.json-2.3.min.js"></script>
<script type="text/javascript">
/* *
 * 添加商品到购物车
 */
function addToCart(goodsId, parentId)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];
  var quick      = 0;
  // 检查是否有商品规格
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);
    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }
  quick = 1;
  }
  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  ///Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), addToCartResponse, 'POST', 'JSON');
  $.ajax({
              url:"flow.php",
              type:"POST",
              dataType:"json",
              data:{step:'add_to_cart',goods:$.toJSON(goods)},
              success: function(data){
                addToCartResponse(data);
              },
              error:function(){
                   alert("false");
              }
            });
}
/* *
 * 处理添加商品到购物车的反馈信息
 */
function addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
      }
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      openSpeDiv(result.message, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');
    var cart_url = 'flow.php';
    layer.open({
                content: '已加入购物车',
                skin: 'msg',
                time: 0.5 //0.5秒后自动关闭
                });
            $.ajax({
                url:cart_url,
                dataType: "json",
                data:{step:'ajax_cart_goods'},
                success: function(data){
                    //$(".item").find("input[type='checkbox']").iCheck("destroy");
                   // console.log(data.goods_list);
                    $(".item").remove();
                    $.each(data.goods_list,function(i){
                        $("#zongjia").before(
                        '<div class="item"><label class="checkbox" id="checkone">'+
                '<input style="position: absolute; opacity: 0;" type="checkbox" value="'+data.goods_list[i]['rec_id']+'" checked="checked"  id="rec_id" name="rec_check" >'+
                '<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px;background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>'+
                '</label> <a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'" class="item-thumb"><img src="../'+data.goods_list[i]['goods_thumb']+'" alt="Item">'+
                '</a><div class="item-details"><h3 class="item-title"><a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'">'+data.goods_list[i]['goods_name']+'</a>'+
                '</h3><h4 class="item-price" data-price="'+data.goods_list[i]['goods_price']+'">'+data.goods_list[i]['goods_price']+'</h4><div class="count-input">'+
                '<a class="incr-btn" data-action="decrease" href="#" onclick="changenum('+data.goods_list[i]['rec_id']+',-1)">–</a>'+
                '<input class="quantity" type="text" value="'+data.goods_list[i]['goods_number']+'" min="1" max="1000" name="goods_number['+data.goods_list[i]['rec_id']+']" '+
                'id="goods_number_'+data.goods_list[i]['rec_id']+'" onkeyup="changenum('+data.goods_list[i]['rec_id']+',0)">'+
                '<a class="incr-btn" data-action="increase" href="#" onclick="changenum('+data.goods_list[i]['rec_id']+',1)">+</a></div></div>'+
                '<a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车"><i class="material-icons delete"></i></a></div>'
                );//内容添加到页面上.
                    });
                    $(".item").find("input[type='checkbox']").on('ifChanged', function(event){ //ifCreated 事件应该在插件初始化之前绑定
                        jisuanjiage();
                    });
                    $(".item").find("input[type='checkbox']").iCheck();
                    jisuanjiage();
                },
                error: function(){
                    alert("json出错");
                }
            });
    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }
    if (result.one_step_buy == '1')
    {
      location.href = cart_url;
    }
    else
    {
      switch(result.confirm_type)
      {
        case '1' :
          if (confirm(result.message)) location.href = cart_url;
          break;
        case '2' :
          if (!confirm(result.message)) location.href = cart_url;
          break;
        case '3' :
          location.href = cart_url;
          break;
        default :
          break;
      }
    }
  }
}
</script>    
    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="container padding-top">
        
        <div class="product-gallery">
          
          <ul class="product-gallery-preview">
            <li id="preview01"><img src="themes/miqinew/img/shop/product-gallery/preview01.jpg" alt="Product"></li>
            <li id="preview02" class="current"><img src="themes/miqinew/img/shop/product-gallery/preview02.jpg" alt="Product"></li>
            <li id="preview03"><img src="themes/miqinew/img/shop/product-gallery/preview03.jpg" alt="Product"></li>
          </ul>
          
          <ul class="product-gallery-thumblist">
            <li><a href="#preview01">
              <img src="themes/miqinew/img/shop/product-gallery/thumb01.jpg" alt="Product">
            </a></li>
            <li class="active"><a href="#preview02">
              <img src="themes/miqinew/img/shop/product-gallery/thumb02.jpg" alt="Product">
            </a></li>
            <li><a href="#preview03">
              <img src="themes/miqinew/img/shop/product-gallery/thumb03.jpg" alt="Product">
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
            <a href="#" class="add-to-cart" id="xqcar" onclick="addToCart(164);">
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
                <img src="themes/miqinew/img/fenxiangerweima.png" width="150px;" height="150px;" style="display:none;" id="erweima">
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
	
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6">
       		<p><img src="themes/miqinew/img/artist-logo.png" style="width:60px;height:60px;border:1px solid transparent;border-radius:30px; float:left;"><span style="margin-top:15px;margin-left:15px; margin-right:15px;display:inline-block; font-size:18px; font-weight:blod;">达芬奇</span><img src="themes/miqinew/img/shugang.png" style="display:inline-block; width:1px; height:30px;"><span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:18px; font-weight:blod;">意大利</span></p>
       </div>
       <div class="artist-rt col-lg-6">
           <p style="font-size:16px; font-weight:bold;">线下门店</p>
           <div>
           <a href="#" style="float:left"><img src="themes/miqinew/img/yika.jpg" width="100px" height="120px" alt="店铺名称"/></a>
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
              	<img src="themes/miqinew/img/blog/02.jpg">
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
              <img src="themes/miqinew/img/shop/th05.jpg" alt="Shop item">
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
              <img src="themes/miqinew/img/shop/th06.jpg" alt="Shop item">
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
              <img src="themes/miqinew/img/shop/th04.jpg" alt="Shop item">
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
              <img src="themes/miqinew/img/shop/th08.jpg" alt="Shop item">
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
    
  </div>
  
  <script src="themes/miqinew/js/vendor/bootstrap.min.js"></script>
  <script src="themes/miqinew/js/vendor/smoothscroll.js"></script>
  <script src="themes/miqinew/js/vendor/velocity.min.js"></script>
  <script src="themes/miqinew/js/vendor/waves.min.js"></script>
  <script src="themes/miqinew/js/vendor/icheck.min.js"></script>
  <script src="themes/miqinew/js/scripts.js"></script>
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
