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


   <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>

  
  <style>
    .nav-pills{
    	padding-bottom:30px;
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
	.list_msgs li{
		list-style:none;
	}
	.list_msgs a.title:link{
		color:#000;
		font-size:15px;
		font-weight:bold;
		text-decoration:none;
		padding-left:10px;
		background:url(<?php echo $this->_var['ectouch_themes']; ?>/img/dot_red.png) no-repeat left center;
	}
	.list_msgs a.title.read:link{
		color:#666;
		font-size:14px;
		font-weight:normal;
		text-decoration:none;
		padding-left:10px;
		background:url(<?php echo $this->_var['ectouch_themes']; ?>/img/dot_black.png) no-repeat left center;
	}
	.list_msgs a.title:visited{
		color:#666;
		font-size:14px;
		font-weight:normal;
		text-decoration:none;
		padding-left:10px;
		background:url(<?php echo $this->_var['ectouch_themes']; ?>/img/dot_black.png) no-repeat left center;
	}
	.list_msgs a.title:hover{
		color:#999;
		text-decoration:underline;
	}
	.list_msgs a.title:active{
		color:#666;
		font-size:14px;
		font-weight:normal;
		text-decoration:none;
		padding-left:10px;
		background:url(<?php echo $this->_var['ectouch_themes']; ?>/img/dot_black.png) no-repeat left center;
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
     
      <?php echo $this->fetch('my_head.dwt'); ?>
      
      <div class="tab-content">




        <div role="tabpanel" class="tab-pane transition fade active in" id="tab2">
        	
		      <ul class="nav-pills" role="tablist">
		        <li class="active"><a href="#tab2_1" role="tab" data-toggle="tab">收藏的单品<span id="testid"><?php echo $this->_var['spnum']; ?></span></a></li>
		        <li><a href="#tab2_2" role="tab" data-toggle="tab">收藏的艺术家<span id="ysjsum"><?php echo $this->_var['ysjnum']; ?></span></a></li>
		      </ul>
		      
		      <div id="btn-sm" class="tab-content">
		        <div role="tabpanel" class="tab-pane transition fade in active" id="tab2_1">
		        	<div class="row">
					 <?php $_from = $this->_var['spxx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spxx_0_12719400_1486700765');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['spxx_0_12719400_1486700765']):
        $this->_foreach['no']['iteration']++;
?>
						  <div class="col-md-3 col-sm-6" id="spdel<?php echo $this->_var['spxx_0_12719400_1486700765']['rec_id']; ?>">
						  <div class="shop-item">
							<div class="shop-thumbnail">
							  <a href="shop-single.php?id=<?php echo $this->_var['spxx_0_12719400_1486700765']['goods_id']; ?><?php echo $this->_var['linestring2']; ?>" class="item-link"></a>
							  <img src="././admin/<?php echo $this->_var['spxx_0_12719400_1486700765']['attributeimg']; ?>" alt="Shop item">
							  <div class="shop-item-tools">
								<a href="#" onclick="shangpingdel(<?php echo $this->_var['spxx_0_12719400_1486700765']['rec_id']; ?>)" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="">
								  <i class="material-icons close"></i>
								</a>
							  </div>
							</div>
							<div class="shop-item-details">
							  <h3 class="shop-item-title text-center"><a href=""><?php echo $this->_var['spxx_0_12719400_1486700765']['goods_name']; ?></a></h3>
							</div>
						  </div>
						</div>
				   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		        	</div>
		        </div>

						<div role="tabpanel" class="tab-pane transition fade" id="tab2_2">
							<div id="btn-sm" class="row">
				<?php $_from = $this->_var['ysjxx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ysjxx_0_12731000_1486700765');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['ysjxx_0_12731000_1486700765']):
        $this->_foreach['no']['iteration']++;
?>
								<div class="col-md-2 col-sm-3" id="ysjdelid<?php echo $this->_var['ysjxx_0_12731000_1486700765']['scid']; ?>">
								  <div class="teammate">
									<div class="teammate-thumb">
									  <div class="social-bar text-right space-bottom">
										<a href="#" class="btn btn-square btn-sm btn-primary waves-effect waves-light" onclick="ysjdel(<?php echo $this->_var['ysjxx_0_12731000_1486700765']['scid']; ?>)"><i class="material-icons close"></i></a>
									  </div>
									  <img src="<?php echo $this->_var['ysjxx_0_12731000_1486700765']['hav_logo']; ?>" alt="">
									</div>
									<h4 class="teammate-name"><a href=""><?php echo $this->_var['ysjxx_0_12731000_1486700765']['user_name']; ?></a></h4>
								  </div>
								</div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</div>
						</div>

		      </div>
        </div>

      </section>

    
  <?php echo $this->fetch('foot.dwt'); ?>
	

  </div>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.validate.js" type="text/javascript"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/messages_zh.js" type="text/javascript"></script>
  

<script type="text/javascript">

            function shangpingdel(recid){
               $.ajax({
                                    type:"get",
                                    url:"my_grzxgdsc.php?act=del",
                                    async:true,
                                    data:{recid:recid},
                                    dataType: "json",
                                    success: function (result) {

                                          }//回调函数结束
                               });//ajax结束
                 document.getElementById("spdel"+recid).remove();

                 var x1 = $("#testid").text();

                 $("#testid").text(x1-1);
        }

        function ysjdel(scysjid){

                 $.ajax({
                                    type:"get",
                                    url:"my_grzxgdsc.php?act=delsyj",
                                    async:true,
                                    data:{scysjid:scysjid},
                                    dataType: "json",
                                    success: function (result) {

                                          }//回调函数结束
                               });//ajax结束
                 document.getElementById("ysjdelid"+scysjid).remove();
                var x1 = $("#testid").text();

                 $("#ysjsum").text(x1-1);
        }

    </script>


  
  <script language="javascript">

	function checkLength(which) {
		iCount = which.value.replace(/[^\u0000-\u00ff]/g,"aa");
		which.size=iCount.length+1;
	}
 </script>
</body><!-- <body> -->

</html>
