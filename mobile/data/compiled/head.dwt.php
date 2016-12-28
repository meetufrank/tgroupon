

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
            

            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <div class="item">
                <label class="checkbox" id="checkone">
                <input style="position: absolute; opacity: 0;" type="checkbox" value="<?php echo $this->_var['goods']['rec_id']; ?>" checked="checked"  id="rec_id" name="rec_check">
                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins>
                </label>
                <a href="shop-single.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" class="item-thumb">
                <img src="../<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="Item">
                </a>
                <div class="item-details"><h3 class="item-title">
                <a href="shop-single.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
                </h3>
                <h4 class="item-price" data-price="<?php echo $this->_var['goods']['goods_price']; ?>"><?php echo $this->_var['goods']['goods_price']; ?></h4>
                <div class="count-input">
                <a class="incr-btn" data-action="decrease" href="#" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,-1)">–</a>
                <input class="quantity" type="text" value="<?php echo $this->_var['goods']['goods_number']; ?>" min="1" max="1000" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" onkeyup="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,0)" readonly>
                <a class="incr-btn" data-action="increase" href="#" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,1)">+</a>
                </div></div>
                <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="移出购物车"><i class="material-icons delete"></i></a></div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            

            
            <div class="cart-subtotal space-bottom" id="zongjia">
              <div class="column">
                <h3 class="toolbar-title">总价：</h3>
              </div>

              <div class="column">
                <h3 class="amount"><?php echo $this->_var['total']['goods_price']; ?></h3>
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


<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.validate.js" type="text/javascript"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/messages_zh.js" type="text/javascript"></script>


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
    <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.json-2.3.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.json-2.3.min.js"></script>
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