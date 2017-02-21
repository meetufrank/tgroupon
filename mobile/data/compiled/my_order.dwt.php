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

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/need/layer.css">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>


  
  <style>
    .nav-pills{
      margin-left:-18px;
      padding-bottom:10px;
      margin-top: 10px;
      margin-bottom:35px;
      margin-left:0px;
    }
    .nav-pills>li {
      float: left;
      position: relative;
      display: block;
  }
  .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
      color: #333;
      background-color: #f5f5f5;
  }
  .nav-pills>li>a {
      position: relative;
      display: block;
      text-decoration:none;
      font-size:14px;
      color: #a5a5a5;
  }
  .nav-pills>li>a>span {
    padding-left:5px;
    color:#f20000;
  }
  .teammate-thumb {
      border-radius: 50%;
  }
  .teammate-name a:hover {
      color: #333;
  }
  .teammate-name a {
      text-decoration: none;
      color: #999;
  }
  .list_msgs a{
    color:#666;
    font-size:14px;
    text-decoration:none;
  }
  .list_msgs a:hover{
    color:#999;
    text-decoration:underline;
  }
  button{
    outline:none;
  }
  .btn-save{
    width:50px; height:36px; border:1px solid #666; background-color:#666; color:white; font-size: 13px; font-weight: normal; border-radius: 4px;
  }
  .btn-bianji{
    width:50px; height:36px; border:1px solid red; background-color:red; color:white; font-size: 13px; font-weight: normal; border-radius: 4px;
  }
  .btn-yichu{
    width:50px; height:36px; border:1px solid red; background-color:#C20454; color:white; font-size: 13px; font-weight: normal; border-radius: 4px;
  }
  .input-save{
    width:50px; height:36px; border:1px solid #666; background-color:#666; color:white; font-size: 13px; font-weight: normal; border-radius: 4px;
  }
  #address-text{
    width:40%;
    height:50px;
    margin-bottom:-36px;
  }
  #btn-sm .btn-sm{
    height: 30px;
    font-size: 12px;
    font-weight: normal;
    line-height: 20px;
    padding: 0 5px;
    border-radius: 4px;
  }
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

  /* 快递跟踪背景色样式 */
  .kuaidibjs{
    background-color:#ededed;
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

    
    <section class="container padding-top-3x">
     
      <?php echo $this->fetch('my_head.dwt'); ?>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane transition fade in active" id="tab1">
          

          <ul class="nav-pills" role="tablist">
            <li class="active"><a href="#tab1_1" role="tab" data-toggle="tab">待付款<span id="no_pay_num"><?php echo $this->_var['record_count_no']; ?></span></a></li>
            <li><a href="#tab1_2" role="tab" data-toggle="tab">待发货<span><?php echo $this->_var['record_count_yes']; ?></span></a></li>
            <li><a href="#tab1_3" role="tab" data-toggle="tab">待收货<span><?php echo $this->_var['record_count_come']; ?></span></a></li>
            <li><a href="#tab1_4" role="tab" data-toggle="tab">已完成<span><?php echo $this->_var['record_count_done']; ?></span></a></li>
          </ul>
          <div style="clear:both"></div>
          
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane transition fade in active" id="tab1_1">
             
 <?php $_from = $this->_var['no_orders']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'no');if (count($_from)):
    foreach ($_from AS $this->_var['no']):
?>
                    <div class="shopping-cart-1" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;" id="order_cart_<?php echo $this->_var['no']['order_id']; ?>">
                        <div class="clearfix" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;">
                          <div class="pull-left" style="padding-top:10px;">订单编号:<?php echo $this->_var['no']['order_sn']; ?></div>
                            
                          <div class="pull-right hidden-xs hidden-sm">
                            <a href="#" class="btn btn-default waves-effect waves-light cancel_order_pc" data-id="<?php echo $this->_var['no']['order_id']; ?>">取消订单</a>
                            <a href="flow.php?step=pay_ok&order_id=<?php echo $this->_var['no']['order_id']; ?>" class="btn btn-primary waves-effect waves-light" target="_Blank">去支付</a>
                          </div>

                          </div>
                      <div class="row">
                          <div class="col-md-6">
                      
                    <?php $_from = $this->_var['no']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gl');if (count($_from)):
    foreach ($_from AS $this->_var['gl']):
