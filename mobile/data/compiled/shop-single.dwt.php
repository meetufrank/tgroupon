<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>商品详情页-NEW</title>

  
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>

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
		height:50px;
		margin-bottom:5px;
	}
	.tab-shopsingle-right{
		display:block;
		float:left;
		max-width:75%;
		min-width:75%;
		height:50px;
		margin-bottom:5px;
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
    min-width:60px;
    height:30px;
    background-color:rgb(179,179,179);
    border:2px rgb(179,179,179) solid;
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
     background-color:rgb(52,52,52);

    border-radius:1px;
    color:white;
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
    border:1px dashed black;
  }
  </style>


</head>


<body class="page-preloading">

  
  <div class="page-preloader">
    <div class="preloader">
      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/preloader.gif" alt="Preloader">
    </div>
  </div>

  
  <div class="page-wrapper">

    
    
     
   <?php echo $this->fetch('head.dwt'); ?>
  
    <section class="hero-slider">
      <div class="inner">
        <?php $_from = $this->_var['xiangce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xiangce_0_54467800_1484103221');if (count($_from)):
    foreach ($_from AS $this->_var['xiangce_0_54467800_1484103221']):
?>
            <div class="slide pc-thumbnail" style="background-image:url(../<?php echo $this->_var['xiangce_0_54467800_1484103221']['img_url']; ?>);"></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>





    </section>
    
    
    <section class="fw-section bg-gray padding-bottom-3x visible-lg visible-md">
      <input id="goodsid" type="hidden" value="<?php echo $this->_var['goods_id']; ?>">
      <div class="container">
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
                              <span style="float:left; margin-top:5px;"><?php echo $this->_var['spec']['name']; ?>:</span>  
                                <ul>
                                    
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                       <li>
                                            <a href="#" onclick="attrshuaixuan(<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>,<?php echo ($this->_foreach['name']['iteration'] - 1); ?>,0)" <?php if ($this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)] == $this->_var['value']['id']): ?>class="pc-group-detail pc-group-change"<?php else: ?>class="pc-group-detail"<?php endif; ?> id="type_<?php echo $this->_var['value']['id']; ?>" data-type="<?php echo $this->_var['value']['id']; ?>">
                                            <?php if ($this->_var['value']['attrimg']): ?>
                                                <img src="<?php echo $this->_var['value']['attrimg']; ?>">
                                            <?php else: ?>
                                                 <?php echo $this->_var['value']['label']; ?>

                                            <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </form>
                </div>
                <div class="pc-dright-bottom">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                      <div class="count-input">
                          <a class="incr-btn" onclick="numDec()" data-action="decrease" href="#">–</a>
                          <input class="quantity" id="quantity" type="text" value="1">
                          <a class="incr-btn" onclick="numAdd()" data-action="increase" href="#">+</a>
                    </div>
                    </div>
                  <div class="col-lg-3 col-md-3 col-sm-3" style="padding-top:8px;min-height:48px;">
                         <a href="#" class="add-to-cart-pay">
                                <em>放入购物车<?php echo $this->_var['data']; ?></em>
                         </a>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2" style="padding-top:8px;min-height:48px;">
                        <a href="#" class="add-to-cart">
                            <em>立即支付</em>
                        </a>
                   </div>
                   <div class="col-lg-5 col-md-4 col-sm-4" style="padding-top:10px;min-height:48px;">
                     <span>收藏:</span><a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top"><i id="shochangpc" class="fa fa-heart"></i></a>
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
                <span class="mobile-shop-name col-xs-9" style=""><?php echo $this->_var['spnames']; ?></span><span class="sb-twitter col-xs-3">
                <i id="shochang"class="fa fa-heart"></i></span>
            </div>
            <div class="clear"></div>
            <div class="mobile-shop-detail col-xs-12">
              <div class="mobile-shop-price col-xs-5" id="mobile_price">¥<?php echo $this->_var['sub_price']; ?></div>
                <div class="col-xs-7">
                    <div class="mobile-count-input">
                         <a class="mobile-incr-btn" onclick="numDecmobile()" href="#">–</a>
                         <input class="mobile-quantity" id="quantitymobile" type="text" value="1">
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
            <input type="hidden" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['checked_arr'][($this->_foreach['name']['iteration'] - 1)]; ?>" >
                <p class="mobile-cart-group-text"><?php echo $this->_var['spec']['name']; ?></p>
                <div class="mobile-cart-group type_arr">
                    <ul class="mobile-cart-group-select" id="mobile-groupbox">
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

                                               <?php echo $this->_var['value']['label']; ?>

                                        <img src="<?php echo $this->_var['value']['attr_img']; ?>">
                                 </a>
                             </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </form>

    </section>
    <div class="clear"></div>
  
    <section class="container padding-top">
    <div class="row">
       <div class="artist-lf col-lg-6 col-md-6 col-sm-6">
            
           <?php $_from = $this->_var['spysj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spysj_0_55010400_1484103221');if (count($_from)):
    foreach ($_from AS $this->_var['spysj_0_55010400_1484103221']):
