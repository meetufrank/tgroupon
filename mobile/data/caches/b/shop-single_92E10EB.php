<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:63:"/www/web/yoga/public_html/mobile/themes/miqinew/shop-single.dwt";i:1;s:56:"/www/web/yoga/public_html/mobile/themes/miqinew/head.dwt";i:2;s:56:"/www/web/yoga/public_html/mobile/themes/miqinew/foot.dwt";}s:7:"expires";i:1487656385;s:8:"maketime";i:1487652785;}<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>商品详情页</title>
  
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="themes/miqinew/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/vendor/font-awesome.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">
  
  <link href="themes/miqinew/css/theme.min.css" rel="stylesheet" media="screen">
  
  <script src="themes/miqinew/js/vendor/page-preloading.js"></script>
  
  <script src="themes/miqinew/js/vendor/modernizr.custom.js"></script>
  
  <script src="themes/miqinew/js/hammer.min.js"></script>
  <style>
  @media screen and (max-width:768px) {
	.mobile-cart-color-select li a img {
    		width:30px;
    		height:30px;
		}
	.mabeylike{
		font-size:16px;
		font-weight:bold;
	}
	.tab-shopsingle{
		display:block;
		float:left;
		max-width:25%;
		min-width:25%;
	}
	.tab-shopsingle-right{
		display:block;
		float:left;
		max-width:75%;
		min-width:75%;
	}
  table>thead>tr>th, table>thead>tr>td, table>tbody>tr>th, table>tbody>tr>td, table>tfoot>tr>th, table>tfoot>tr>td {
    padding:5px;
    line-height: 1.5;
    vertical-align: top;
    border-bottom: 1px solid #ededed;
  }
  .space-bottom {
    margin-bottom:40px !important;
  }
	}
@media screen and (max-width:320px){
    .mobile-shop-detail {
    padding: 0px;
    margin-top:35px;
    min-width: 100px;
  }
}
@media screen and (min-width:375px) and (max-width:413px){
    .mobile-shop-detail {
    padding: 0px;
    margin-top:55px;
    min-width: 100px;
}
  }