?>
                      <div class="item hidden-xs">
                      <?php if ($this->_var['gl']['goods_thumb']): ?>
                        <a href="shop-single.php?id=<?php echo $this->_var['gl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-thumb pull-left">
                          <img class="img-responsive" src="././admin/<?php echo $this->_var['gl']['goods_thumb']; ?>" alt="Item">
                        </a>
                        <?php endif; ?>
                        <div class="item-details ">
                          <h3 class="item-title"><a style="color:#77cde3" href="shop-single.php?id=<?php echo $this->_var['gl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['gl']['goods_name']; ?></a></h3>
                          <div>
                          <div class="pull-right" style="color: #000;"><?php echo $this->_var['gl']['goods_attr']; ?></div>
                          <h4 class="item-price">数量：<?php echo $this->_var['gl']['goods_number']; ?></h4>
                          </div>
                          <h4 class="item-price"><?php echo $this->_var['gl']['goods_price']; ?></h4>
                        </div>

                         </div>
                         <div class="item visible-xs">
                         <div class="row">
                          <div class="col-xs-5">
                          <?php if ($this->_var['gl']['goods_thumb']): ?>
                            <a href="shop-single.php?id=<?php echo $this->_var['gl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
                              <img class="img-responsive" src="././admin/<?php echo $this->_var['gl']['goods_thumb']; ?>" alt="<?php echo $this->_var['gl']['goods_name']; ?>">
                            </a>
                            <?php endif; ?>
                          </div>
                          <div class="col-xs-7" onclick="shop-single.php?id=<?php echo $this->_var['gl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
                          <?php echo $this->_var['gl']['goods_name']; ?>
                        </div>
                        </div>
                          <div class="myorder-shop-item"><?php echo $this->_var['gl']['goods_attr']; ?></div>
                          <div class="clearfix clearfix2">
                            <div class="pull-left" style="color: #F20000;"><?php echo $this->_var['gl']['goods_price']; ?></div>
                            <div class="pull-right">
                                   数量：<?php echo $this->_var['gl']['goods_number']; ?>
                            </div>
                          </div>

                        </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      
                      <div class="cart-subtotal-youfei my-space-bottom" style="border-bottom: 2px solid #ededed;">
                        <div class="column">
                          <div class="wait-mobile-many">邮费：</div>
                        </div>
                        <div class="column">
                          <div class="amount_order_no1 wait-mobile-many"><?php echo $this->_var['no']['post_price']; ?></div>
                        </div>
                      </div>

                      
                      <div class="cart-subtotal my-space-bottom">
                        <div class="column">
                          <h4>总价：</h4>
                        </div>
                        <div class="column">
                          <h3 class="amount_no" style="color:#f20000"><?php echo $this->_var['no']['total_fee']; ?></h3>
                        </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <h4 class="text-primary">收件人信息</h4>
                        <hr>
                        <div>
                        收件人：<?php echo $this->_var['no']['consignee']; ?><br>
                  手机号：<?php echo $this->_var['no']['tel']; ?><br>
                  地   址 ：<?php echo $this->_var['no']['address']; ?>
                  </div>
                      </div>
                      </div>
                      <br>

                      <div class="visible-sm visible-xs">
                        <a href="#" class="btn btn-default waves-effect waves-light cancel_order_mobile" data-id="<?php echo $this->_var['no']['order_id']; ?>" >取消订单</a>
                        <a href="flow.php?step=pay_ok&order_id=<?php echo $this->_var['no']['order_id']; ?>" class="btn btn-primary waves-effect waves-light" target="_Blank">去支付</a>
                      </div>

                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  