?>
                 <p>
                  <img src="<?php echo $this->_var['spysj_0_55010400_1484103221']['hav_logo']; ?>" style="width:80px;height:80px;border:1px solid transparent;border-radius:50px; float:left;">
                  <span style="margin-top:20px;margin-left:15px; margin-right:15px;display:inline-block; font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_55010400_1484103221']['user_name']; ?></span>
                  <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shugang.png" style="display:inline-block; width:1px; height:30px;">
                  <span style="margin-top:15px;margin-left:15px;display:inline-block;font-size:20px; font-weight:blod;"><?php echo $this->_var['spysj_0_55010400_1484103221']['country']; ?></span>
                </p>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
    </div>
    </section>
    
    <section class="container">
      
      <ul class="nav-tabs text-center" role="tablist">
        <li class="active"><a href="#description" role="tab" data-toggle="tab">产品介绍</a></li>
        <li><a href="#additional" role="tab" data-toggle="tab">商品规格</a></li>
      </ul>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane transition fade in active" id="description">
          <div class="row space-top">
            <div class="space-bottom" id="xiangqiangimg">
                
                <?php $_from = $this->_var['goodsdesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goodsdesc_0_55078000_1484103221');if (count($_from)):
    foreach ($_from AS $this->_var['goodsdesc_0_55078000_1484103221']):
?>
                   <?php echo $this->_var['goodsdesc_0_55078000_1484103221']['goods_desc']; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane transition fade" id="additional">
          <div class="row">
                
                <?php $_from = $this->_var['spguige']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spguige_0_55116400_1484103221');if (count($_from)):
    foreach ($_from AS $this->_var['spguige_0_55116400_1484103221']):
?>
                          <div class="col-md-6">
                            <table class="table-no-border">
                              <tr>
                                <td class="tab-shopsingle"><?php echo $this->_var['spguige_0_55116400_1484103221']['attr_name']; ?>:</th>
                                <td class="tab-shopsingle-right"><?php echo $this->_var['spguige_0_55116400_1484103221']['attr_value']; ?></td>
                              </tr>
                            </table>
                          </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

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
        
        <?php $_from = $this->_var['xh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xh_0_55157600_1484103221');if (count($_from)):
    foreach ($_from AS $this->_var['xh_0_55157600_1484103221']):
?>
              <div class="col-lg-3 col-sm-6 mobile-indent">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.php?id=<?php echo $this->_var['xh_0_55157600_1484103221']['goods_id']; ?>" class="item-link"></a>
                    <?php if ($this->_var['xh_0_55157600_1484103221']['attributeimg']): ?><img src="././admin/<?php echo $this->_var['xh_0_55157600_1484103221']['attributeimg']; ?>" alt="Shop item"><?php endif; ?>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xh_0_55157600_1484103221']['goods_id']; ?>"><?php echo $this->_var['xh_0_55157600_1484103221']['goods_name']; ?></a></h3>
                    <span class="shop-item-price">
                      <span class="old-price"></span>
                      ￥<?php echo $this->_var['xh_0_55157600_1484103221']['attributeprice']; ?>
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
          <a href="#" class="mobile-add-to-cart">
              放入购物车
            </a>
        </div>
        <div class="col-xs-6" style="padding:0px;">
         <a href="#" class="mobile-add-to-cart-pay">
              立即支付
         </a>
        </div>
    </div>
  </div>


  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
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

    <script type="text/javascript">
$(function(){
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

        $("#type_"+attrid).parent().siblings('li').children('a').removeClass('pc-group-change');
        $("#mobiletype_"+attrid).parent().siblings('li').children('a').removeClass('pc-group-change');  //手机
        $("#type_"+attrid).addClass("pc-group-change");
        $("#mobiletype_"+attrid).addClass("pc-group-change");     //手机
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
                                    data:{attrid:attrid,typenum:typenum,spec_arr:spec_arr,typeid:typeid},
                                    dataType: "json",
                                    success: function (data) {
                                      console.log(data);
                                      if(data.error==1){
                                        alert('未找到该商品!');
                                        window.location.href=window.location.href;
                                        return;
                                      }
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
                                          $("#type_"+data.checked[i]).removeAttr("onclick");
                                          $("#mobiletype_"+data.checked[i]).removeAttr("onclick");
                                          $("#type_"+data.checked[i]).parent().siblings('li').children('a').removeClass('pc-group-change');
                                           $("#mobiletype_"+data.checked[i]).parent().siblings('li').children('a').removeClass('pc-group-change');    //手机
                                          $("#type_"+data.checked[i]).addClass("pc-group-change");
                                          $("#mobiletype_"+data.checked[i]).addClass("pc-group-change");    //手机
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
        alert("商品库存不足"+__product__);
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
        alert("商品库存不足"+__product__);
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
            this.style.color = '';
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
    oDivpc.onclick=function(){


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
            this.style.color = '';
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

      var content= '<img src="<?php echo $this->_var['ectouch_themes']; ?>/img/shop/product-gallery/preview03.jpg">';
      layer.open({
        closeBtn: 0,
        title: false,
        type: 1,
        content: content,
        style:'width:80%;'
      });
    });
  })
</script>

</body><!-- <body> -->

</html>
