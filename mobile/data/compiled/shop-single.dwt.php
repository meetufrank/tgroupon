<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>商品详情页</title>

  
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">
  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/hammer.min.js"></script>
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

    
    
     
   <?php echo $this->fetch('head.dwt'); ?>
  
    <section class="hero-slider">
      <div class="inner">
        <?php $_from = $this->_var['xiangce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xiangce_0_99573300_1487754325');if (count($_from)):
    foreach ($_from AS $this->_var['xiangce_0_99573300_1487754325']):
?>
            <div class="slide pc-thumbnail" style="background-image:url(../<?php echo $this->_var['xiangce_0_99573300_1487754325']['img_url']; ?>);"></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>





    </section>
    
    
    <section class="fw-section bg-gray padding-bottom-3x visible-lg visible-md">
      <input id="goodsid" type="hidden" value="<?php echo $this->_var['goods_id']; ?>">
      <div class="container pc-mobile-container">
        <div class="product-info padding-top-2x text-center">
          <h1 class="h2 space-bottom-half"><?php echo $this->_var['spnames']; ?></h1>
          <h2 class="hidden-xs" style="color:#E7322E;" id="pc_price">￥<?php echo $this->_var['sub_price']; ?></h2>
          
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
                              <span class="pc-company-name" style="float:left;"><?php echo $this->_var['spec']['name']; ?>:</span>  
                                <ul>
                                    
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                       <li>
                                            <a href="#" onclick="attrshuaixuan(<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>,<?php echo ($this->_foreach['name']['iteration'] - 1); ?>,0)" <?php if ($this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)] == $this->_var['value']['id']): ?>class="pc-group-detail pc-group-change"<?php else: ?>class="pc-group-detail"<?php endif; ?> id="type_<?php echo $this->_var['value']['id']; ?>" data-type="<?php echo $this->_var['value']['id']; ?>">
                                             <?php if ($this->_var['value']['attr_img']): ?>
<img src="<?php echo $this->_var['value']['attr_img']; ?>" title="<?php echo $this->_var['value']['label']; ?>">
                                            <?php else: ?>
                                                 <?php echo $this->_var['value']['label']; ?>
                                            <?php endif; ?>

                                        </a>
                                        </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                </ul>
                                <div class="clear"></div>
                            </div>


                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

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
                         <a href="#" class="add-to-cart-pay" onClick="addToCart(<?php echo $this->_var['goods_id']; ?>,0,0,0);" >
                                <em>放入购物车<?php echo $this->_var['data']; ?></em>
                         </a>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2"  style="padding-top:8px;min-height:48px;" >
                        <a href="#" class="add-to-cart" onClick="addToCart(<?php echo $this->_var['goods_id']; ?>,0,1,0);">
                            <em>立即支付</em>
                        </a>
                   </div>
                   <div class="col-lg-5 col-md-4 col-sm-4" style="padding-top:10px;min-height:48px;">
                     <span>收藏:</span><a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top"><i id="shochangpc" class="fa fa-heart <?php if ($this->_var['sczthongse']): ?>schongse<?php endif; ?>"></i></a>
                    <span>分享:</span><a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-wechat" id="fenxiang"></i></a>
                   </div>

                </div>
            </div>
        </div>
      </div>
    </section>
    
    <section class="mobile-detail visible-xs visible-sm">
      <div class="mobile-thumbnail col-xs-5" style="padding:20px;">
          <?php if ($this->_var['jiagedata']['attributeimg']): ?>
                 <img src="././admin/<?php echo $this->_var['jiagedata']['attributeimg']; ?>" id="Mobilethumbnail" class="mobile-thumbnail">
          <?php endif; ?>
        </div>
        <div class="col-xs-7">
            <div class="mobile-detail-1">
                <span class="mobile-shop-name col-xs-9" style=""><?php echo $this->_var['spnames']; ?></span><span class="sb-twitter aiheart col-xs-3">
                <i id="shochang"class="fa fa-heart <?php if ($this->_var['sczthongse']): ?>schongse<?php endif; ?>"></i></span>
            </div>
            <div class="clear"></div>
            <div class="mobile-shop-detail col-xs-12">
              <div class="mobile-shop-price col-xs-4" id="mobile_price">¥<?php echo $this->_var['sub_price']; ?></div>
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
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
              <input type="hidden" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)]; ?>" class="mobile_input">
                  <p class="mobile-cart-group-text mobile_name"><?php echo $this->_var['spec']['name']; ?></p>
                  <div class="mobile-cart-group type_arr mobile_div">
                      <ul class="mobile-cart-group-select mobile_li" id="mobile-groupbox">
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                               <li>
                                   <a onclick="attrshuaixuan(<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>,<?php echo ($this->_foreach['name']['iteration'] - 1); ?>,1)" href="#"  <?php if ($this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)] == $this->_var['value']['id']): ?>class="mobile-cart-border-details pc-group-change"
                                   <?php else: ?>
                                              class="mobile-cart-border-details"
                                        <?php endif; ?>
                                        id="mobiletype_<?php echo $this->_var['value']['id']; ?>"
                                        data-type="<?php echo $this->_var['value']['id']; ?>">

                                                  <?php if ($this->_var['value']['attr_img']): ?>
  <img src="<?php echo $this->_var['value']['attr_img']; ?>" title="<?php echo $this->_var['value']['label']; ?>">
                                              <?php else: ?>
                                                   <?php echo $this->_var['value']['label']; ?>
                                              <?php endif; ?>
                                   </a>
                               </li>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </ul>
                      <div class="clear"></div>
                  </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
            
           <?php $_from = $this->_var['spysj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spysj_0_99697800_1487754325');if (count($_from)):
    foreach ($_from AS $this->_var['spysj_0_99697800_1487754325']):
