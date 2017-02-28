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
  <style>
    #form-control .form-control{
    height: 40px;
    line-height: 1.2;
    color: #999;
    border: 1px solid #ededed;
    border-radius: 2px;
    padding: 0;
    margin-bottom: 0px;
    text-indent:2px;
    }
    #form-control .col-md-4{
    padding-left:0;
    padding-right:0;
    }
    input{
      outline:none;
    }
    .new-address{
      width:98%;
      height:40px;
      padding:0 1%;
      margin-bottom:10px;
      border:1px solid #ECECEC;
    }
    .new-address::-webkit-input-placeholder {
      color:#C1C1C1; /*WebKit browsers*/
    }
    .new-address::-moz-placeholder{
      color:#C1C1C1; /*Mozilla Firefox 19+ */
    }
    .new-address-change{
      width:98%;
      height:40px;
      padding:0 1%;
      margin-bottom:10px;
      border:1px solid #ECECEC;
    }
    .new-address-change::-webkit-input-placeholder {
      color:red; /*WebKit browsers*/
    }
    .new-address-change::-moz-placeholder{
      color:red; /*Mozilla Firefox 19+ */
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
    

    
<section class="container padding-top-4x">
        
        <div class="shopping-cart-1 padding-bottom-1x" style="padding:15px;" id="pay_consignee">
                <div style=" border-bottom: 2px solid #ededed; margin-bottom:15px; ">
                    <h4 class="text-primary">快递地址</h4>
                </div>

                   <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');$this->_foreach['address'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['address']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
        $this->_foreach['address']['iteration']++;
?>
                  <div class="row pay_label" style=" padding:2px 0; margin-bottom: 10px; margin-left: 0; margin-right: 0;cursor:pointer;" onclick="checkadd(<?php echo $this->_var['consignee']['address_id']; ?>)" id="div<?php echo $this->_var['consignee']['address_id']; ?>">

                  <div class="col-md-6 check_box"  >
                    <label class="radio radio-inline" style="margin-right:0; padding-top: 4px;" id="label<?php echo $this->_var['consignee']['address_id']; ?>"  >
                     <input type="radio" name="my_co_shipping" <?php if ($this->_var['consignee']['default'] == 1): ?>checked<?php elseif ($this->_foreach['address']['iteration'] == 1): ?>checked<?php endif; ?> value="<?php echo $this->_var['consignee']['address_id']; ?>"  id="address<?php echo $this->_var['consignee']['address_id']; ?>"  >
                     </label><?php echo $this->_var['consignee']['city']; ?><?php echo $this->_var['consignee']['district']; ?>
                   <?php echo $this->_var['consignee']['province']; ?><?php echo $this->_var['consignee']['address']; ?>
                  </div>
                  <div class="col-md-3 adperson">
                    收件人：<?php echo $this->_var['consignee']['consignee']; ?>
                  </div>
                  <div class="col-md-3 adnumber">
                    联系电话：<?php echo $this->_var['consignee']['tel']; ?>
                  </div>

                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>




                   <h5 style="margin-top: 15px;" id="address_h5">
                   <?php if ($this->_var['loginphone']): ?>
                   <a href="#" onclick="callpay()" class="toggle-section addNewAddress">读取微信地址</a>
                   <?php endif; ?>
                   &nbsp;&nbsp;<a href="#" id="Address_Manager" class="toggle-section addNewAddress">新增地址</a>



                   </h5>


        </div>
</section>

<div class="container-fluid" style="height:12px; margin-bottom: 10px; background:#f4f4f4;">&nbsp;</div>
        
        <section class="container">
        <div class="shopping-cart-1" style="padding:15px; margin-bottom: 30px;">
                                    <div class="clearfix" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;">
                                        <h4 class="text-primary pull-left">确认订单信息</h4>
                                   </div>
                                   <div class=" hidden-xs">
                                   <div class="row text-center" style="padding-bottom:20px; margin:0 0 30px 0; border-bottom: 1px solid #ededed; ">
                                        <div class="col-sm-3" style="padding-left: 0;">
                                          商品
                                        </div>
                                        <div class="col-sm-3">
                                          商品属性
                                        </div>
                                        <div class="col-sm-3">
                                          数量
                                        </div>
                                        <div class="col-sm-2">
                                          价格
                                        </div>
                                        <div class="col-sm-1">
                                          &nbsp;
                                        </div>
                                   </div>
                                    <?php $_from = $this->_var['cart_list']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gl');if (count($_from)):
    foreach ($_from AS $this->_var['gl']):
?>
                                   <div class="row text-center pc_paylist" style="padding-bottom:20px;">
                                   <input  type="hidden" value="<?php echo $this->_var['gl']['rec_id']; ?>"   class="pay_rec">
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <a href="#" class="item-thumb">
                                                      <img class="img-responsive" src="././admin/<?php echo $this->_var['gl']['goods_thumb']; ?>" alt="<?php echo $this->_var['gl']['goods_name']; ?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            <h5><?php echo $this->_var['gl']['goods_name']; ?></h5>
                                            <div><?php echo $this->_var['gl']['goods_attr']; ?></div>
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            <div class="count-input" style="margin:0 auto;">
                                              <a class="incr-btn" data-action="decrease" href="#" onclick="changecart(<?php echo $this->_var['gl']['rec_id']; ?>,-1)">–</a>
                                              <input class="quantity cart_number_<?php echo $this->_var['gl']['rec_id']; ?>" type="text" value="<?php echo $this->_var['gl']['goods_number']; ?>" min="1" max="1000" name="goods_number[<?php echo $this->_var['gl']['rec_id']; ?>]"   readonly>
                                              <a class="incr-btn" data-action="increase" href="#" onclick="changecart(<?php echo $this->_var['gl']['rec_id']; ?>,1)">+</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 goods_subtotal<?php echo $this->_var['gl']['rec_id']; ?> pc_subtotal"    style="padding-top: 3%; margin-top:7px;color: #F20000;" >
                                            <?php echo $this->_var['gl']['subtotal']; ?>
                                        </div>
                                        <div class="col-sm-1" style="padding-top: 3%;">
                                            <a href="#" style="display:inline-block; width:36px; height:36px; font-size: 20px; border-radius:3px; border: 2px solid #ededed;" data-toggle="tooltip" data-placement="top" title="删除" class="item-remove droplist dropcart<?php echo $this->_var['gl']['rec_id']; ?> " onclick="dropcart(<?php echo $this->_var['gl']['rec_id']; ?>);">
                                            <i class="material-icons delete"></i>
                                          </a>
                                        </div>
                                   </div>
                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                   <div class="row text-center" style="padding-bottom:20px; margin:0; border-bottom: 1px solid #ededed; ">
                                        <div class="col-sm-3">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            邮费：
                                        </div>
                                        <div class="col-sm-2 come_price" style="padding-top: 3%;">
                                        ￥<span>0</span>

                                        </div>
                                        <div class="col-sm-1" style="padding-top: 3%;">
                                        &nbsp;
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-3">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3" style="padding-top: 3%;">
                                            <h5>总计：<span class="amount_pay" style="color:#f20000"><?php echo $this->_var['cart_list']['total']['goods_price']; ?></span></h5>
                                        </div>
                                        <div class="text-right order_ok" style="padding-right: 18px;"><a href="#" class="btn btn-primary" style="width:auto;" >确认订单</a></div>
                                   </div>
                                   </div>
                                   </div>
                                   
                                   <div class="hidden-sm hidden-md hidden-lg">

                                     <?php $_from = $this->_var['cart_list']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gl');if (count($_from)):
    foreach ($_from AS $this->_var['gl']):
?>
                                     <div class="mobile_paylist">
                                          <div class="row">
                                          <div class="col-xs-3">
                                            <a href="#">
                                              <img class="img-responsive" src="././admin/<?php echo $this->_var['gl']['goods_thumb']; ?>" alt="<?php echo $this->_var['gl']['goods_name']; ?>">
                                            </a>
                                          </div>
                                          <div class="col-xs-9">
                                            <?php echo $this->_var['gl']['goods_name']; ?>
                                          </div>
                                          </div>
                                            <div style="margin-top:20px;padding:20px 0; border-top:1px solid #f5f5f5; border-bottom:1px solid #f5f5f5; color: #999;"><?php echo $this->_var['gl']['goods_attr']; ?></div>
                                            <div class="clearfix">
                                              <div class="pull-left goods_subtotal<?php echo $this->_var['gl']['rec_id']; ?> mobile_subtotal" style="padding-top:15px; color: #F20000;"><?php echo $this->_var['gl']['subtotal']; ?></div>
                                              <div class="pull-right">
                                                <div class="count-input" style="display:inline-block;">
                                                <a class="incr-btn" href="#" onclick="changecart(<?php echo $this->_var['gl']['rec_id']; ?>,-1)">–</a>
                                                <input class="quantity cart_number_<?php echo $this->_var['gl']['rec_id']; ?>" type="text" value="<?php echo $this->_var['gl']['goods_number']; ?>" min="1" max="1000" name="goods_number[<?php echo $this->_var['gl']['rec_id']; ?>]"    readonly>
                                                <a class="incr-btn" href="#" onclick="changecart(<?php echo $this->_var['gl']['rec_id']; ?>,1)">+</a>
                                                </div>
                                                <a href="#" style="display:inline-block; padding-left:6px; width:36px; height:36px; font-size: 20px; border-radius:3px; border: 2px solid #ededed;" data-toggle="tooltip" data-placement="top" title="删除" class=" droplist dropcart<?php echo $this->_var['gl']['rec_id']; ?>" onclick="dropcart(<?php echo $this->_var['gl']['rec_id']; ?>);">
                                                  <i class="material-icons delete"></i>
                                              </a>
                                              </div>
                                            </div>
                                  </div>

                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    

                                    <div class="clearfix" style="padding-top:20px; margin:0 0 15px 0; border-top: 1px solid #ededed; ">
                                        <span>邮费：</span>
                                        <div class="pull-right come_price come_price_pc">￥<span>0</span></div>
                                    </div>
                                    <div class="clearfix" style="padding-top:20px; margin:0 0 30px 0; border-top: 1px solid #ededed; ">
                                        <h5 class="text-right">总计：<span class="amount_pay" style="color:#f20000" ><?php echo $this->_var['cart_list']['total']['goods_price']; ?>
                                        </span></h5>
                                    </div>
                                       <div><a href="#" class="btn btn-primary order_ok" >确认订单</a></div>

                                   </div>


                              </div></section>

  </div>

  
  <?php echo $this->fetch('foot.dwt'); ?>
  

  

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/nouislider.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>






    <script type="text/javascript">


 $(" #pay_consignee input[type='radio']").each(function(){

                       var id= $(this).attr("id");


                       if($("#"+id).attr("checked")=="checked"){

                        $(this).parent().parent().parent().css({'font-weight':'bolder','background':"#edf7f9"});
                        $(this).parent().parent().parent().siblings().css({'font-weight':'normal','background':"none"});
                        var addressid=$("#"+id).val();
                            $.ajax({
                              type:"POST",
                              url:"flow.php",
                              dataType: "json",
                              data:{step:'ajax_get_price',address:addressid},
                              success: function(data){
                                           if(data.error==12){
                                                   window.location.href=data.url;
                                                   return;
                                              }
                                   $(".come_price span").text(data);
                                    jisuan();


                              }


                          });


                       }else{
                              $(".order_ok").css("display","none");
                       }

                      });
               $('input').on('ifChecked', function(event){
              //  alert(event.type + ' callback');
                //alert($(this).parent().find("input").val());
                     checkadd($(this).parent().find("input").val());
              });

 $(function(){


    if($("input:radio[name='my_co_shipping']").length > 0&& $(".pc_paylist").length>0){
              $(".order_ok").css("display","block");
        }else{
             $(".order_ok").css("display","none");
        }
      validate();

    })

    function jisuan(){
      var mobile_price=0;
      //var pc_price =0;
     var come_price= parseFloat($(".come_price_pc span").text());

      $.each($(".mobile_subtotal"),function(i) {
         mobile_price+=parseFloat($(this).children('span').text());
      });
      // $.each($(".pc_subtotal"),function(i) {
      //    pc_price+=parseFloat($(this).children('span').text());
      // });

     var sum_price=mobile_price+come_price;
     $(".amount_pay").text("￥"+sum_price.toFixed(2));


    }


  function checkadd(id){

      var address=$('#address'+id).val();


      $(" .pay_label .iradio ").removeClass('checked');
      $(" .pay_label .iradio input[type='radio']").removeAttr('checked');
      $('#address'+id).attr('checked','checked');





      $('#address'+id).parent().addClass('checked');
      $('.pay_label').css({'font-weight':'normal','background':"none"});;
      $('#div'+id).css({'font-weight':'bolder','background':"#edf7f9"});
      $.ajax({
          type:"POST",
          url:"flow.php",
          dataType: "json",
          data:{step:'ajax_get_price',address:address},
          success: function(data){
            if(data.error==12){
                               window.location.href=data.url;

                          }
               $(".come_price span").text(data);
              jisuan();

          }


      });

    }

    function validate(){
      var pc_box=$(".pc_paylist").length;
      var mobile_box=$(".mobile_paylist").length;
      if(pc_box<=1){
           $(".pc_paylist").find('.droplist').hide();
      }
      if(mobile_box<=1){
          $(".mobile_paylist").find('.droplist').hide();
      }
    }
    function changecart(rec_id,diff){

          var num = parseInt($('.cart_number_'+rec_id).val());


          var goods_number = num + Number(diff);
          if( goods_number >= 1){



             $.ajax({
                type:"POST",
                url:"flow.php",
                dataType: "json",
                data:{step:'ajax_update_cart',rec_id:rec_id,goods_number:goods_number},
                success: function(data){
                  console.log(data.goods_subtotal);
                   // document.getElementById('total_number').innerHTML = data.total_number;//更新数量
                  $('.goods_subtotal'+rec_id).html(data.goods_subtotal) ;//更新小计
                   jisuan();
                    $('.cart_number_'+rec_id).val(goods_number); //更新数量


                },
                error: function(){

                    alert("库存不足");

                }
            });
          }
        }




        function dropcart(id){
          event.preventDefault();
              $(".dropcart"+id).parents(".mobile_paylist").remove();
              $(".dropcart"+id).parents(".pc_paylist").remove();
              validate();
                $.ajax({
              url:"flow.php",
              data:{step:'drop_goods',id:id},
              dataType:"JSON",

            });
                 jisuan();
        }
        function checknewaddress(){
            var user=document.getElementById("newaddress").value.length;
            var imobile=document.getElementById("newimobile").value;
            var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
            var iselectProvince = $('#province option:selected').val();//选中的省份
            var iselectCity = $('#city option:selected').val();//选中的市
            var iselectDistrict = $('#district option:selected').val();//选中的区
            var idetailadd=document.getElementById("detailadd").value;

           if(user>0){
              document.getElementById("newaddress").className="new-address";
           }else{
              document.getElementById("newaddress").className="new-address-change";
              document.getElementById("newaddress").setAttribute("placeholder","请输入用户名");
              return false;
           }
           if(imobile==""||!mobile.test(imobile)){
              document.getElementById("newimobile").className="new-address-change";
              document.getElementById("newimobile").value='';
              document.getElementById("newimobile").setAttribute("placeholder","手机号码不正确");
              return false;
           }
          if(iselectProvince==0){//省份判断
            s = document.getElementById("province")
            for(i=0;i<s.options.length;i++){
            if(s.options[i].value=="0"){
              s.options[i].innerHTML="请选择省份";
              }
            }
            return false;
          }
          if(iselectCity==0){//市判断
            s = document.getElementById("city")
            for(i=0;i<s.options.length;i++){
            if(s.options[i].value=="0"){
              s.options[i].innerHTML="请选择城市";
              }
            }
            return false;
          }
          if(iselectDistrict==0){//区判断
            s = document.getElementById("district")
            for(i=0;i<s.options.length;i++){
            if(s.options[i].value=="0"){
              s.options[i].innerHTML="请选择区";
              }
            }
            return false;
          }
          if(idetailadd==""){
            document.getElementById("detailadd").className="new-address-change";
            document.getElementById("detailadd").setAttribute("placeholder","地址不能为空");
            return false;
          }
      }
    //新增地址
   $('#Address_Manager').click(function(){
    var content =' <form method="post" class="checkout-form container" id="address_form"><div><input type="text" class="new-address" placeholder="收件人" name="consignee" id="newaddress"/></div>'
    +
    '<div><input type="text" class="new-address" placeholder="手机" name="tel" id="newimobile" /></div>'
    +
    '<div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
    '<select name="province" id="province" class="form-control" >'+
               ' <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>' +
                '<?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>'+
                '<option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>'+
               '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></select>'+
                 '</div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                 '<select name="city" id="city"  class="form-control">'+
                  '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>'+
                  '<?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>'+
                  '<option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>'+
                  '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>'+
                 '</select>'+
                 '</div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                 '<select name="district" id="district"   class="form-control">'+
                   '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>' +
                    '<?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>'+
                    '<option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>'+
                    '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>'+
                  '</select>'+
                 '</div></div></div>'
    +
    '<div><input type="text" class="new-address" placeholder="详细地址" name="address" id="detailadd"/></div>'
    +
    '<div class="text-right visible-sm visible-xs"><a href="#" style="text-decoration: underline;"></a></div></form>'
    ;





    layer.open({
              title: [
                '新增地址',
                'background-color:#77cde3; color:#fff;'
              ],
              content:content,
              btn: ['确认', '返回'],
              success: function(){
                       //省事件开始
                             $("#province").change(function(){
                                var id=$("#province").val();
                                $("#city").find("option").remove();
                                          $("#district").find("option").remove();
                                         $("#city").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>');
                                         $("#district").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                                if(id!=0){
                                 $.ajax({
                                    url:"ajax_region.php",
                                    data:{ajax_province:id},
                                    dataType:"JSON",
                                    success: function(data){

                                         $.each(data,function(i){

                                             $("#city").append(
                                               ' <option value="'+data[i].region_id+'"  >'+data[i].region_name+'</option>'
                                             );


                                         });
                                         var cityid=$("#city").val();





                                    },
                                    error:function(){
                                          alert('error');
                                    }
                                  });
                                }

                            });
                        //省事件结束
                        //市事件开始
                         $("#city").change(function(){
                            var id=$("#city").val();
                            $("#district").find("option").remove();
                            $("#district").append('<option value="0" selected><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                            if(id!=0){
                             $.ajax({
                                url:"ajax_region.php",
                                data:{ajax_province:id},
                                dataType:"JSON",
                                success: function(data){

                                     $.each(data,function(i){

                                         $("#district").append(
                                           ' <option value="'+data[i].region_id+'" >'+data[i].region_name+'</option>'
                                         );


                                     });

                                },
                                error:function(){
                                      alert('error');
                                }
                              });
                            }

                        });
                        //市事件结束
                        },
              yes: function(index){


                   checknewaddress();

                    $.ajax({
                          type:"POST",
                          url:"flow.php?step=consignee",
                          data:$('#address_form').serialize(),
                          dataType:"JSON",
                          success: function(data){
                            if(data.error==12){
                                  window.location.href=data.url;
                            }
                            if($("input:radio[name='my_co_shipping']").length > 0){
                                      var check='';
                                }else{
                                     var check='checked';
                                }
                            var content=' <div class="row pay_label" style=" padding:2px 0; margin-bottom: 10px; margin-left: 0; margin-right: 0;cursor:pointer;" onclick="checkadd('+data.address_id+')" id="div'+data.address_id+'"><div class="col-md-6 check_box"  ><label class="radio radio-inline" style="margin-right:0; padding-top: 4px;" id="label'+data.address_id+'"  ><div class="iradio '+check+'"><input type="radio" name="my_co_shipping"  value="'+data.address_id+'"  id="address'+data.address_id+'"  style="position: absolute; opacity: 0;" '+check+'><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label> '+data.province+data.address+'</div><div class="xinzeng-mobile col-md-3">收件人：'+data.consignee+'</div><div class="col-md-3 xinzeng-mobile">联系电话：'+data.tel+'</div> </div>';

                            //console.log(data);
                             $("#address_h5").before(content);
                              if($("input:radio[name='my_co_shipping']").length > 0&& $(".pc_paylist").length>0){
                                        $(".order_ok").css("display","block");
                                  }else{
                                       $(".order_ok").css("display","none");
                                  }

                                 layer.close(index);
                                 //top.location.href = top.location.href;
                                  //window.location.href=window.location.href;
                                 // window.location.reload();
                                }
                               });
              },

            });
            });




    </script>
    <script type="text/javascript">

    //确认支付
   $('.order_ok').click(function(){
    var address=$("input[name='my_co_shipping']");
    var cart_id=[];
    $.each($(".pay_rec"),function(){
        cart_id.push($(this).val());
    });
    $.each(address,function(i){
      var id= $(this).attr("id");
        if($("#"+id).attr('checked')=='checked'){
          addressid=$("#"+id).val();

        }

    });

    $.ajax({
            type:"POST",
            url:"flow.php<?php echo $this->_var['linestring1']; ?>",
            data:{step:'new_done',address:addressid,cart_id:cart_id},
            dataType:"JSON",
            success: function(data){
                    if(data.error==12){
                              if(data.url){
                              window.location.href=data.url;
                              return;
                              }
                    }
                    if(data.error==1){
                      alert(data.msg);
                      return;
                    }
                    if(data.error==0&&data.data!=''){
                      window.location.href="flow.php?step=pay_ok<?php echo $this->_var['linestring2']; ?>&order_id="+data.data;
                    }


                  }
                 });




      });
 </script>
 <script type="text/javascript">
  // 手机号码验证
  </script>
   <script language="javascript">
            function callpay()
            {
                WeixinJSBridge.invoke('editAddress',{
                    "appId" : "<?php echo $this->_var['appId']; ?>",
                    "scope" : "jsapi_address",
                    "signType" : "sha1",
                    "addrSign" : "<?php echo $this->_var['signature']; ?>",
                    "timeStamp" : "<?php echo $this->_var['timestamp']; ?>",
                    "nonceStr" : "<?php echo $this->_var['noncestr']; ?>",
                },function(res){

                    // document.form1.address1.value         = res.proviceFirstStageName;   //省
                    // document.form1.address2.value         = res.addressCitySecondStageName;  //市
                    // document.form1.address3.value         = res.addressCountiesThirdStageName;  //区
                    // document.form1.detail.value           = res.addressDetailInfo;   //详细
                    // document.form1.national.value         = res.nationalCode;   //国家码
                    // document.form1.user.value            = res.userName;     //收货人
                    // document.form1.phone.value            = res.telNumber;   //电话
                    // document.form1.postcode.value         = res.addressPostalCode;  //邮编
                    // document.form1.errmsg.value         = res.err_msg;


                      if(res.err_msg == 'edit_address:ok'){


                              $.ajax({

                                            url:"my_usergrzx.php?act=wxaddress",
                                            async:true,
                                            data:{consignee:res.userName,tel:res.telNumber,province:res.proviceFirstStageName,city:res.addressCitySecondStageName,district:res.addressCountiesThirdStageName,address:res.addressDetailInfo},
                                            dataType: "json",
                                            success: function (result) {
                                               if(result.msg=='success'){
                                                 window.location.reload("my_usergrzx.php?act=address_list<?php echo $this->_var['linestring2']; ?>");
                                               }


                                                  }//回调函数结束
                                       });//ajax结束


                        }
                        else{
                            alert("获取地址失败，请重新点击");
                        }
                });
            }
        </script>
</body><!-- <body> -->

</html>
