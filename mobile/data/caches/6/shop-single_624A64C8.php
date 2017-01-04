<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:53:"E:/www/tgroupon/mobile/themes/miqinew/shop-single.dwt";i:1;s:46:"E:/www/tgroupon/mobile/themes/miqinew/head.dwt";}s:7:"expires";i:1483507915;s:8:"maketime";i:1483504315;}<!DOCTYPE html>
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
  <link href="themes/miqinew/css/theme.mins.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/Swiper-3.4.0/dist/css/swiper.css" rel="stylesheet" media="screen">
  
  <script src="themes/miqinew/js/vendor/page-preloading.js"></script>
  
  <script src="themes/miqinew/js/vendor/modernizr.custom.js"></script>
  <script src="themes/miqinew/js/vendor/jquery-2.1.4.min.js"></script>
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
                                    data:{attrid:attrid,typenum:typenum,spec_arr:spec_arr},
                                    dataType: "json",
                                    success: function (data) {
                                      if(data.error==1){
                                        alert('未找到该商品!');
                                        window.location.href=window.location.href;
                                        return;
                                      }
                                       $(".type_arr  ul li ").css("display",'none');
                                        $("#pc-select-group"+typenum+"  ul li ").css("display",'block');
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
                                     $("#pc_price").text("￥"+parseInt(data.data.attributeprice).toFixed(2));
                                          }//回调函数结束
                               });//ajax结束
       }
</script>
</head>
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
             <span class="count " id="cart_count">3</span>
            </i>
          </a>
                    <a href="#userinfo" class="toolbar-toggle"><i class="material-icons person"></i></a>
                  </div>
      </div>
      
      
      <div class="toolbar-dropdown">
        
        <div class="toolbar-section" id="menu">
          <div class="inner">
            <ul class="main-navigation space-bottom">
              <li><a href="index.html">首页</a></li>
              <li><a href="javascript:window.open('goods_list.php');" >商品</a></li>
              <li><a href="artist-list.html">设计师</a></li>
              <li><a href="#">关于我们</a></li>
            </ul>
          </div>
        </div>
        <div class="toolbar-section" id="userinfo" >
            <div class="clearfix">
            <a href="#account" class="btn btn-primary waves-effect waves-light pull-right toggle-section" id="logout">退出</a>
            <div class="quotation pull-left" style="width:auto;">
              <div class="quotation-author-ava pull-left">
                <img class="" src="" alt="James Cameron">
              </div>
              &nbsp;&nbsp;
              <span style="display:inline-block; line-height:74px;"></span>
            </div>
            </div>
            <hr class="padding-bottom">
            <ul class="main-navigation space-bottom">
              <li><a href="javascript:window.open('my_user.php?act=order_list');" >我的订单</a></li>
              <li><a href="javascript:window.open('my_grzxgdsc.php');">我的收藏</a></li>
<!--              <li><a class="relative" href="#">消息记录<span class="count">2</span></a></li>-->
                <li><a class="relative" href="#">消息记录</a></li>
              <li><a href="my_usergrzx.php?act=address_list">管理地址</a></li>
            </ul>
        </div>
         
        <div class="toolbar-section" id="account">
          <h3 class="toolbar-title space-bottom">用户登录</h3>
          <div class="inner">
               <a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx972a6f963cf1d611&response_type=code&scope=snsapi_login&redirect_uri=http://meetuuu.com/mobile/weixinlogin.php&state=668ee48328701ca10efef2517d8826e8" class="btn btn-primary waves-effect waves-light toggle-section">
              <i class="material-icons question_answer"></i>
              点击扫二维码登录
          </a>
                  </div>
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
            
                   <div class="item headitem">
                <label class="checkbox" id="checkone">
                <input style="position: absolute; opacity: 0;" type="checkbox" value="2590" checked="checked"  id="rec_id" name="rec_check">
                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
                <a href="shop-single.php?id=189" class="item-thumb">
                <img src="../data/static/images/no_picture.gif" alt="Item">                </a>
                <div class="item-details"><h3 class="item-title">
                <a href="shop-single.php?id=189">测试商品属性</a>
                </h3>
                <div>
                <div class="pull-right" style="color:#000" ></div>
                <h4 class="item-price" data-price="￥<span>100.00</span>">￥<span>100.00</span></h4>
                </div>
                <div class="count-input">
                <a class="incr-btn" data-action="decrease" href="#" onclick="changenum(2590,-1)">–</a>
                <input class="quantity" type="text" value="2" min="1" max="1000" name="goods_number[2590]" id="goods_number_2590" onkeyup="changenum(2590,0)" readonly>
                <a class="incr-btn" data-action="increase" href="#" onclick="changenum(2590,1)">+</a>
                </div></div>
                <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车"><i class="material-icons delete"></i></a></div>
                                <div class="item headitem">
                <label class="checkbox" id="checkone">
                <input style="position: absolute; opacity: 0;" type="checkbox" value="2591" checked="checked"  id="rec_id" name="rec_check">
                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
                <a href="shop-single.php?id=189" class="item-thumb">
                <img src="../data/static/images/no_picture.gif" alt="Item">                </a>
                <div class="item-details"><h3 class="item-title">
                <a href="shop-single.php?id=189">测试商品属性</a>
                </h3>
                <div>
                <div class="pull-right" style="color:#000" >颜色:黑色 