?>
                 <p>
                  <img src="..<?php echo $this->_var['spysj_0_99697800_1487754325']['hav_logo']; ?>" style="width:80px;height:80px;border:1px solid transparent;border-radius:50px; float:left;">
                  <span style="margin-top:20px;margin-left:15px; margin-right:15px;display:inline-block; font-size:16px; font-weight:blod;"><?php echo $this->_var['spysj_0_99697800_1487754325']['user_name']; ?></span>
                  <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
                  <span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:16px; font-weight:bloder;"><?php echo $this->_var['spysj_0_99697800_1487754325']['country']; ?></span>
                </p>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
                
                <?php $_from = $this->_var['goodsdesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goodsdesc_0_99711300_1487754325');if (count($_from)):
    foreach ($_from AS $this->_var['goodsdesc_0_99711300_1487754325']):
?>
                   <?php echo $this->_var['goodsdesc_0_99711300_1487754325']['goods_desc']; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
                

                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class="table-no-border">
                                <?php $_from = $this->_var['spguige']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spguige_0_99720500_1487754325');if (count($_from)):
    foreach ($_from AS $this->_var['spguige_0_99720500_1487754325']):
?>
                                  <tr class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pc-guige-class">
                                    <td class="tab-shopsingle"><?php echo $this->_var['spguige_0_99720500_1487754325']['attr_name']; ?>:</th>
                                    <td class="tab-shopsingle-right"><?php echo $this->_var['spguige_0_99720500_1487754325']['attr_value']; ?></td>
                                  </tr>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
        
        <?php $_from = $this->_var['xh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xh_0_99730400_1487754325');if (count($_from)):
    foreach ($_from AS $this->_var['xh_0_99730400_1487754325']):
?>
              <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=<?php echo $this->_var['xh_0_99730400_1487754325']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-link"></a>
                    <?php if ($this->_var['xh_0_99730400_1487754325']['attributeimg']): ?><img src="././admin/<?php echo $this->_var['xh_0_99730400_1487754325']['attributeimg']; ?>" alt="Shop item"><?php endif; ?>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xh_0_99730400_1487754325']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['xh_0_99730400_1487754325']['goods_name']; ?></a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥<?php echo $this->_var['xh_0_99730400_1487754325']['attributeprice']; ?>
                    </span>
                  </div>
                </div>
              </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </div>
    </section>

  
  <?php echo $this->fetch('foot.dwt'); ?>


    
    <div class="mobile-foot col-xs-12 hidden-sm hidden-md hidden-lg" style="position:fixed;bottom:0;padding:0px;">
    <div class="col-xs-6" style="padding:0px;">
          <a href="#" class="mobile-add-to-cart" onClick="addToCart(<?php echo $this->_var['goods_id']; ?>,0,0,1);" >
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay" onClick="addToCart(<?php echo $this->_var['goods_id']; ?>,0,1,1);" >
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
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/owl.carousel.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery.downCount.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/magnific-popup.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
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

  var data=<?php echo $this->_var['select']; ?>;


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
                                    url:"shop-single.php?act=attrshuaixuan<?php echo $this->_var['linestring2']; ?>",
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

window.__product__=<?php echo $this->_var['jiagedata']['product_number']; ?>;
window._shuxingimgs_="././admin/"+"<?php echo $this->_var['jiagedata']['attributeimg']; ?>";




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

<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/qrcode.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.qrcode.js"></script>
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
<?php if ($this->_var['come_add_cart']): ?>
<script type="text/javascript">
   <?php echo $this->_var['comestr']; ?>;
</script>
<?php endif; ?>


</body><!-- <body> -->

</html>
