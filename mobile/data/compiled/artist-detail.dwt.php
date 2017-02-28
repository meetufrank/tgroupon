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

  
   <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>
    <link rel="stylesheet" href="<?php echo $this->_var['ectouch_themes']; ?>/Swiper-3.4.0/dist/css/swiper.min.css">

  
  <style>
    .quotation{
    	width:50%;
    }
    .quotation .quotation-author-ava{
    	width:100px;
    	float:left;
    	margin-right:20px;
    }
	.quotation-author a:hover {
	    color: #333;
	}
	.quotation-author a {
		display:block;
		margin-top:30px;
	    text-decoration: none;
	    color: #999;
	}
  /*swiper样式*/
   html, body {
        position: relative;
        height: 100%;
  }
  body {
        margin: 0;
        padding: 0;
  }
  .swiper-container {
        width: 100%;
        height:50%;
  }
  .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
  /*swiper样式*/

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
    

    

       <div class="swiper-container">
        <?php if ($this->_var['banner_list']): ?>
        <div class="swiper-wrapper">
        <?php $_from = $this->_var['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bl');if (count($_from)):
    foreach ($_from AS $this->_var['bl']):
?>
            <div class="swiper-slide"><a href="<?php echo $this->_var['bl']['ad_link']; ?>"><img src="<?php echo $this->_var['bl']['ad_code']; ?>"></a></div>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        
       <!--  <div class="swiper-pagination"></div>-->
       <?php endif; ?>
    </div>

	
	<section class="container padding-top-2x">
		<div class="clearfix">
			<div class="quotation pull-left">
	            <div class="quotation-author">
	              <div class="quotation-author-ava">
	                <img src="<?php echo $this->_var['ysjxx']['hav_logo']; ?>" alt="James Cameron">
	              </div>
	              <a href="#"><?php echo $this->_var['ysjxx']['user_name']; ?>&nbsp;|&nbsp;<?php echo $this->_var['ysjxx']['country']; ?></a>
	            </div>
	          </div>
	          <div class="pull-right" style="margin-top: 20px;">
	          	<a href="#" class="sb-twitter">
                  <i class="fa fa-heart  <?php if ($this->_var['sc_count']): ?>schongse<?php endif; ?>" style="width:30px; height:30px;text-align:center; padding-top:5px;" id="shochangpc"></i>
                </a>
	          <!--	<a href="#" class="btn btn-default btn-sm" title="">
                  <i class="material-icons question_answer"></i>
                </a>-->
             </div>
          </div>
		<hr>
      	<h3 class="padding-top">设计师简介</h3>
      	<div class="row space-top">
           <?php echo $this->_var['ysjxx']['sjsintro']; ?>
          </div>

    </section>


    <section class="container padding-top padding-bottom">
      <hr>
      <h3 class="padding-top">近期作品</h3>
      <div class="row padding-top" id="nextsp">
	  <?php $_from = $this->_var['ysjzp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ysjzp_0_17763200_1488256543');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['ysjzp_0_17763200_1488256543']):
        $this->_foreach['no']['iteration']++;
?>
        <div class="col-lg-3 col-sm-6" >
          <div class="shop-item">
            <div class="shop-thumbnail">
              <a href="shop-single.php?id=<?php echo $this->_var['ysjzp_0_17763200_1488256543']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-link"></a>

              <img src="././admin/<?php echo $this->_var['ysjzp_0_17763200_1488256543']['attributeimg']; ?>" alt="<?php echo $this->_var['ysjzp_0_17763200_1488256543']['goods_name']; ?>">

            </div>
            <div class="shop-item-details">
              <h3 class="shop-item-title"><a href="#"><?php echo $this->_var['ysjzp_0_17763200_1488256543']['goods_name']; ?></a></h3>
              <span class="shop-item-price">
               ￥<?php echo $this->_var['ysjzp_0_17763200_1488256543']['attributeprice']; ?>
              </span>
            </div>
          </div>
        </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>




      </div>
    </section>
    <br>
    <?php if ($this->_var['more'] == 1): ?>
	    <div class="row padding-top" id="more">
          <div class="text-center padding-bottom-2x">
          	<a href="#" class="btn btn-primary waves-effect waves-light" id="getValue-2">加载更多</a>
          	<br>
          	<a><i class="material-icons arrow_downward"></i></a>
          </div>

      </div>
    <?php endif; ?>
    
<?php echo $this->fetch('foot.dwt'); ?>
  </div>

  
 <script src="<?php echo $this->_var['ectouch_themes']; ?>/Swiper-3.4.0/dist/js/swiper.min.js"></script>

  
  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
  </script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>


   <script type="text/javascript">

          var page=2;
          var  userid='<?php echo $this->_var['ysjxx']['user_id']; ?>';
            $("#getValue-2").click(function(){
                event.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"artist-detail.php",
                    dataType: "json",
                    data:{page:page,userid:userid,act:'get_next_list'},
                    success: function(data){
                                      // console.log(data);return;
						$.each(data.data,function(i){
							layer.open({
                						type: 2
                						,content: '加载中'
            							,time: 0.5 //2秒后自动关闭
              					});

                           $("#nextsp").append('<div class="col-lg-3 col-sm-6">'+'<div class="shop-item">'+'<div class="shop-thumbnail">'+'<a href="shop-single.php?id='+data.data[i].goods_id+'<?php echo $this->_var['linestring2']; ?>" class="item-link"></a>'+'<img src="././admin/'+data.data[i].attributeimg+'" alt="'+data.data[i].goods_name+'">'+'</div>'+'<div class="shop-item-details">'+'<h3 class="shop-item-title"><a href="#">'+data.data[i].goods_name+'</a></h3>'+'<span class="shop-item-price">￥'+data.data[i].attributeprice+'</span>'+'</div>'+'</div>'+'</div>');//内容添加到页面上.
                             });
                         if(data.more==0){
                                    $("#more").remove();
                         }
                         page++;
                    }
                });

            });


                $("#shochangpc").click(function(){

                var artid=<?php echo $this->_var['ysjid']; ?>;
             $.ajax({
                                    type:"post",
                                    url:"artist-detail.php?act=shochangsc",
                                    async:true,
                                    data:{artid:artid},
                                    dataType: "json",
                                    success: function (result) {
                                            if(result.error==12){
                              if(result.url){
                              window.location.href=result.url;
                             }
                    }
                                          if(result=='insert'){
                                              $("#shochangpc").addClass("schongse");
                                          }else if(result=='delete'){
                                             $("#shochangpc").removeClass("schongse");
                                          }

                                          }//回调函数结束

                               });//ajax结束


    });

    </script>

</body><!-- <body> -->

</html>
