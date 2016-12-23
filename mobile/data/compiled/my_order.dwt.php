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
      padding: 10px 18px;
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
     
      <ul class="nav-tabs" role="tablist">
        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">我的订单</a></li>
        <li><a href="#tab2" role="tab" data-toggle="tab">我的收藏</a></li>
        <li><a href="#tab3" role="tab" data-toggle="tab">消息记录</a></li>
        <li><a href="#tab4" role="tab" data-toggle="tab">管理地址</a></li>
        <li><a href="#tab5" role="tab" data-toggle="tab">商品销售</a></li>
      </ul>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane transition fade in active" id="tab1">
          

          <ul class="nav-pills" role="tablist">
            <li class="active"><a href="#tab1_1" role="tab" data-toggle="tab">待付款<span><?php echo $this->_var['record_count_no']; ?></span></a></li>
            <li><a href="#tab1_2" role="tab" data-toggle="tab">待发货<span><?php echo $this->_var['record_count_yes']; ?></span></a></li>
            <li><a href="#tab1_3" role="tab" data-toggle="tab">待收货<span><?php echo $this->_var['record_count_come']; ?></span></a></li>
          </ul>
          
          <div class="tab-content">

            <div role="tabpanel" class="tab-pane transition fade in active" id="tab1_1">
 <?php $_from = $this->_var['no_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'no');if (count($_from)):
    foreach ($_from AS $this->_var['no']):
?>
                    <div class="shopping-cart-1" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div class="clearfix" style=" border-bottom: 2px solid #ededed; margin-bottom:30px;">
                          <div class="pull-left" style="padding-top:10px;">订单编号:<?php echo $this->_var['no']['order_sn']; ?></div>
                            
                          <div class="pull-right hidden-xs hidden-sm">
                            <a href="#" class="btn btn-default waves-effect waves-light">取消订单</a>
                            <a href="flow.php?step=pay_ok&order_id=<?php echo $this->_var['no']['order_id']; ?>" class="btn btn-primary waves-effect waves-light">去支付</a>
                          </div>

                          </div>
                      <div class="row">
                          <div class="col-md-6">
                      
                    <?php $_from = $this->_var['no']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gl');if (count($_from)):
    foreach ($_from AS $this->_var['gl']):
?>
                      <div class="item">
                      <?php if ($this->_var['gl']['goods_thumb']): ?>
                        <a href="shop-single.html" class="item-thumb pull-left">
                          <img class="img-responsive" src="../<?php echo $this->_var['gl']['goods_thumb']; ?>" alt="Item">
                        </a>
                        <?php endif; ?>
                        <div class="item-details hidden-xs">
                          <h3 class="item-title"><a href=""><?php echo $this->_var['gl']['goods_name']; ?></a></h3>
                          <h4 class="item-price">数量：<?php echo $this->_var['gl']['goods_number']; ?></h4>
                          <h4 class="item-price"><?php echo $this->_var['gl']['goods_price']; ?></h4>
                        </div>
                        <div class="item-details visible-xs">
                          <h3 class="item-title"><a href="shop-single.html"><?php echo $this->_var['gl']['goods_name']; ?></a></h3>
                          <h4 class="item-price">数量：<?php echo $this->_var['gl']['goods_number']; ?></h4>
                          <h4 class="item-price"><?php echo $this->_var['gl']['subtotal']; ?></h4>
                        </div>
                         </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


                      
                      <div class="cart-subtotal space-bottom">
                        <div class="column">
                          <h3 class="toolbar-title">总价：</h3>
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
                        <a href="#" class="btn btn-default waves-effect waves-light">取消订单</a>
                        <a href="flow.php?step=pay_select&or_id=<?php echo $this->_var['no']['order_id']; ?>" class="btn btn-primary waves-effect waves-light">去支付</a>
                      </div>

                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  


              <div class="row padding-top" id="no_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="no_pay" >加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>


            </div>

            <div role="tabpanel" class="tab-pane transition fade" id="tab1_2">
            <?php $_from = $this->_var['ye_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ye');if (count($_from)):
    foreach ($_from AS $this->_var['ye']):
?>
              <div class="shopping-cart-1 padding-bottom-1x" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
                          订单编号：356666636329
                          </div>
                      <div class="row">
                          <div class="col-md-6">
                      
                      <?php $_from = $this->_var['ye']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'yg');if (count($_from)):
    foreach ($_from AS $this->_var['yg']):
