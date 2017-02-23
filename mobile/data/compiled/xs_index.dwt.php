<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>形色主义首页</title>

  
  <meta name="description" content="COLOR & SHAPE" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>

  
  <style>
  	@media screen and (min-width:768px){
	  .info-box{
		margin-top:70px;
		}
	}
	@media (min-width: 1200px){
		.container {
			width:1300px;
		}
	}
  	 .count{
  	 	position: absolute;
		display: block;
		width: 16px;
		height: 16px;
		line-height: 16px;
		font-size: 12px;
		color: #fff;
		text-align: center;
		border-radius: 50%;
		background-color: #77cde3;
		top: -2px;
		right: -17px;
  	 }
	.teammate-thumb{
		border-radius: 50%;
	}
	.teammate-name a{
		text-decoration:none;
		color:#999;
	}
	.teammate-name a:hover{
		color:#333;
	}
	.checkbox{
		padding-left: 8px;
		padding-bottom:10px;
	}
	.img-Currentsize{
		max-width:85%;
		display:inline-block;
	}
	.owl-nav{
		display:none
	}
	.teammate {
		width: 90%;
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
    

    
    <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000">
      <div class="inner">
      <?php $_from = $this->_var['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bl');if (count($_from)):
    foreach ($_from AS $this->_var['bl']):
?>
         <a href="<?php echo $this->_var['bl']['ad_link']; ?>" >
        <div class="slide" style="background-image: url(<?php echo $this->_var['bl']['ad_code']; ?>);">
        </a>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </div>
    </section>

	
	<section class="container-fluid padding-top-3x">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<ul class="nav-tabs" role="tablist" style="border-bottom: none;">
		            <li class="active"><a href="#products" role="tab" data-toggle="tab">商品</a></li>
		            <li><a href="#designers" role="tab" data-toggle="tab">设计师</a></li>
		          </ul>
				<div class="tab-content" style="padding-top:0px; min-height: auto; margin-top: -10px;">
					<div id="products" class="tab-pane transition fade scale active in">
						<div class="row space-top-half">
						<div class="col-xs-10" style="padding-left: 1px; padding-right: 0;">
							<input type="text" class="form-control" placeholder="请在此处搜索您想要的商品" onfocus="this.placeholder=''" onblur="this.placeholder='请在此处搜索您想要的商品'" id="goods_content">
						</div>
						<div class="col-xs-2" style="padding-left: 1px; margin-top:-10px;">
				          	<button class="btn btn-default" type="button" id="goods_search">
			                  <i class="material-icons search"></i>
			                </button>
						</div>
						</div>
					</div>
					<div id="designers" class="tab-pane transition fade scale">
						<div class="row space-top-half">
						<div class="col-xs-10" style="padding-left: 1px; padding-right: 0;">
							<input type="text" class="form-control" placeholder="请在此处搜索您要找的设计师" onfocus="this.placeholder=''" onblur="this.placeholder='请在此处搜索您要找的设计师'">
						</div>
						<div class="col-xs-2" style="padding-left: 1px; margin-top:-10px;">
				          	<button class="btn btn-default" type="submit">
			                  <i class="material-icons search"></i>
			                </button>
						</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
<script type="text/javascript">
   $("#goods_search").click(function(){
       var content=$("#goods_content").val();
       var search='showsearch';
        $.ajax({
           type: "post",
           url: "set_content.php",
           data:{typeid:content,type:search},
           success: function (data) {

            window.location.href="goods_list.php<?php echo $this->_var['linestring1']; ?>";
          }
     });
   });
 function  drump_type(id){
      var  type='showtype';
           $.ajax({
           type: "post",
           url: "set_content.php",
           data:{typeid:id,type:type},
           success: function (data) {

            window.location.href="goods_list.php<?php echo $this->_var['linestring1']; ?>";
          }
        });
   }
</script>
    
    <section class="container-fluid padding-top-3x">

      
      <h3 class="text-center padding-top">商品分类</h3>
      <div class="row padding-top padding-bottom-3x">
       <?php $_from = $this->_var['type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tl');if (count($_from)):
    foreach ($_from AS $this->_var['tl']):
?>
        <div class="col-md-2 col-sm-4 col-xs-6 " >
          <a href="#" class="category-link" onclick="drump_type(<?php echo $this->_var['tl']['cat_id']; ?>);">
            <img src="data/cat_ico/<?php echo $this->_var['tl']['cat_ico']; ?>" alt="<?php echo $this->_var['tl']['cat_name']; ?>">
            <?php echo $this->_var['tl']['cat_name']; ?>
          </a>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        <?php if ($this->_var['type_hide'] == 1): ?>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <a href="goods_list.php<?php echo $this->_var['linestring1']; ?>" class="category-link">
            <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/categories/more.jpg" alt="Category">
            更多
          </a>
        </div>
        <?php endif; ?>
      </div>

      <div class="row padding-top">

        
        <div class="col-lg-3 col-md-4">
          <a href="shop-single.php?id=<?php echo $this->_var['tb_list']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">
          <div class="info-box text-center" style="background-image:url(././admin/<?php echo $this->_var['tb_list']['goods_img']; ?>);-moz-background-size:100% 100%;
   background-size:100% 100%;background-repeat: no-repeat">
            <h2>特别优惠<br><span class="text-danger">-<?php echo $this->_var['tb_list']['priceratio']; ?>%</span></h2>
            <a href="shop-single.php?id=<?php echo $this->_var['tb_list']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>">

            </a>
            <h3 class="lead text-normal space-bottom-half"><a href="shop-single.php?id=<?php echo $this->_var['tb_list']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="link-title"><?php echo $this->_var['tb_list']['goods_name']; ?></a></h3>
            <span class="lead text-normal text-gray text-crossed">￥<?php echo $this->_var['tb_list']['falseprice']; ?></span>
            <span class="h4 text-normal text-danger">￥<?php echo $this->_var['tb_list']['attributeprice']; ?></span>

          </div>
          </a>
          <div class="padding-bottom-2x visible-xs"></div>
        </div>

        
        <div class="col-lg-9 col-md-8">
          
          <ul class="nav-tabs text-center" role="tablist">
            <li class="active"><a href="#newcomers" role="tab" data-toggle="tab">新品上架</a></li>
            <li><a href="#toprated" role="tab" data-toggle="tab">折扣优惠</a></li>
          </ul>

          
          <div class="tab-content">

            
            <div role="tabpanel" class="tab-pane transition fade scale in active" id="newcomers">
              <div class="row space-top-half">
              <?php $_from = $this->_var['xp_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xl');if (count($_from)):
    foreach ($_from AS $this->_var['xl']):
?>
                <div class="col-lg-3 col-md-2 col-sm-2 col-sm-6">
                  <div class="shop-item">
                    <div class="shop-thumbnail">
                      <!-- <span class="shop-label text-danger">Sale</span> -->
                      <a href="shop-single.php?id=<?php echo $this->_var['xl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-link"></a>
                      <img src="././admin/<?php echo $this->_var['xl']['attributeimg']; ?>" alt="<?php echo $this->_var['xl']['goods_name']; ?>">
                    </div>
                    <div class="shop-item-details">
                      <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['xl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['xl']['goods_name']; ?></a></h3>
                      <span class="shop-item-price">
                        ￥<?php echo $this->_var['xl']['attributeprice']; ?>
                      </span>
                    </div>
                  </div>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

              </div>
            </div>

            
            <div role="tabpanel" class="tab-pane transition fade scale" id="toprated">
              <div class="row">
               <?php $_from = $this->_var['dz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'dl');if (count($_from)):
    foreach ($_from AS $this->_var['dl']):
?>
              <div class="col-lg-3 col-sm-6">
                  <div class="shop-item">
                    <div class="shop-thumbnail">
                      <!-- <span class="shop-label text-danger">Sale</span> -->
                      <a href="shop-single.php?id=<?php echo $this->_var['dl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-link"></a>
                      <img src="././admin/<?php echo $this->_var['dl']['attributeimg']; ?>" alt="<?php echo $this->_var['dl']['goods_name']; ?>">
                    </div>
                    <div class="shop-item-details">
                      <h3 class="shop-item-title"><a href="shop-single.php?id=<?php echo $this->_var['dl']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['dl']['goods_name']; ?></a></h3>
                      <span class="shop-item-price">
                        ￥<?php echo $this->_var['dl']['attributeprice']; ?>
                      </span>
                    </div>
                  </div>
                </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    
    <section class="container padding-top-2x padding-bottom">
      <hr>
      <h3 class="text-center">设计师介绍</h3>
      <div class="row padding-top">
      <?php $_from = $this->_var['ysj_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'yl');if (count($_from)):
    foreach ($_from AS $this->_var['yl']):
?>
         <div class="col-xs-6 col-md-2">
         <div class="teammate">
            <div class="teammate-thumb">
              <div class="social-bar text-center space-bottom">
                <a href="artist-detail.html" class="btn btn-square btn-sm btn-primary waves-effect waves-light">了解设计师</a>
              </div>
              <img src="..<?php echo $this->_var['yl']['hav_logo']; ?>" alt="" class="img-Currentsize">
            </div>
            <h4 class="teammate-name"><a href="#"><?php echo $this->_var['yl']['user_name']; ?></a></h4>
          </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php if ($this->_var['ysj_hide'] == 1): ?>
         <div class="col-xs-6 col-md-2">
         <div class="teammate">
            <div class="teammate-thumb">
              <a href="artist-list.html"><img src="<?php echo $this->_var['ectouch_themes']; ?>/img/team/more.jpg" alt="" class="img-Currentsize"></a>
            </div>
            <h4 class="teammate-name"><a href="#">更多</a></h4>
          </div>
          </div>
          <?php endif; ?>
      </div>

    </section>

    
    <div class="fw-section space-top-2x padding-top-3x padding-bottom-3x" style="background-image: url(<?php echo $this->_var['ectouch_themes']; ?>/img/video_bg.jpg);">
      <div class="container padding-top-3x padding-bottom-3x text-center">
        <div class="space-top-3x space-bottom">
          
          <a href="https://player.vimeo.com/video/135832597?color=77cde3&title=0&byline=0&portrait=0" class="video-popup-btn">
            <i class="material-icons play_arrow"></i>
          </a>
        </div>
        <p class="space-bottom-2x">型色主义—可信赖的合作伙伴！</p>
      </div>
    </div>


     
   <?php echo $this->fetch('foot.dwt'); ?>
    
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

</body><!-- <body> -->

</html>