<?php if ($this->_var['no_orders']['more']): ?>
              <div class="row padding-top" id="no_more">
                  <div class="text-center padding-bottom-2x">

                    <a href="#" class="btn btn-primary waves-effect waves-light" id="no_pay" >加载更多</a>

                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>

                  </div>
              </div>
              <?php endif; ?>
            </div>

            <div role="tabpanel" class="tab-pane transition fade" id="tab1_2">
            <?php $_from = $this->_var['ye_orders']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ye');if (count($_from)):
    foreach ($_from AS $this->_var['ye']):
?>
              <div class="shopping-cart-1 padding-bottom-1x" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
                          订单编号：<?php echo $this->_var['ye']['order_sn']; ?>
                          </div>
                      <div class="row">
                          <div class="col-md-6">

                      <?php $_from = $this->_var['ye']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'yg');if (count($_from)):
    foreach ($_from AS $this->_var['yg']):
?>
                       

                      <div class="item hidden-xs">
                      <?php if ($this->_var['yg']['goods_thumb']): ?>
                        <a href="shop-single.php?id=<?php echo $this->_var['yg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-thumb pull-left">
                          <img class="img-responsive" src="././admin/<?php echo $this->_var['yg']['goods_thumb']; ?>" alt="<?php echo $this->_var['yg']['goods_name']; ?>">
                        </a>
                         <?php endif; ?>
                        <div class="item-details">
                          <h3 class="item-title"><a style="color:#77cde3" href="shop-single.php?id=<?php echo $this->_var['yg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['yg']['goods_name']; ?></a></h3>
                          <div>
                            <div class="pull-right" style="color: #000;"><?php echo $this->_var['yg']['goods_attr']; ?></div>
                            <h4 class="item-price">数量：<?php echo $this->_var['yg']['goods_number']; ?> </h4>
                          </div>
                          <h4 class="item-price"><?php echo $this->_var['yg']['goods_price']; ?></h4>
                        </div>
                      </div>
                      <div class="item visible-xs">
                        <div class="row">
                        <div class="col-xs-5">
                        <?php if ($this->_var['yg']['goods_thumb']): ?>
                          <a href="shop-single.php?id=<?php echo $this->_var['yg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
                            <img class="img-responsive" src="././admin/<?php echo $this->_var['yg']['goods_thumb']; ?>" alt="<?php echo $this->_var['yg']['goods_name']; ?>">
                          </a>
                           <?php endif; ?>
                        </div>
                        <div class="col-xs-7">
                          <?php echo $this->_var['yg']['goods_name']; ?>
                        </div>
                        </div>
                          <div style="margin-top:20px;padding:10px 0; border-top:1px solid #f5f5f5; border-bottom:1px solid #f5f5f5; color: #000;"><?php echo $this->_var['yg']['goods_attr']; ?></div>
                          <div class="clearfix clearfix2">
                            <div class="pull-left"><?php echo $this->_var['yg']['goods_price']; ?></div>
                            <div class="pull-right">
                                   数量：<?php echo $this->_var['yg']['goods_number']; ?>
                            </div>
                          </div>
                      </div>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   <div class="cart-subtotal-youfei space-bottom" style="border-bottom: 2px solid #ededed;">
                        <div class="column">
                          <div>邮费：</div>
                        </div>
                        <div class="column">
                          <div class="amount_order_no1 wait-mobile-many"><?php echo $this->_var['ye']['post_price']; ?></div>
                        </div>
                      </div>
                      
                      <div class="cart-subtotal">
                        <div class="column">
                          <h4>总价：</h4>
                        </div>
                        <div class="column">
                          <h3 class="amount_ye" style="color:#f20000"><?php echo $this->_var['ye']['total_fee']; ?></h3>
                        </div>

                      </div>

                      </div>
                      <div class="col-md-6">
                        <h4 class="text-primary">收件人信息</h4>
                        <hr>
                        <div>
                        收件人：<?php echo $this->_var['ye']['consignee']; ?><br>
                  手机号：<?php echo $this->_var['ye']['tel']; ?><br>
                  地   址 ：<?php echo $this->_var['ye']['address']; ?>
                  </div>
                      </div>
                      </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                 <?php if ($this->_var['ye_orders']['more']): ?>
                    <div class="row padding-top" id="yes_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="yes_pay">加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>
                 <?php endif; ?>
            </div>

            <div role="tabpanel" class="tab-pane transition fade" id="tab1_3">
            <?php $_from = $this->_var['come_orders']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'co');if (count($_from)):
    foreach ($_from AS $this->_var['co']):