@media screen and (min-width:414px) and (max-width:768px){
    .mobile-shop-detail {
    padding: 0px;
    margin-top:70px;
    min-width: 100px;
}
  }
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
    background-color:rgb(179,179,179);
    border-radius: 4px;
    overflow: hidden;
    -webkit-transition: background-color 0.3s;
    -o-transition: background-color 0.3s;
    transition: background-color 0.3s
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
  .add-to-cart {
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
    background-color:rgb(52,52,52);
    border-radius: 4px;
    overflow: hidden;
    -webkit-transition: background-color 0.3s;
    -o-transition: background-color 0.3s;
    transition: background-color 0.3s;
  }
  .clear{
    clear:both;
  }
  .pc-detaile-left{
    min-width:300px;
    min-height:300px;
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
    background-color:rgb(179,179,179);
    border:2px solid rgb(179,179,179);
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
  .pc-group-select ul li{
    float:left;
    padding-left:5px;
    padding-top:5px;
  }
  .pc-group-detail{
    display:block;
    min-width:45px;
    height:30px;
    border-radius:1px;
    color:black;
    background-color:#CCCCCE;
  }
  .pc-none{
    background-color:#C33;
  }
  .pc-group-change{
    display:block;
    height:30px;
    border-radius:1px;
    color:white;
    background-color:rgb(52,52,52)
  }
  .pc-group-change img{
    border:2px solid rgb(52,52,52);
  }
  .pc-mold-select ul{
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
    background-color:rgb(179,179,179);
    border:2px rgb(179,179,179) solid;
    border-radius:1px;
    color:black;
  }
  .pc-mold-change{
    display:block;
    width:50px;
    height:30px;
    background-color:rgb(179,179,179);
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
  .owl-nav{
	display:none;
	}
	#xiangqiangimg img{
		margin:auto;
	}
  /* 商品属性不可选 */
  .specDonotchoose{
    border:2px dashed black;
  }
  .specDonotchoose img{
    max-width: 45px;
    max-height: 25px;
  }
  /* 收藏状态为红色 */
  .schongse{
    color:rgb(200, 0, 0);
  }
  .mobile-cart-border-details img {
    display: block;
    width: 45px;
    height:30px;
    max-width: 100%;
    background-color: rgba(0,0,0,0);
}
  </style>
</head>
<body class="page-preloading">
  
  <div class="page-wrapper">
    
    
     
   
<header class="navbar navbar-sticky">
    
      <a href="index.html" class="site-logo">
        <img src="themes/miqinew/img/Logo.png">
      </a>
      <div class="toolbar"  id="toolbar-foucuse">
        <div class="inner">
          <a href="#menu" class="toolbar-toggle"><i class="material-icons menu"></i></a>
          <a href="#cart" class="toolbar-toggle">
            <i>
              <span class="material-icons shopping_basket"></span>
             <span class="count " id="cart_count">0</span>
            </i>
          </a>
          <a href="#userinfo" class="toolbar-toggle"><i class="material-icons person"></i></a>        </div>
      </div>
      
      
      <div class="toolbar-dropdown" id="toolbar-foucuse-hide">
        
        <div class="toolbar-section" id="menu">
          <div class="inner">
            <ul class="main-navigation space-bottom">
              <li><a href="index.html">首页</a></li>
              <li><a href="goods_list.php" >商品</a></li>
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
                <img class="" src="http://wx.qlogo.cn/mmopen/6EicgjZH9pibK0ddXHlZuqTNsibB1lvXriaaQafUicPQAGLVrkmf321aGpru33b5Lzq0q2icb6rJTIb8FbsT5uLXGhkl760ELmocHs/0" alt="James Cameron">
              </div>
              &nbsp;&nbsp;
              <span style="display:inline-block; line-height:74px;">_</span>
            </div>
            </div>
            <hr>
            <ul class="main-navigation space-bottom">
              <li><a href="my_user.php?act=order_list" >我的订单</a></li>
              <li><a href="my_grzxgdsc.php">我的收藏</a></li>
<!--              <li><a class="relative" href="#">消息记录<span class="count">2</span></a></li>-->
                <li><a class="relative" href="#">消息记录</a></li>
              <li><a href="my_usergrzx.php?act=address_list">管理地址</a></li>
               <li><a href="my_income.php">商品销量</a></li>            </ul>
        </div>
         
        <div class="toolbar-section" id="account">
          <h3 class="toolbar-title space-bottom">用户登录</h3>
          <div class="inner">
           <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb5aec13c030a530b&redirect_uri=http://meetuuu.com/mobile/loginphone.php&response_type=code&scope=snsapi_userinfo&state=123&connect_redirect=1#wechat_redirect" class="btn btn-primary waves-effect waves-light toggle-section">
              <i class="material-icons question_answer"></i>
              点击登录
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
            
               
            
            <div class="cart-subtotal space-bottom" id="zongjia">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>
              <div class="column">
                <h3 class="amount">￥<span>0.00</span></h3>
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
   $(".toolbar-toggle").attr("href","#account");
  $.ajax({
              type:"POST",
              url:"my_user.php?act=logout_new",
              success: function(data){
                    window.location.href=window.location.href;
              },
              error:function(){
                   alert("退出异常");
                   return;
              }
            });
});
 $("#sub_cart").click(function(){
 event.preventDefault();
                 var chk_value=[];
                  $('input[name="rec_check"]:checked').each(function(){
                  chk_value.push($(this).val());
                  });
//window.open('flow.php?step=pay_select&cartid='+chk_value.join(","));
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
              type:"POST",
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
            var maxnum=$button.parent().find('.quantity').attr("max");
            $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
            if ($button.data('action') == "increase") {
                var newVal = parseFloat(oldValue) + 1;
                if(newVal>maxnum){
                 var newVal=oldValue;
                 alert('库存不足');
                }
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
        var cart_num=0;
        $(".shopping-cart").children(".item").each(function () {
        var quantity=parseFloat($(this).find("input[class='quantity']").val());
            if($(this).find("input[type='checkbox']")[0].checked){
                var price =parseFloat($(this).find(".item-price span").text());
                pay+=price*quantity;
            }
             cart_num+=quantity;
        });
        if(pay>0){
            $("#qujiesuan").show();
        }else{
            $("#qujiesuan").hide();
        }
        $(".amount").text("￥"+pay.toFixed(2));
        document.getElementById('cart_count').innerHTML=cart_num;
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
        function changenum(rec_id,diff,maxnumber){
          event.preventDefault();
          var num = parseInt(document.getElementById('goods_number_'+rec_id).value);
          var goods_number = num + Number(diff);
          if( goods_number >= 1 && goods_number<=maxnumber){
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
function addToCart(goodsId,parentId,type,ismobile)  //type 购物类型
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var loca_str="addToCart("+goodsId+","+parentId+","+type+","+ismobile+")";
  //alert(loca_str);
  if(ismobile){
     var formBuy      = document.forms['ECS_FORMBUY_MOBILE'];
     var number=document.getElementById("quantitymobile").value;
  }else{
      var number=document.getElementById("quantity").value;
      var formBuy      = document.forms['ECS_FORMBUY'];
  }
  if(!number){
      var number = 1;
  }
  var quick      = 0;
  // 检查是否有商品规格
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);
  quick = 1;
  }
  goods.quick    = quick;
  goods.spec     = spec_arr;  //
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
//console.log(goods);return false;
  ///Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), addToCartResponse, 'POST', 'JSON');
if(type&&!ismobile){
  var w = window.open(),url, num = 0;
}
  $.ajax({
              url:"flow.php",
              type:"POST",
              dataType:"json",
              data:{step:'add_to_cart',goods:$.toJSON(goods),type:type,comeback:loca_str},
              success: function(data){
                    if(data.error==12){
                              if(data.url){
                              window.location.href=data.url;
                              if(type){
                              w.close();
                              }
                              return;
                              }
                    }
                   if(data.cartid){
                  if(type){
                              if(ismobile){
                                    window.location.href="flow.php?step=pay_select&cartid="+data.cartid+"&type=1";
                                    return;
                              }else{
                                  //window.open('_blank').location.href='flow.php?step=pay_select&&cartid='+data.cartid;return;
                                 // newWin('flow.php?step=pay_select&&cartid='+data.cartid,'opendoor');
                                 url = 'flow.php?step=pay_select&cartid='+data.cartid+"&type=1";
                                    // w.location.href = 'flow.php?step=pay_select&&cartid='+data.cartid;
                              }
                    }
                     }
                   else{
                       addToCartResponse(data);
                       return;
                    }
              },
              error:function(){
              if(type){
               w.close();
               num = 20;
                }
              }
            });
if(type){
        var utime = setInterval(function(){
        if (url) {
            w.location = url;
            clearInterval(utime);
        } else if(num > 20) {
            w.close();
            clearInterval(utime);
        }
        num++;
    }, 50);
}
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
                time: 2 //2秒后自动关闭
                });
            $.ajax({
                type:"POST",
                url:cart_url,
                dataType: "json",
                data:{step:'ajax_cart_goods'},
                success: function(data){
                    //$(".item").find("input[type='checkbox']").iCheck("destroy");
                   //console.log(data);
                    $(".item").remove();
                    $("#cart_count").text(data.total.total_number);
                    $.each(data.goods_list,function(i){
                        $("#zongjia").before(
                        '<div class="item headitem"><label class="checkbox" id="checkone">'+
                        '<input style="position: absolute; opacity: 0;" type="checkbox" value="'+data.goods_list[i]['rec_id']+'" checked="checked"  id="rec_id" name="rec_check">'+
                '<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>'+
                '</label> <a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'" class="item-thumb"><img src="././admin/'+data.goods_list[i]['goods_thumb']+'" alt="Item">'+
                '</a><div class="item-details"><div class="item-title"><a href="shop-single.php?id='+data.goods_list[i]['goods_id']+'">'+data.goods_list[i]['goods_name']+'</a>'+
                '</div><div class="item-titls"><div style="color:#000" >'+data.goods_list[i]['goods_attr']+'</div><h4 class="item-price" data-price="'+data.goods_list[i]['goods_price']+'">'+data.goods_list[i]['goods_price']+
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
                }
            });
}
/**
 * 获得选定的商品属性
 */
function getSelectedAttributes(formBuy)
{
  var spec_arr = new Array();
  var j = 0;
  for (i = 0; i < formBuy.elements.length; i ++ )
  {
    var prefix = formBuy.elements[i].name.substr(0, 5);
    if (prefix == 'spec_' )
    {
      spec_arr[j] = formBuy.elements[i].value;
      j++ ;
    }
  }
  return spec_arr;
}
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <script>
  // 注意：所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
  // 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
  // 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
  wx.config({
    appId: 'wxb5aec13c030a530b',
    timestamp: '1487652785',
    nonceStr: '3l3VLP4fzO0VdfVJ',
    signature: '9791b1e4eb170bbc897bdf974934fbf9b2513267',
  jsApiList: [
  'checkJsApi',
  'onMenuShareTimeline',
  'onMenuShareAppMessage',
  'onMenuShareQQ',
  'onMenuShareWeibo',
  'hideMenuItems',
  'showMenuItems',
  'hideAllNonBaseMenuItem',
  'showAllNonBaseMenuItem',
  'translateVoice',
  'startRecord',
  'stopRecord',
  'onRecordEnd',
  'playVoice',
  'pauseVoice',
  'stopVoice',
  'uploadVoice',
  'downloadVoice',
  'chooseImage',
  'previewImage',
  'uploadImage',
  'downloadImage',
  'getNetworkType',
  'openLocation',
  'getLocation',
  'hideOptionMenu',
  'showOptionMenu',
  'closeWindow',
  'scanQRCode',
  'chooseWXPay',
  'openProductSpecificView',
  'addCard',
  'chooseCard',
  'openCard'
  ]
  });
wx.ready(function(){
 wx.onMenuShareAppMessage({
      title: '砖心',
      desc: '商品详情内容',
      link: 'http://meetuuu.com/mobile/shop-single.php?id=21&lineshop=10',
      imgUrl: 'http://meetuuu.com/mobile/admin/uploads/24729709772a72c495b951d1654005be.jpg',
      trigger: function (res) {
      },
      success: function (res) {
      },
      cancel: function (res) {
      },
      fail: function (res) {
      }
    });
  wx.onMenuShareTimeline({
      title: '砖心',
      desc: '商品详情内容',
      link: 'http://meetuuu.com/mobile/shop-single.php?id=21&lineshop=10',
      imgUrl:'http://meetuuu.com/mobile/admin/uploads/24729709772a72c495b951d1654005be.jpg',
      trigger: function (res) {
      },
      success: function (res) {
      },
      cancel: function (res) {
      },
      fail: function (res) {
      }
    });
});
</script>
  
    <section class="hero-slider">
      <div class="inner">
                    <div class="slide pc-thumbnail" style="background-image:url(../images/201702/goods_img/21_P_1487195235614.jpg);"></div>
                    <div class="slide pc-thumbnail" style="background-image:url(../images/201702/goods_img/21_P_1487195345004.jpg);"></div>
                    <div class="slide pc-thumbnail" style="background-image:url(../images/201702/goods_img/21_P_1487138483990.png);"></div>
              </div>
    </section>
    
    
    <section class="fw-section bg-gray padding-bottom-3x visible-lg visible-md">
      <input id="goodsid" type="hidden" value="21">
      <div class="container pc-mobile-container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half">砖心</h1>
          <h2 class="hidden-xs" style="color:#E7322E;" id="pc_price">￥49.00</h2>
          
            <div class="pc-detaile-left col-lg-4 col-md-4 col-sm-4 hidden-xs">
                                     <img src="././admin/uploads/24729709772a72c495b951d1654005be.jpg" class="pc-thumbnail">
                            </div>
          
            <div class="pc-detaile-right col-lg-8 col-md-8 col-sm-8 hidden-xs">
              <div class="pc-dright-top">
                  
                  <form  name="ECS_FORMBUY">
                                                    <input type="hidden" name="spec_225" value="470" >
                            <div class="pc-group-select col-lg-6 col-md-6 col-sm-6 type_arr" id="pc-select-group0">
                              <span class="pc-company-name" style="float:left;">颜色:</span>  
                                <ul>
                                    
                                                                           <li>
                                            <a href="#" onclick="attrshuaixuan(470,225,0,0)" class="pc-group-detail pc-group-change" id="type_470" data-type="470">
                                             <img src="/mobile/images/shuxing/20170214115550_189.png" title="白色">
                                            
                                        </a>
                                        </li>
                                    
                                </ul>
                                <div class="clear"></div>
                            </div>
                        
                   </form>
                  <!--  <img src="/xinse/mobile/images/shuxing/20170118151528_649.png"> -->
                </div>
                <div class="pc-dright-bottom">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                      <div class="count-input">
                          <a class="incr-btn" onclick="numDec()" data-action="decrease" href="#">–</a>
                          <input class="quantity" id="quantity" type="text" value="1" readonly>
                          <a class="incr-btn" onclick="numAdd()" data-action="increase" href="#">+</a>
                    </div>
                    </div>
                  <div class="col-lg-3 col-md-3 col-sm-3" style="padding-top:8px;min-height:48px;">
                         <a href="#" class="add-to-cart-pay" onClick="addToCart(21,0,0,0);" >
                                <em>放入购物车</em>
                         </a>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2"  style="padding-top:8px;min-height:48px;" >
                        <a href="#" class="add-to-cart" onClick="addToCart(21,0,1,0);">
                            <em>立即支付</em>
                        </a>
                   </div>
                   <div class="col-lg-5 col-md-4 col-sm-4" style="padding-top:10px;min-height:48px;">
                     <span>收藏:</span><a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top"><i id="shochangpc" class="fa fa-heart "></i></a>
                    <span>分享:</span><a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-wechat" id="fenxiang"></i></a>
                   </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    <section class="mobile-detail visible-xs visible-sm">
      <div class="mobile-thumbnail col-xs-5" style="padding:20px;">
                           <img src="././admin/uploads/24729709772a72c495b951d1654005be.jpg" id="Mobilethumbnail" class="mobile-thumbnail">
                  </div>
        <div class="col-xs-7">
            <div class="mobile-detail-1">
                <span class="mobile-shop-name col-xs-9" style="">砖心</span><span class="sb-twitter aiheart col-xs-3">
                <i id="shochang"class="fa fa-heart "></i></span>
            </div>
            <div class="clear"></div>
            <div class="mobile-shop-detail col-xs-12">
              <div class="mobile-shop-price col-xs-4" id="mobile_price">¥49.00</div>
                <div class="col-xs-8">
                    <div class="mobile-count-input">
                         <a class="mobile-incr-btn" onclick="numDecmobile()" href="#">-</a>
                         <input class="mobile-quantity" id="quantitymobile" type="text" value="1" readonly>
                         <a class="mobile-incr-btn" onclick="numAddmobile()" href="#">+</a>
                    </div>
              </div>
            </div>
        </div>
        <div class="clear"></div>
          
          <form  name="ECS_FORMBUY_MOBILE">
                            <input type="hidden" name="spec_225" value="470" class="mobile_input">
                  <p class="mobile-cart-group-text mobile_name">颜色</p>
                  <div class="mobile-cart-group type_arr mobile_div">
                      <ul class="mobile-cart-group-select mobile_li" id="mobile-groupbox">
                                                         <li>
                                   <a onclick="attrshuaixuan(470,225,0,1)" href="#"  class="mobile-cart-border-details pc-group-change"
                                                                           id="mobiletype_470"
                                        data-type="470">
                                                    <img src="/mobile/images/shuxing/20170214115550_189.png" title="白色">
                                                                                 </a>
                               </li>
                                                </ul>
                      <div class="clear"></div>
                  </div>
                        </form>
    </section>
    <script type="text/javascript">
  if($(".mobile_input").length<=1&&$(".mobile_li").length<=1){
    $('.mobile_name').remove();
    $('.mobile_div').remove();
  }
</script>
    <div class="clear"></div>
  
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
            
                            <p>
                  <img src="/mobile/images/logo/20170216125553_502.jpg" style="width:80px;height:80px;border:1px solid transparent;border-radius:50px; float:left;">
                  <span style="margin-top:20px;margin-left:15px; margin-right:15px;display:inline-block; font-size:16px; font-weight:blod;">Jason</span>
                  <img src="themes/miqinew/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
                  <span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:16px; font-weight:bloder;">American</span>
                </p>
                 </div>
    </div>
    </section>
    
    <section class="container">
      
      <ul class="nav-tabs text-center" role="tablist">
        <li class="active"><a href="#description" role="tab" data-toggle="tab" style="font-size:16px">产品介绍</a></li>
        <li><a href="#additional" role="tab" data-toggle="tab" style="font-size:16px">商品规格</a></li>
      </ul>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane transition fade in active" id="description">
          <div class="row space-top">
            <div class="space-bottom" id="xiangqiangimg">
                
                                   <img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_40713.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_54794.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_27788.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_56236.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_87639.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124748_56906.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124749_86749.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124749_94666.jpg" alt="" /><img src="/mobile/include/kindeditor/php/../../../../images/upload/image/20170215/20170215124749_73666.jpg" alt="" />                            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
                
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class="table-no-border">
                                                                  <tr class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pc-guige-class">
                                    <td class="tab-shopsingle">品牌:</th>
                                    <td class="tab-shopsingle-right">型色主义</td>
                                  </tr>
                                                                  <tr class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pc-guige-class">
                                    <td class="tab-shopsingle">材质:</th>
                                    <td class="tab-shopsingle-right">薄胎陶瓷</td>
                                  </tr>
                                                            </table>
                          </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="container padding-top padding-bottom">
      <div style="width:100px; height:30px;background-color:#ededed;position:absolute; margin-top:10px;" class="hidden-xs"></div>
        <hr style="position:relative;">
      <h3 class="padding-top mabeylike">猜 你 喜 欢</h3>
      <div class="row padding-top">
        
                      <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=24" class="item-link"></a>
                    <img src="././admin/uploads/92792141eaa4056bb550fbfbbce6d1dd.jpg" alt="Shop item">                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=24">花边镂空吊灯（测试）</a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥0.50                    </span>
                  </div>
                </div>
              </div>
                      <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=23" class="item-link"></a>
                    <img src="././admin/uploads/4bb334d8591ae86561c53b91eca504a1.jpg" alt="Shop item">                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=23">笔筒（测试款不发货）</a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥0.10                    </span>
                  </div>
                </div>
              </div>
                      <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=25" class="item-link"></a>
                    <img src="././admin/uploads/bc2e00021dba09368a1c800f74e92aae.jpg" alt="Shop item">                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=25">陶艺小花瓶(测试)</a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥0.40                    </span>
                  </div>
                </div>
              </div>
                      <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=2" class="item-link"></a>
                    <img src="././admin/uploads/6d8e87dce4ffb0164e6af9c047f57ec6.jpg" alt="Shop item">                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=2">菠萝灯（测试款不发货）</a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥0.20                    </span>
                  </div>
                </div>
              </div>
        
      </div>
    </section>
  
   <footer class="footer padding-top-2x">
      <div class="column">
        <div class="feature text-center">
      <div class="feature-title"><a id="Cooperate" href="#">服务中心</a></div>
          </div>
      </div>
      <div class="column">
        <div class="feature text-center">
            <div class="feature-title"><a href="#">关于我们</a></div>
          </div>
      </div>
      <div class="column">
        <div class="feature text-center">
            <div class="feature-title"><a href="#">商业合作</a></div>
          </div>
      </div>
    </footer>
  <section class="container space-top space-bottom padding-top-mobile-1x">
    <div class="text-center">
      <div class="hidden-xs">
        <div style="margin-top: 10px;">粤ICP备17001641号-1
</div>
      </div>
      <div class="visible-xs">
        <div style="margin-top:-20px;">粤ICP备17001641号-1
</div>
      </div>
    </div>
<script type='text/javascript'>
    (function(m, ei, q, i, a, j, s) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = '//static.meiqia.com/dist/meiqia.js';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 49130);
</script>
  </section>
    
    <div class="mobile-foot col-xs-12 hidden-sm hidden-md hidden-lg" style="position:fixed;bottom:0;padding:0px;">
    <div class="col-xs-6" style="padding:0px;">
          <a href="#" class="mobile-add-to-cart" onClick="addToCart(21,0,0,1);" >
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay" onClick="addToCart(21,0,1,1);" >
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
  <script src="themes/miqinew/js/vendor/owl.carousel.min.js"></script>
  <script src="themes/miqinew/js/vendor/jquery.downCount.js"></script>
  <script src="themes/miqinew/js/vendor/magnific-popup.min.js"></script>
  <script src="themes/miqinew/js/scripts.js"></script>
  <script src="themes/miqinew/js/layer_mobile/layer.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript">
$(function(){
  function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return {width : e[ a+'Width' ] , height : e[ a+'Height' ]};
}
if (viewport().width < 768){
   $("#xiangqiangimg img").click(function(event) {
    //window.location.href=$(this).attr("src");
    var arr = new Array();
   //console.log($("#xiangqiangimg img"));
   $("#xiangqiangimg img").each(function(i){
      str=$(this).attr("src");
      arr[i]=str.replace('/mobile/include/kindeditor/php/../../../../images/upload/image/', "");
   });
   var imgstr=JSON.stringify(arr);
    window.location.href='mobileimg.php?imgstr='+imgstr;
   });
}
  var data=[[{"attr_id":"470","typeid":"225"}]];
   $(".type_arr  ul li a").removeAttr("onclick");
  $(".type_arr  ul li a").addClass('specDonotchoose');
  $.each(data,function(i){
    $.each(data[i],function(x){
          $("#type_"+data[i][x].attr_id).attr("onclick",'attrshuaixuan('+data[i][x].attr_id+','+data[i][x].typeid+','+i+',0)');   //电脑
          $("#type_"+data[i][x].attr_id).removeClass("specDonotchoose");  //电脑
          $("#mobiletype_"+data[i][x].attr_id).removeClass("specDonotchoose");  //手机
          $("#mobiletype_"+data[i][x].attr_id).attr("onclick",'attrshuaixuan('+data[i][x].attr_id+','+data[i][x].typeid+','+i+',0)');   //电脑
    })
  })
});
     function attrshuaixuan(attrid,typeid,typenum,ismobile){
      var click_value=$("input[name='spec_"+typeid+"']").val();
        $("#type_"+attrid).parent().siblings('li').children('a').removeClass('pc-group-change');
        $("#mobiletype_"+attrid).parent().siblings('li').children('a').removeClass('pc-group-change');  //手机
        if(click_value==attrid){
           var want_back=attrid;                   //取消标示
        }else{
          var want_back=0;
          $("#type_"+attrid).addClass("pc-group-change");
          $("#mobiletype_"+attrid).addClass("pc-group-change");     //手机
        }
        $("input[name='spec_"+typeid+"']").val(attrid);
        if(ismobile){
         var formBuy      = document.forms['ECS_FORMBUY'];
        }else{
          var formBuy      = document.forms['ECS_FORMBUY_MOBILE'];
        }
          if (formBuy)
          {
            spec_arr = getSelectedAttributes(formBuy);
          }
         $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=attrshuaixuan",
                                    async:true,
                                    data:{attrid:attrid,typenum:typenum,spec_arr:spec_arr,typeid:typeid,want_back:want_back},
                                    dataType: "json",
                                    success: function (data) {
                                      console.log(data);
                                      $("#type_"+attrid).removeClass('pc-group-change');
                                      $("#mobiletype_"+attrid).removeClass('pc-group-change');
                                      $("input[name='spec_"+typeid+"']").val('');
                                      $("input[name='spec_"+typeid+"']").siblings().val('');
                                      // if(data.error==1){
                                      //   alert('未找到该商品!');
                                      //   window.location.href=window.location.href;
                                      //   return;
                                      // }
                                      $(".type_arr  ul li a").removeAttr("onclick");
                                       $(".type_arr  ul li a").addClass('specDonotchoose');
                                       // $("#pc-select-group"+typenum+"  ul li ").css("display",'block');
                                      $.each(data.select,function(i) {
                                        $.each(data.select[i],function(x){
                                          $("#type_"+data.select[i][x].attr_id).attr("onclick",'attrshuaixuan('+data.select[i][x].attr_id+','+data.select[i][x].typeid+','+i+',0)');         //电脑
                                          $("#type_"+data.select[i][x].attr_id).removeClass("specDonotchoose");  //电脑
                                          $("#mobiletype_"+data.select[i][x].attr_id).attr("onclick",'attrshuaixuan('+data.select[i][x].attr_id+','+data.select[i][x].typeid+','+i+',0)');         //电脑
                                          $("#mobiletype_"+data.select[i][x].attr_id).removeClass("specDonotchoose");  //电脑
                                        });
                                      });
                                      $.each(data.checked,function(i){
                                          // $("#type_"+data.checked[i].attrid).removeAttr("onclick");
                                          // $("#mobiletype_"+data.checked[i].attrid).removeAttr("onclick");
                                          $("#type_"+data.checked[i].attrid).parent().siblings('li').children('a').removeClass('pc-group-change');
                                           $("#mobiletype_"+data.checked[i].attrid).parent().siblings('li').children('a').removeClass('pc-group-change');    //手机
                                          $("#type_"+data.checked[i].attrid).addClass("pc-group-change");
                                          $("#mobiletype_"+data.checked[i].attrid).addClass("pc-group-change");    //手机
                                          $("input[name='spec_"+data.checked[i].typeid+"']").val(data.checked[i].attrid);
                                        });
                                     $(".pc-thumbnail").attr("src","././admin/"+data.data.attributeimg);
                                     $(".mobile-thumbnail").attr("src","././admin/"+data.data.attributeimg);  //手机筛选图片
                                     window._shuxingimgs_= "././admin/"+data.data.attributeimg
                                     $("#pc_price").text("￥"+data.data.attributeprice);
                                     $("#mobile_price").text("￥"+data.data.attributeprice);  //手机
                                     window.__product__=data.data.product_number;
                                     $("#quantity").val(1);
                                     $("#quantitymobile").val(1);
                                          }//回调函数结束
                               });//ajax结束
       }