?>
                      <div class="item">

                        <?php if ($this->_var['yg']['goods_thumb']): ?>
                        <a href="shop-single.html" class="item-thumb">
                          <img src="../<?php echo $this->_var['yg']['goods_thumb']; ?>" alt="Item">
                        </a>
                        <?php endif; ?>
                        <div class="item-details">
                          <h3 class="item-title"><a href="shop-single.html"><?php echo $this->_var['yg']['goods_name']; ?></a></h3>
                          <h4 class="item-price">数量：<?php echo $this->_var['yg']['goods_number']; ?> </h4>
                          <h4 class="item-price"><?php echo $this->_var['yg']['subtotal']; ?></h4>
                        </div>
                      </div>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      
                      <div class="cart-subtotal space-bottom">
                        <div class="column">
                          <h3 class="toolbar-title">总价：</h3>
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
                    <div class="row padding-top" id="yes_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="yes_pay">加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>

            </div>

            <div role="tabpanel" class="tab-pane transition fade" id="tab1_3">
            <?php $_from = $this->_var['come_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'co');if (count($_from)):
    foreach ($_from AS $this->_var['co']):
?>
              <div class="shopping-cart-1 padding-bottom-1x" style=" border: 2px solid #ededed; padding:15px; margin-bottom: 30px;">
                        <div style=" border-bottom: 2px solid #ededed; margin-bottom:30px;padding-bottom: 18px; ">
                          订单编号：356666636329
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                      
                      <?php $_from = $this->_var['co']['good_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cg');if (count($_from)):
    foreach ($_from AS $this->_var['cg']):
?>
                      <div class="item">

                        <?php if ($this->_var['cg']['goods_thumb']): ?>
                        <a href="shop-single.html" class="item-thumb">
                          <img src="../<?php echo $this->_var['cg']['goods_thumb']; ?>" alt="Item">
                        </a>
                        <?php endif; ?>
                        <div class="item-details">
                          <h3 class="item-title"><a href="shop-single.html"><?php echo $this->_var['cg']['goods_name']; ?></a></h3>
                          <h4 class="item-price">数量：<?php echo $this->_var['cg']['goods_number']; ?> </h4>
                          <h4 class="item-price"><?php echo $this->_var['cg']['subtotal']; ?></h4>
                        </div>
                      </div>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                      
                      <div class="cart-subtotal space-bottom">
                        <div class="column">
                          <h3 class="toolbar-title">总价：</h3>
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
                  <a id="Logistics" class="btn btn-primary" href="#">快递跟踪</a>
                      </div>
                      </div>
                      </div>
                      <!-- Buttons
                      <div class="text-right">
                        <a href="#" class="btn btn-default waves-effect waves-light">取消订单</a>
                        <a href="#" class="btn btn-primary waves-effect waves-light">去支付</a>
                      </div>
                      -->

                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <div class="row padding-top" id="come_more">
                  <div class="text-center padding-bottom-2x">
                    <a href="#" class="btn btn-primary waves-effect waves-light" id="come_pay">加载更多</a>
                    <br>
                    <a><i class="material-icons arrow_downward"></i></a>
                  </div>
              </div>

            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="tab2">
          
          <ul class="nav-pills" role="tablist">
            <li class="active"><a href="#tab2_1" role="tab" data-toggle="tab">收藏的单品<span>5</span></a></li>
            <li><a href="#tab2_2" role="tab" data-toggle="tab">收藏的艺术家<span>2</span></a></li>
          </ul>
          
          <div id="btn-sm" class="tab-content">
            <div role="tabpanel" class="tab-pane transition fade in active" id="tab2_1">
              <div class="row">
                <div class="col-md-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.html" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th02.jpg" alt="Shop item">
              <div class="shop-item-tools">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
                  <i class="material-icons close"></i>
                </a>
              </div>
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title text-center"><a href="#">产品名称</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.html" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th02.jpg" alt="Shop item">
              <div class="shop-item-tools">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
                  <i class="material-icons close"></i>
                </a>
              </div>
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title text-center"><a href="#">产品名称</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.html" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th02.jpg" alt="Shop item">
              <div class="shop-item-tools">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
                  <i class="material-icons close"></i>
                </a>
              </div>
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title text-center"><a href="#">产品名称</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.html" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th02.jpg" alt="Shop item">
              <div class="shop-item-tools">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
                  <i class="material-icons close"></i>
                </a>
              </div>
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title text-center"><a href="#">产品名称</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.html" class="item-link"></a>
              <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/th02.jpg" alt="Shop item">
              <div class="shop-item-tools">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
                  <i class="material-icons close"></i>
                </a>
              </div>
            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title text-center"><a href="#">产品名称</a></h3>
            </div>
          </div>
        </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane transition fade" id="tab2_2">
              <div id="btn-sm" class="row">
                <div class="col-md-2 col-sm-3">
                  <div class="teammate">
                    <div class="teammate-thumb">
                      <div class="social-bar text-right space-bottom">
                        <a href="#" class="btn btn-square btn-sm btn-primary waves-effect waves-light"><i class="material-icons close"></i></a>
                      </div>
                      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/team/01.jpg" alt="">
                    </div>
                    <h4 class="teammate-name"><a href="#">艺术家姓名</a></h4>
                  </div>
                </div>
                <div class="col-md-2 col-sm-3">
                  <div class="teammate">
                    <div class="teammate-thumb">
                      <div class="social-bar text-right space-bottom">
                        <a href="#" class="btn btn-square btn-sm btn-primary waves-effect waves-light"><i class="material-icons close"></i></a>
                      </div>
                      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/team/01.jpg" alt="">
                    </div>
                    <h4 class="teammate-name"><a href="#">艺术家姓名</a></h4>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="tab3">
          
          <ul class="nav-pills" role="tablist">
            <li class="active"><a href="#tab3_1" role="tab" data-toggle="tab">未读消息<span>12</span></a></li>
            <li><a href="#tab3_2" role="tab" data-toggle="tab">已读消息<span>1</span></a></li>
          </ul>
          
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane transition fade in active" id="tab3_1">
              <ul class="list_msgs">
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
              </ul>
              
          <div class="layui-box layui-laypage layui-laypage-default">
            <span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span>
            <a href="javascript:;" data-page="2">2</a>
            <a href="javascript:;" data-page="3">3</a>
            <a href="javascript:;" data-page="4">4</a>
            <a href="javascript:;" data-page="5">5</a>
            <span>…</span>
            <a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">末页</a>
            <a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a>
          </div>
            </div>
            <div role="tabpanel" class="tab-pane transition fade in" id="tab3_2">
              <ul class="list_msgs">
                <li><a class="pull-right" href="#"><i class="material-icons close"></i></a><a href="#">达芬奇绘画艺术作品已开单</a></li>
              </ul>
            </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="tab4">
    
        <div class="shop-item">
                <div class="shop-thumbnail">
                  <form name=”form” method=”post” action=”#” id="form0">
                        <div style="padding:18px;" id="shouhuo">
                                <p>收件人:<span>里默默</span></p>
                                <p>手机号:<span>18954781245</span></p>
                                <p style="float:left">地&nbsp;&nbsp;&nbsp;址:</p>
                                <p><span class="mobile-address">上海市五角场黄兴路100号1号楼102室</span></p>
                        </div>
                        <div id="btn-sm" class="shop-item-tools">
                            <a href="#" class="btn btn-primary btn-sm"><i class="material-icons close"></i></a>
                         </div>
                         <div class="pull-right"><a id="Address_Manager" href="#" class="btn btn-default btn-sm">编辑</a></div>
                    </form>
                </div>
          </div>
          
          
        <div class="shop-item">
                <div class="shop-thumbnail">
                  <form name=”form” method=”post” action=”#” id="form0">
                        <div style="padding:18px;" id="shouhuo">
                                <p>收件人:<span>里默默</span></p>
                                <p>手机号:<span>18954781245</span></p>
                                <p style="float:left">地&nbsp;&nbsp;&nbsp;址:</p>
                                <p><span class="mobile-address">上海市五角场黄兴路100号1号楼102室</span></p>
                        </div>
                        <div id="btn-sm" class="shop-item-tools">
                            <a href="#" class="btn btn-primary btn-sm"><i class="material-icons close"></i></a>
                         </div>
                         <div class="pull-right"><a href="#" class="btn btn-default btn-sm">编辑</a></div>
                    </form>
                </div>
          </div>
          
          
        <div class="shop-item">
                <div class="shop-thumbnail">
                  <form name=”form” method=”post” action=”#” id="form0">
                        <div style="padding:18px;" id="shouhuo">
                                <p>收件人:<span>里默默</span></p>
                                <p>手机号:<span>18954781245</span></p>
                                <p style="float:left">地&nbsp;&nbsp;&nbsp;址:</p>
                                <p><span class="mobile-address">上海市五角场黄兴路100号1号楼102室</span></p>
                        </div>
                        <div id="btn-sm" class="shop-item-tools">
                            <a href="#" class="btn btn-primary btn-sm"><i class="material-icons close"></i></a>
                         </div>
                         <div class="pull-right"><a href="#" class="btn btn-default btn-sm">编辑</a></div>
                    </form>
                </div>
          </div>
          
          <div class="text-right">
              <a href="#" class="btn btn-primary waves-effect waves-light">添加地址</a>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="tab5">
          
          <ul class="nav-pills" role="tablist">
            <li class="active"><a href="#tab5_1" role="tab" data-toggle="tab">空间主</a></li>
          </ul>
          
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane transition fade in active" id="tab5_1">
              <div class="row">
              <div class="col-md-12 clearfix">
                <div class="pull-left">可提现：</div>
                <div class="pull-right" style="margin-top: -13px;">
                  <span style="color:#f20000">300元</span>&nbsp;&nbsp;
                  <a id="Apply_Cash" class="btn btn-primary btn-sm">申请提现</a>
                </div>
              </div>
              <div class="col-md-12 clearfix">
                <div class="pull-left">提现总额：</div>
                <div class="pull-right" style="margin-top: -13px;">
                  <span style="color:#f20000">300元</span>&nbsp;&nbsp;
                  <a id="Apply_Record" class="btn btn-primary btn-sm" href="#">提现记录</a>
                </div>
              </div>
              </div>
              <hr>
              <table class="table">
            <thead>
              <tr>
                <th>成单时间</th>
                <th>产品名称</th>
                <th>产品提现</th>
                <th>销售提成</th>
              </tr>
              </thead>
            <tbody>
              <tr>
                <td>2016-11-11&nbsp;&nbsp;16:30:00</td>
                <td>用户购买创意台灯</td>
                <td>获得9元</td>
                <td>获得1元</td>
              </tr>
              <tr>
                <td>2016-11-11&nbsp;&nbsp;16:30:00</td>
                <td>用户购买创意台灯</td>
                <td>获得9元</td>
                <td>获得1元</td>
              </tr>
              <tr>
                <td>2016-11-11&nbsp;&nbsp;16:30:00</td>
                <td>用户购买创意台灯</td>
                <td></td>
                <td>获得1元</td>
              </tr>
              <tr>
                <td>2016-11-11&nbsp;&nbsp;16:30:00</td>
                <td>用户购买创意台灯</td>
                <td></td>
                <td>获得1元</td>
              </tr>
              <tr>
                <td>2016-11-11&nbsp;&nbsp;16:30:00</td>
                <td>用户购买创意台灯</td>
                <td></td>
                <td>获得1元</td>
              </tr>
             </tbody>
              </table>

              
          <div class="layui-box layui-laypage layui-laypage-default">
            <span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span>
            <a href="javascript:;" data-page="2">2</a>
            <a href="javascript:;" data-page="3">3</a>
            <a href="javascript:;" data-page="4">4</a>
            <a href="javascript:;" data-page="5">5</a>
            <span>…</span>
            <a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">末页</a>
            <a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a>
          </div>

            </div>
            </div>
        </div>
      </div>
      </section>

    <footer class="footer">
      <div class="column">
        <div class="feature text-center">
          <a href="#">
            <div class="feature-icon" style="margin-bottom:0px;">
              <i class="material-icons credit_card"></i>
            </div>
            <div>
        <a id="Cooperate" class="btn btn-default" style="font-size:16px;" href="javascript:;">与我们合作</a>
      </div>
            </a>
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
  </div>

  

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
  

 <script type="text/javascript">
                var no_num=1;  //未付款初始化页数
                var yes_num=1;  //未付款初始化页数
                var come_num=1;  //未付款初始化页数
                             $("#no_pay").click(function(event) {
                                        $.ajax({
                                                url:"my_user.php?act=async_order_list",
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
                                                url:"my_user.php?act=async_order_list",
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
                                                url:"my_user.php?act=async_order_list",
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
              </script>
  <script>
  //申请提现
   $('#Apply_Cash').click(function(){
    var content ='<div>您的申请已发送给管理员，我们会在2个工作日内审核你的提现要求，</div>'+'<div>请注意查看提现记录中的反馈信息</div>';
    layer.open({
        content:content,
        style:'text-align:center',
        btn: ['提交', '取消'],
        shadeClose: false
      });
      });

  //提现记录
   $('#Apply_Record').click(function(){
    var content ='<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty拒绝了你的提现申请，理由：未满提现额度</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div>2016.11.3 &nbsp;&nbsp;管理员Kitty同意了你的提现申请，本次提现金额为：300元</div>'+'<div style="padding-top:20px;">&nbsp;</div>'+'<div><div class="layui-box layui-laypage layui-laypage-default"><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span>…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">末页</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>';
    layer.open({
        title: [
          '已提现：300元',
          'background-color:#77cde3; color:#fff;'
        ],
        content:content,
        btn: '我知道了',
        shadeClose: false,
      });
      });

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
  $('#Logistics').click(function(){
    var content ='<div class="row bg-default" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">2016-10-25</span><br><span style="font-size:22px; font-weight:bold;">19:03</span></div><div class="col-xs-1 hidden-xs" style="margin-top:10px;">●</div><div class="col-xs-7" style="margin-top:10px;">顺丰速运 &nbsp;已收取快件</div></div>'
    +
    '<div class="row" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">2016-10-25</span><br><span style="font-size:22px; font-weight:bold;">19:03</span></div><div class="col-xs-1 hidden-xs"  style="margin-top:10px;">●</div><div class="col-xs-7" style="margin-top:10px;">顺丰速运 &nbsp;已收取快件已收取快件</div></div>'
    +
    '<div class="row bg-default" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">2016-10-25</span><br><span style="font-size:22px; font-weight:bold;">19:03</span></div><div class="col-xs-1 hidden-xs"  style="margin-top:10px;">●</div><div class="col-xs-7" style="margin-top:10px; line-height:18px;">顺丰速运 &nbsp;已收取快件已收取快件已收取快件已收取快件已收取快件</div></div>'
    +
    '<div class="row" style="padding:6px 0;"><div class="col-xs-2"><span style="font-size:10px;">2016-10-25</span><br><span style="font-size:22px; font-weight:bold;">19:03</span></div><div class="col-xs-1 hidden-xs"  style="margin-top:10px;">●</div><div class="col-xs-7" style="margin-top:10px; line-height:18px;">顺丰速运 &nbsp;已收取快件已收取快件已收取快件已收取快件已收取快件</div></div>'
    +
    '<div class="row bg-default" style="padding:6px 0; color:#f20000;"><div class="col-xs-2"><span style="font-size:10px;">2016-10-25</span><br><span style="font-size:22px; font-weight:bold;">19:03</span></div><div class="col-xs-1 hidden-xs"  style="margin-top:12px;"><i class="material-icons done" style="border:1px solid #ef0568; border-radius:50%; padding:2px;"></i></div><div class="col-xs-7" style="margin-top:12px; line-height:18px;">已签收，感谢使用顺丰快递，期待再次为您服务！</div></div>'
    ;
    layer.open({
        title: [
          '跟踪包裹',
          'background-color:#77cde3; color:#fff;'
        ],
        content:content,
        btn: '我知道了',
        shadeClose: false,
      });
      });

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

  
  <script language="javascript">
  function checkLength(which) {
    iCount = which.value.replace(/[^\u0000-\u00ff]/g,"aa");
    which.size=iCount.length+1;
  }
 </script>
</body><!-- <body> -->

</html>