?>
              <div class="shopping-cart-1 padding-bottom-1x" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
                          订单编号：<?php echo $this->_var['co']['order_sn']; ?>
                          </div>
                      <div class="row">
                      <div class="col-md-6">
                      
                      <?php $_from = $this->_var['co']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cg');if (count($_from)):
    foreach ($_from AS $this->_var['cg']):
?>
                      <div class="item hidden-xs">

                        <?php if ($this->_var['cg']['goods_thumb']): ?>
                        <a href="shop-single.php?id=<?php echo $this->_var['cg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-thumb pull-left">
                          <img src="././admin/<?php echo $this->_var['cg']['goods_thumb']; ?>" alt="<?php echo $this->_var['cg']['goods_name']; ?>">
                        </a>
                        <?php endif; ?>
                        <div class="item-details">
                          <h3 class="item-title"><a style="color:#77cde3" href="shop-single.php?id=<?php echo $this->_var['cg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['cg']['goods_name']; ?></a></h3>
                          <div>
                          <div class="pull-right" style="color: #000;"><?php echo $this->_var['cg']['goods_attr']; ?></div>
                          <h4 class="item-price">数量：<?php echo $this->_var['cg']['goods_number']; ?> </h4>
                          </div>
                          <h4 class="item-price"><?php echo $this->_var['cg']['goods_price']; ?></h4>
                        </div>
                      </div>
                      <div class="item visible-xs">
                        <div class="row">
                        <div class="col-xs-5">
                              <?php if ($this->_var['cg']['goods_thumb']): ?>
                            <a href="shop-single.php?id=<?php echo $this->_var['cg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
                              <img src="././admin/<?php echo $this->_var['cg']['goods_thumb']; ?>" alt="<?php echo $this->_var['cg']['goods_name']; ?>">
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-7">
                          <?php echo $this->_var['cg']['goods_name']; ?>
                        </div>
                        </div>
                          <div style="margin-top:20px;padding:10px 0; border-top:1px solid #f5f5f5; border-bottom:1px solid #f5f5f5; color: #000;"><?php echo $this->_var['cg']['goods_attr']; ?></div>
                          <div class="clearfix clearfix2">
                            <div class="pull-left" style="color: #F20000;"><?php echo $this->_var['cg']['goods_price']; ?></div>
                            <div class="pull-right">
                                   数量：<?php echo $this->_var['cg']['goods_number']; ?>
                            </div>
                          </div>
                      </div>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                      
                      <div class="cart-subtotal-youfei space-bottom" style="border-bottom: 2px solid #ededed;">
                        <div class="column">
                          <div>邮费：</div>
                        </div>
                        <div class="column">
                          <div class="amount_order_no1 wait-mobile-many"><?php echo $this->_var['co']['post_price']; ?></div>
                        </div>
                      </div>
                      
                      <div class="cart-subtotal">
                        <div class="column">
                          <h4>总价：</h4>
                        </div>
                        <div class="column">
                          <h3 class="amount_come" style="color:#f20000"><?php echo $this->_var['co']['total_fee']; ?></h3>
                        </div>

                      </div>

                      </div>
                      <div class="col-md-6">
                        <h4 class="text-primary">收件人信息</h4>
                        <hr>
                        <div>
                        收件人：<?php echo $this->_var['co']['consignee']; ?><br>
                  手机号：<?php echo $this->_var['co']['tel']; ?><br>
                  地   址 ：<?php echo $this->_var['co']['address']; ?>
                  </div>
                  <br>

                  <h4 class="text-primary">快递信息</h4>
                        <hr>


                  
                  <input type="hidden"  value="<?php echo $this->_var['co']['order_id']; ?>" id="orderids">
                  <a class="btn btn-primary Logistics" href="#" data-id="<?php echo $this->_var['co']['order_id']; ?>" onClick="javascript:func()">快递跟踪</a>
                  </div>
                  

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="expressmain" style="border-top: 2px dashed #ededed">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 exname" id="couriername"><?php echo $this->_var['co']['shipping_name']; ?></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 exnumber"><?php echo $this->_var['co']['invoice_no']; ?></div>

                                     <?php $_from = $this->_var['co']['kuaidi']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cd');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['cd']):
        $this->_foreach['name']['iteration']++;