window.__product__=20;
window._shuxingimgs_="././admin/"+"uploads/24729709772a72c495b951d1654005be.jpg";
/*商品数量+1*/
function numAdd(){
    var quantity = document.getElementById("quantity").value;
    var num_add = parseInt(quantity)+1;
    if(quantity==""){
        num_add = 1;
    }
    if(num_add>__product__){
        document.getElementById("quantity").value=num_add-1;
        alert("库存不足");
    }else{
        document.getElementById("quantity").value=num_add;
    }
}
/*商品数量-1*/
function numDec(){
    var quantity = document.getElementById("quantity").value;
    var num_dec = parseInt(quantity)-1;
    if(num_dec>0){
        document.getElementById("quantity").value=num_dec;
    }
}
//手机加减
/*商品数量+1*/
function numAddmobile(){
    var quantity = document.getElementById("quantitymobile").value;
    var num_add = parseInt(quantity)+1;
    if(quantity==""){
        num_add = 1;
    }
    if(num_add>__product__){
        document.getElementById("quantitymobile").value=num_add-1;
        alert("库存不足");
    }else{
        document.getElementById("quantitymobile").value=num_add;
    }
}
/*商品数量-1*/
function numDecmobile(){
    var quantity = document.getElementById("quantitymobile").value;
    var num_dec = parseInt(quantity)-1;
    if(num_dec>0){
        document.getElementById("quantitymobile").value=num_dec;
    }
}
</script>
  <script type="text/javascript">
    //点击收藏与取消收藏
    var oDiv = document.getElementById('shochang');   //手机
    var oDivpc = document.getElementById('shochangpc');   //电脑
    var goodsid = document.getElementById('goodsid').value;
    oDiv.onclick=function(){
         $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=shochangsc",
                                    async:true,
                                    data:{goodsid:goodsid},
                                    dataType: "json",
                                    success: function (result) {
                                          if(result=='true'){
                                              $("#shochang").addClass("schongse");
                                          }else{
                                             $("#shochang").removeClass("schongse");
                                          }
                                          }//回调函数结束
                               });//ajax结束
    };
    oDivpc.onclick=function(){
             $.ajax({
                                    type:"post",
                                    url:"shop-single.php?act=shochangsc",
                                    async:true,
                                    data:{goodsid:goodsid},
                                    dataType: "json",
                                    success: function (result) {
                                          if(result=='true'){
                                              $("#shochangpc").addClass("schongse");
                                          }else{
                                             $("#shochangpc").removeClass("schongse");
                                          }
                                          }//回调函数结束
                               });//ajax结束
    };