尺寸:大 
</div>
                <h4 class="item-price" data-price="￥<span>158.00</span>">￥<span>158.00</span></h4>
                </div>
                <div class="count-input">
                <a class="incr-btn" data-action="decrease" href="#" onclick="changenum(2591,-1)">–</a>
                <input class="quantity" type="text" value="1" min="1" max="1000" name="goods_number[2591]" id="goods_number_2591" onkeyup="changenum(2591,0)" readonly>
                <a class="incr-btn" data-action="increase" href="#" onclick="changenum(2591,1)">+</a>
                </div></div>
                <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车"><i class="material-icons delete"></i></a></div>
                            
            
            <div class="cart-subtotal space-bottom" id="zongjia">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>
              <div class="column">
                <h3 class="amount">￥<span>358.00</span></h3>
              </div>
            </div>
            
            <div class="text-right head_sum">
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
$("#logout").click(function(){
  $.ajax({
              url:"my_user.php?act=logout_new",
              success: function(data){
              },
              error:function(){
                   alert("退出异常");
              }
            });
});
 $("#sub_cart").click(function(){
                 var chk_value=[];
                  $('input[name="rec_check"]:checked').each(function(){
                  chk_value.push($(this).val());
                  });
window.open('flow.php?step=pay_select&cartid='+chk_value.join(","));
//window.location.href="flow.php?step=pay_select&cartid="+chk_value.join(",");
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
          var num= $("#goods_number_"+id).val();
           var cart_num=$("#cart_count").text();
              document.getElementById('cart_count').innerHTML=Number(cart_num)-Number(num);
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
        if($(".headitem").text()==''){
               $(".head_sum").css("display","none");
        } else{
              $(".head_sum").css("display","block");
        }
        if($("input:checkbox[name='rec_check']:checked").length > 0){
              $(".head_sum").css("display","block");
        }else{
             $(".head_sum").css("display","none");
        }
        // $(".shopping-cart").find("input[type='checkbox']").attr("checked",$("#checkbox-all").attr('checked'));;
    }
  </script>
<script type="text/javascript">
        function changenum(rec_id,diff){
          event.preventDefault();
          var num = parseInt(document.getElementById('goods_number_'+rec_id).value);
          var goods_number = num + Number(diff);
          if( goods_number >= 1){
            //document.getElementById('goods_number_'+rec_id).value = goods_number;//更新数量
            var cartnum=document.getElementById('cart_count').innerHTML;
            document.getElementById('cart_count').innerHTML=Number(cartnum)+Number(diff);
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
<script src="js/common.js"></script>
<script type="text/javascript">
/* *
 * 添加商品到购物车
 */
function addToCart(goodsId, parentId,type)  //type 购物类型
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
  goods.spec     = spec_arr;  //
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
//console.log(goods);return false;
  ///Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), addToCartResponse, 'POST', 'JSON');
  $.ajax({
              url:"flow.php",
              type:"POST",
              dataType:"json",
              data:{step:'add_to_cart',goods:$.toJSON(goods),type:type},
              success: function(data){
                    if(data.error==12){
                         window.location.href=data.url;
                         return;
                    }
                    if(type){
                             window.open('flow.php?step=pay_select&&cartid='+data.cartid);return;
                    }else{
                      addToCartResponse(data);return;
                    }
              },
              error:function(){
                 return false;
              }
            });
}
/* *
 * 处理添加商品到购物车的反馈信息
 */
function addToCartResponse(data)
{
   if(data.error==1){
      alert(data.message);
      return;
   }
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
                   console.log(data);
                    $(".item").remove();
                    $("#cart_count").text(data.total.total_number);
                    $.each(data.goods_list,function(i){
                        $("#zongjia").before(
                        '<div class="item headitem"><label class="checkbox" id="checkone">'+
                '<input style="position: absolute; opacity: 0;" type="checkbox" value="'+data.goods_list[i]['rec_id']+'" checked="checked"  id="rec_id" name="rec_check" >'+
                '<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px;background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>'+
                '</label> <a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'" class="item-thumb"><img src="../'+data.goods_list[i]['goods_thumb']+'" alt="Item">'+
                '</a><div class="item-details"><h3 class="item-title"><a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'">'+data.goods_list[i]['goods_name']+'</a>'+
                '</h3><div><div class="pull-right" style="color:#000" >'+data.goods_list[i]['goods_attr']+'</div><h4 class="item-price" data-price="'+data.goods_list[i]['goods_price']+'">'+data.goods_list[i]['goods_price']+
                '</h4></div><div class="count-input">'+
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
}
</script>	
    
    <section class="fw-section bg-gray padding-top-3x">
      <div class="swiper-container">
            <div class="swiper-wrapper">
					            </div>
            
    		<div class="swiper-pagination"></div>
            <!--<div class="swiper-button-prev" style="width:50px;">-PREV</div>
            <div class="swiper-button-next" style="width:50px;">NEXT-</div>-->
		</div>
    </section>
    
    <section class="fw-section bg-gray padding-bottom-3x  hidden-xs">
     <input id="goodsid" type="hidden" value="189">
      <div class="container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half">创 意 椅 子</h1>
          <h2 class="hidden-xs" style="color:#E7322E;" id="pc_price">￥128.00</h2>
          
          	<div class="pc-detaile-left col-lg-4 col-md-4 col-sm-4 hidden-xs">
			   <img src="themes/miqinew/img/shop/product-gallery/preview01.jpg" class="pc-thumbnail">
            </div>
          
            <div class="pc-detaile-right col-lg-8 col-md-8 col-sm-8 hidden-xs">
           		<div class="pc-dright-top">
                    <form  name="ECS_FORMBUY">
                                                      <input type="hidden" name="spec_223" value="" >
                                 <div class="pc-group-select col-lg-6 col-md-6 col-sm-6 type_arr" id="pc-select-group0">
                            <span style="float:left; margin-top:5px;">颜色:</span>
                              <ul>
                              <input type="hidden" name="" value="369" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(369,223,0)" class="pc-group-detail" id="type_369" data-type="369">黑色<img src=""></a>
                                </li>
                              <input type="hidden" name="" value="370" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(370,223,0)" class="pc-group-detail" id="type_370" data-type="370">白色<img src=""></a>
                                </li>
                              <input type="hidden" name="" value="371" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(371,223,0)" class="pc-group-detail" id="type_371" data-type="371">蓝色<img src=""></a>
                                </li>
                              <input type="hidden" name="" value="372" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(372,223,0)" class="pc-group-detail" id="type_372" data-type="372">红色<img src=""></a>
                                </li>
                                                            </ul>
                              <div class="clear"></div>
                          </div>
                                                      <input type="hidden" name="spec_224" value="" >
                                 <div class="pc-group-select col-lg-6 col-md-6 col-sm-6 type_arr" id="pc-select-group1">
                            <span style="float:left; margin-top:5px;">尺寸:</span>
                              <ul>
                              <input type="hidden" name="" value="373" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(373,224,1)" class="pc-group-detail" id="type_373" data-type="373">大<img src=""></a>
                                </li>
                              <input type="hidden" name="" value="374" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(374,224,1)" class="pc-group-detail" id="type_374" data-type="374">中<img src=""></a>
                                </li>
                              <input type="hidden" name="" value="375" >
                                <li>
                                    <a href="#" onclick="attrshuaixuan(375,224,1)" class="pc-group-detail" id="type_375" data-type="375">小<img src=""></a>
                                </li>
                                                            </ul>
                              <div class="clear"></div>
                          </div>
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
                        <a href="#" class="add-to-cart"  onClick="addToCart(189)">
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
        	<img src="themes/miqinew/img/shop/product-gallery/preview03.jpg" id="Mobilethumbnail">
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
            	<li><a href="#" title="绿色"><img src="themes/miqinew/img/orange.png"></a></li>
                <li><a href="#" title="紫色"><img src="themes/miqinew/img/orange.png"></a></li>
                <li><a href="#" title="红色"><img src="themes/miqinew/img/orange.png"></a></li>
                <li><a href="#" title="青色"><img src="themes/miqinew/img/orange.png"></a></li>
                <li><a href="#" title="蓝色"><img src="themes/miqinew/img/orange.png"></a></li>
                <li><a href="#" title="粉色"><img src="themes/miqinew/img/orange.png"></a></li>
               	<li><a href="#" title="橙色"><img src="themes/miqinew/img/bottle green.png"></a></li>
                <li><a href="#" title="褐色"><img src="themes/miqinew/img/bottle green.png"></a></li>
                <li><a href="#" title="黄色"><img src="themes/miqinew/img/bottle green.png"></a></li>
                <li><a href="#" title="黑色"><img src="themes/miqinew/img/bottle green.png"></a></li>
                <li><a href="#" title="青色"><img src="themes/miqinew/img/bottle green.png"></a></li>
                <li><a href="#" title="玫红色"><img src="themes/miqinew/img/bottle green.png"></a></li>
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
                          <p class="mobile-cart-border-text">颜色</p>
                          <p class="mobile-cart-border-text">尺寸</p>
                 </form>
    </section>
    <div class="clear"></div>
	
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
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
                		                                       </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
                    </div>
        </div>
      </div>
    </section>
    
    <section class="container padding-top padding-bottom">
    	<div style="width:100px; height:30px;background-color:#ededed;position:absolute; margin-top:10px;"></div>
      	<hr style="position:relative;">
      <h3 class="padding-top">猜 你 喜 欢</h3>
      <div class="row padding-top">
	    			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=152" class="item-link"></a>
				  <img src="../images/201503/goods_img/152_G_1425527082169.jpg" alt="Shop item">				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=152">友邦黄油弹</a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥180.00				  </span>
				</div>
			  </div>
			</div>
        			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=5" class="item-link"></a>
				  <img src="../images/200905/goods_img/5_G_1241422518773.jpg" alt="Shop item">				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=5">索爱原装M2卡读卡器</a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥20.00				  </span>
				</div>
			  </div>
			</div>
        			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=17" class="item-link"></a>
				  <img src="../images/201611/goods_img/17_G_1479501429811.jpg" alt="Shop item">				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=17">娇韵诗超V型纤容紧致瘦脸面膜75ml</a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥275.00				  </span>
				</div>
			  </div>
			</div>
        			<div class="col-lg-3 col-sm-6 mobile-indent">
			  <div class="shop-item">
				<div class="shop-thumbnail">
				  <a href="shop-single.php?id=119" class="item-link"></a>
				  <img src="../images/201311/goods_img/119_G_1385664985247.jpg" alt="Shop item">				</div>
				<div class="shop-item-details">
				  <h3 class="shop-item-title"><a href="shop-single.php?id=119">蓓丽柔和泡沫洁面膏125ml</a></h3>
				  <span class="shop-item-price">
					<span class="old-price"></span>
						￥350.00				  </span>
				</div>
			  </div>
			</div>
        
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
        	<a href="#" class="mobile-add-to-cart" onClick="addToCart(189)" >
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay" onClick="addToCart(189,'',1)" >
              立即支付
         </a>
        </div>
    </div>
  </div>
  
  <script src="themes/miqinew/js/vendor/bootstrap.min.js"></script>
  <script src="themes/miqinew/js/vendor/smoothscroll.js"></script>
  <script src="themes/miqinew/js/vendor/velocity.min.js"></script>
  <script src="themes/miqinew/js/vendor/waves.min.js"></script>
  <script src="themes/miqinew/js/vendor/icheck.min.js"></script>
  <script src="themes/miqinew/js/scripts.js"></script>
  <script src="themes/miqinew/Swiper-3.4.0/dist/js/swiper.min.js"></script>
  <script src="themes/miqinew/js/layer_mobile/layer.js"></script>
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
		  var content= '<img src="themes/miqinew/img/fenxiangerweima.png">';
			layer.open({
				closeBtn: 0,
				title: false,
				type: 1,
				content: content
			});
		});
	$("#Mobilethumbnail").click(function(){
		  var content= '<img src="themes/miqinew/img/shop/product-gallery/preview03.jpg">';
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