?>
                                      <?php if ($this->_foreach['name']['iteration'] % 2 == 1): ?>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 extime kuaidibjs">
                                                    <span><?php echo $this->_var['cd']['time']; ?></span>
                                                    <span><?php echo $this->_var['cd']['ftime']; ?></span>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 extext kuaidibjs">
                                                   <?php echo $this->_var['cd']['context']; ?>
                                                </div>
                                      <?php else: ?>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 extime ">
                                                    <span><?php echo $this->_var['cd']['time']; ?></span>
                                                    <span><?php echo $this->_var['cd']['ftime']; ?></span>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 extext ">
                                                   <?php echo $this->_var['cd']['context']; ?>
                                                </div>
                                      <?php endif; ?>
                                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                  </div>

                  
                  </div>

                  </div>

                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                   <?php if ($this->_var['come_orders']['more']): ?>
                    <div class="row padding-top" id="come_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="come_pay">加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>
                  <?php endif; ?>
            </div>

            <div role="tabpanel" class="tab-pane transition fade" id="tab1_4">
            <?php $_from = $this->_var['done_orders']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'do');if (count($_from)):
    foreach ($_from AS $this->_var['do']):
?>
              <div class="shopping-cart-1 padding-bottom-1x" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
                          订单编号：<?php echo $this->_var['do']['order_sn']; ?>
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                      
                      <?php $_from = $this->_var['do']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'dg');if (count($_from)):
    foreach ($_from AS $this->_var['dg']):