</script>
<script src="themes/miqinew/js/qrcode.js"></script>
  <script src="themes/miqinew/js/jquery.qrcode.js"></script>
 <script type="text/javascript">
  $(function(){
    $("#fenxiang").click(function(){
      var content='<div class="webui-popover-content" style="border:10px solid #ffffff;"></div>';
      layer.open({
        closeBtn: 0,
        title: false,
        type: 1,
        content: content,
        success:function(){
          $('.webui-popover-content').qrcode({
          text: window.location.href,//二维码代表的字符串（本页面的URL）
          width: 167,//二维码宽度
          height: 167//二维码高度
          })
        }
      });
    });
  $("#Mobilethumbnail").click(function(){
    var content= '<div class="test_mobile_pinch" ><img    id="mbsuofang" src="'+_shuxingimgs_+'"></div>';
      layer.open({
        closeBtn: 0,
        title: false,
        type: 1,
        content: content
    //     success:function(){
    //       //alert('success');
    //       //创建一个新的hammer对象并且在初始化时指定要处理的dom元素
    //       var ham = new Hammer(document.getElementById("mbsuofang"), {
    //   domEvents: true
    // });
    //       var width = 500;
    //       var height = 500;
    // ham.get('pinch').set({enable: true});
    // $( "#mbsuofang" ).on( "pinch", function( e ) {
    //    if ( width * e.originalEvent.gesture.scale >= 100 ) {
    //    $( this ).css({
    //      width: width * e.originalEvent.gesture.scale,
    //      height: height * e.originalEvent.gesture.scale,
    //    });
    //    }
    //    console.log( e.originalEvent.gesture.scale );
    // } );
    // $( "#mbsuofang" ).on( "pinchend", function( e ) {
    //   width = width * e.originalEvent.gesture.scale;
    //   height = height * e.originalEvent.gesture.scale;
    // $( ".test_mobile_pinch" ).on( "panstart", function( e ) {
    //   img = $( ".test_mobile_pinch img" );
    //   margin = parseInt( img.css( "margin-left" ), 10 );
    // } );
    // $( ".test_mobile_pinch" ).on( "pan", function( e ) {
    // console.log( "pan" );
    //   var delta = margin + e.originalEvent.gesture.deltaX;
    //   console.log( delta );
    //   if ( delta >= -1750 && delta <= -150 ) {
    //      img.css( {
    //     "margin-left": margin + e.originalEvent.gesture.deltaX
    //   } );
    //   }
    // });
    //   console.log( width );
    // } );
    //       // hammertime.get('pinch').set({enable:true});
    //       // hammertime.add(new Hammer.Pinch());
    //       // //添加事件
    //       // hammertime.on("pinchin", function (e) {
    //       //    //控制台输出
    //       //    console.log(e);
    //       // });
    //     }
      });
    });
  })
</script>
<script type="text/javascript">
   addToCart(21,0,1,1);
</script>
</body><!-- <body> -->
</html>