?>
                      <div class="item hidden-xs">

                        <?php if ($this->_var['dg']['goods_thumb']): ?>
                        <a href="shop-single.php?id=<?php echo $this->_var['dg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-thumb pull-left">
                          <img src="././admin/<?php echo $this->_var['dg']['goods_thumb']; ?>" alt="<?php echo $this->_var['dg']['goods_name']; ?>">
                        </a>
                        <?php endif; ?>
                        <div class="item-details">
                          <h3 class="item-title"><a style="color:#77cde3" href="shop-single.php?id=<?php echo $this->_var['dg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['dg']['goods_name']; ?></a></h3>
                          <div>
                          <div class="pull-right" style="color: #000;"><?php echo $this->_var['dg']['goods_attr']; ?></div>
                          <h4 class="item-price">数量：<?php echo $this->_var['dg']['goods_number']; ?> </h4>
                          </div>
                          <h4 class="item-price"><?php echo $this->_var['dg']['goods_price']; ?></h4>
                        </div>
                      </div>
                      <div class="item visible-xs">
                        <div class="row">
                        <div class="col-xs-5">
                              <?php if ($this->_var['dg']['goods_thumb']): ?>
                            <a href="shop-single.php?id=<?php echo $this->_var['dg']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
                              <img src="././admin/<?php echo $this->_var['dg']['goods_thumb']; ?>" alt="<?php echo $this->_var['dg']['goods_name']; ?>">
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-7">
                          <?php echo $this->_var['dg']['goods_name']; ?>
                        </div>
                        </div>
                          <div style="margin-top:20px;padding:10px 0; border-top:1px solid #f5f5f5; border-bottom:1px solid #f5f5f5; color: #000;"><?php echo $this->_var['dg']['goods_attr']; ?></div>
                          <div class="clearfix clearfix2">
                            <div class="pull-left" style="color: #F20000;"><?php echo $this->_var['dg']['goods_price']; ?></div>
                            <div class="pull-right">
                                   数量：<?php echo $this->_var['dg']['goods_number']; ?>
                            </div>
                          </div>
                      </div>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                      
                      <div class="cart-subtotal-youfei space-bottom" style="border-bottom: 2px solid #ededed;">
                        <div class="column">
                          <div>邮费：</div>
                        </div>
                        <div class="column">
                          <div class="amount_order_no1 wait-mobile-many"><?php echo $this->_var['do']['post_price']; ?></div>
                        </div>
                      </div>
                      
                      <div class="cart-subtotal">
                        <div class="column">
                          <h4>总价：</h4>
                        </div>
                        <div class="column">
                          <h3 class="amount_done" style="color:#f20000"><?php echo $this->_var['do']['total_fee']; ?></h3>
                        </div>

                      </div>

                      </div>
                      <div class="col-md-6">
                        <h4 class="text-primary">收件人信息</h4>
                        <hr>
                        <div>
                        收件人：<?php echo $this->_var['do']['consignee']; ?><br>
                  手机号：<?php echo $this->_var['do']['tel']; ?><br>
                  地   址 ：<?php echo $this->_var['do']['address']; ?>
                  </div>
                  <br>






                      </div>
                      </div>
                      </div>

                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                   <?php if ($this->_var['done_orders']['more']): ?>
                    <div class="row padding-top" id="done_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="done_pay">加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>
                  <?php endif; ?>
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
 $(".cancel_order_mobile").each(function(){

          $(this).click(function(){
          var order_id=$(this).attr("data-id");

          $(this).parents("#order_cart_"+order_id).remove();
          var paynum=Number($("#no_pay_num").text());
          $("#no_pay_num").text(paynum-1);
           $.ajax({
                  url:"my_user.php?act=cancel_order_new",
                  data:{order_id:order_id},
                  dataType:"JSON",
                  type:"POST",
                  success: function(data){

                  },
                  error:function(){

                  }
                });
      });

 });
 $(".cancel_order_pc").each(function(){
      $(this).click(function(){
          var order_id=$(this).attr("data-id");
           $(this).parents("#order_cart_"+order_id).remove();
           var paynum=Number($("#no_pay_num").text());
          $("#no_pay_num").text(paynum-1);

           $.ajax({
                  url:"my_user.php?act=cancel_order_new",
                  data:{order_id:order_id},
                  dataType:"json",
                  type:"POST",
                  success: function(data){


                  },
                  error:function(){

                  }
                });
      });

 });
                var no_num=1;  //未付款初始化页数
                var yes_num=1;  //待发货初始化页数
                var come_num=1;  //待收货初始化页数
                var done_num=1;//已完成初始化页数
                             $("#no_pay").click(function(event) {
                                        $.ajax({
                                                url:"my_user.php?act=async_order_list<?php echo $this->_var['linestring2']; ?>",
                                                data:{last_no:no_num,type:1},
                                                dataType:"JSON",
                                                type:"POST",
                                                success: function(data){

                                                    $('#no_more').before(data.data);
                                                    if(data.more==0){
                                                           $('#no_more').remove();
                                                    }

                                                  no_num++;

                                                },
                                                error:function(){

                                                }
                                              });
                             });
                    $("#yes_pay").click(function(event) {
                                        $.ajax({
                                                url:"my_user.php?act=async_order_list<?php echo $this->_var['linestring2']; ?>",
                                                data:{last_yes:yes_num,type:2},
                                                dataType:"JSON",
                                                type:"POST",
                                                success: function(data){

                                                        $("#yes_more").before(
                                                              data.data
                                                         );


                                                   if(data.more==0){
                                                      $('#yes_more').remove();
                                                    }
                                                  yes_num++;

                                                },
                                                error:function(){

                                                }
                                              });
                             });
                    $("#come_pay").click(function(event) {
                                        $.ajax({
                                                url:"my_user.php?act=async_order_list<?php echo $this->_var['linestring2']; ?>",
                                                data:{last_come:come_num,type:3},
                                                dataType:"JSON",
                                                type:"POST",
                                                success: function(data){

                                                        $("#come_more").before(
                                                             data.data
                                                         );


                                                   if(data.more==0){
                                                      $('#come_more').remove();
                                                    }
                                                  come_num++;

                                                },
                                                error:function(){

                                                }
                                              });
                             });
                    $("#done_pay").click(function(event) {
                                        $.ajax({
                                                url:"my_user.php?act=async_order_list<?php echo $this->_var['linestring2']; ?>",
                                                data:{last_done:done_num,type:4},
                                                dataType:"JSON",
                                                type:"POST",
                                                success: function(data){

                                                        $("#done_more").before(
                                                             data.data
                                                         );


                                                   if(data.more==0){
                                                      $('#done_more').remove();
                                                    }
                                                  done_num++;

                                                },
                                                error:function(){

                                                }
                                              });
                             });
              </script>
  <script>




  //与我们合作
   $('#Cooperate').click(function(){
    var content ='<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="姓名" /></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="手机" /></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="邮箱" /></div>';
    layer.open({
        title: [
          '填写表单',
          'background-color:#77cde3; color:#fff;'
        ],
        content:content,
        btn: ['提交', '取消']
      });
      });

      //快递跟踪
            // $('.Logistics').each(function(){
            //         $(this).click(function(){
            //                  //获取订单编号

            //                var orderids = $(this).attr("data-id");
            //                // alert(orderids);
            //                  // var orderids = document.getElementById("orderids{}").value;

            //                  $.ajax({
            //                       type:"get",
            //                       url:"my_user.php?act=order_tracking_news",
            //                       async:true,
            //                       data:{order_id:orderids},
            //                       dataType: "json",
            //                       success: function (result) {
            //                                  var content = "";
            //                                  var a ='';
            //                                  if(result.status == 200){  //成功
            //                                     var resultData = result.data;

            //                                            for(var i=resultData.length-1;i>=0;i--){

            //                                             if(i%2 == 0){
            //                                                  a = 'row bg-default';
            //                                                   content +='<div class="'+a+'" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">'+resultData[i].time.substring(0,10)+'</span><br><span style="font-size:22px; font-weight:bold;">'+resultData[i].time.substring(10,20)+'</span></div><div class="col-xs-1 hidden-xs" style="margin-top:10px;"></div><div class="col-xs-7" style="margin-top:10px;">'+resultData[i].context+'</div></div>';

            //                                               }else{
            //                                                 a = 'row';
            //                                                  content +='<div class="'+a+'" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">'+resultData[i].time.substring(0,10)+'</span><br><span style="font-size:22px; font-weight:bold;">'+resultData[i].time.substring(10,20)+'</span></div><div class="col-xs-1 hidden-xs" style="margin-top:10px;"></div><div class="col-xs-7" style="margin-top:10px;">'+resultData[i].context+'</div></div>';
            //                                               }



            //                                             }
            //                                   }else if(result.status == 400){  //失败
            //                                       alert("订单暂未发货，请稍后再来查询");
            //                                      }
            //                                       layer.open({
            //                                           title: [
            //                                             ''+result.shipping_name+':    '+result.invoice_no+'',

            //                                             'background-color:#77cde3; color:#fff;'
            //                                           ],
            //                                           content:content,
            //                                           btn: '我知道了',
            //                                           shadeClose: false,
            //                                               });

            //                             }//回调函数结束
            //                  });//ajax结束
            //   });//快递跟踪点击函数

            // });
              var exs = document.getElementById("expressmain");
              exs.style.display = "none";
              function func() {
                  if(exs.style.display == "block")
                      exs.style.display = "none";
                  else
                      exs.style.display = "block";
              }


  //管理地址
   $('#Address_Manager').click(function(){
    var content ='<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="收件人" /></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="手机" /></div>'
    +
    '<div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>省</option></select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>市</option></select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>区</option></select></div></div></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px;" placeholder="详细地址" /></div>';
    layer.open({
        title: [
          '编辑地址',
          'background-color:#77cde3; color:#fff;'
        ],
        content:content,
        btn: ['确认', '返回']
      });
      });


  </script>


  
  <script language="javascript">
  function checkLength(which) {
    iCount = which.value.replace(/[^\u0000-\u00ff]/g,"aa");
    which.size=iCount.length+1;
  }
 </script>
</body><!-- <body> -->

</html>
