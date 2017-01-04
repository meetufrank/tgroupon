<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>商品分类页</title>

  
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



</head>


<body class="page-preloading">

  
  <div class="page-preloader">
    <div class="preloader">
      <img src="<?php echo $this->_var['ectouch_themes']; ?>/img/preloader.gif" alt="Preloader">
    </div>
  </div>

  
  <div class="page-wrapper">

	
    <?php echo $this->fetch('head.dwt'); ?>
	
    
    <section class="container-fluid padding-top-3x padding-bottom-3x">

      
      <div class="sidebar-toggle">
        <i class="material-icons filter_list"></i>
      </div>

      <div class="row padding-top">

        
        <div class="col-lg-2 col-md-3 col-sm-4">
          <aside class="sidebar">
            <span class="sidebar-close"><i class="material-icons close"></i></span>
            <div class="widgets" id="view2">

            
              <script id="demo2" type="text/html">
	{{# for(var i = 0, len = d.length; i < len; i++){}}
	<div class="widget {{d[i].style}}">
                <h3 class="widget-title">{{d[i].title}}</h3>
                <ul>
				{{# for(var y = 0, ilen = d[i].data.length; y < ilen; y++){}}
                   {{# if(d[i].title=='价格区间'){}}
                     <li><a href="#" id="showprice" onClick="showlist({{d[i].data[y].money_id}},'showprice')">{{d[i].data[y].money_name}}</a></li>
                   {{#} }}
                     {{#  if(d[i].title=='商品分类'){}}
                     <li><a href="#" id="showtype" onClick="showlist({{d[i].data[y].id}},'showtype')">{{d[i].data[y].name}}</a></li>
                   {{#} }}



				  {{#} }}
                </ul>
              </div>
			  {{#} }}


	</script>
    <script type="text/javascript">

       function showlist(val,id){
        if(id=='showsearch'){
         var val= $("#"+val).val();

                  }

		     $.ajax({
				   type: "post",
				   url: "goods_list.php?step=ajax_goods_count",
				   data:{typeid:val,type:id},
				   dataType:"json",
				   success: function (data) {

            insert_page(data,val,id);
				  },
				  error: function(data){
                    	alert("Json数据出错");
                }
		});
		   }
    </script>
          

              
            </div>
          </aside>
        </div>

        
        <div class="col-lg-10 col-md-9 col-sm-8">



          <div id="view">
          </div>
          <div id="demo_page"></div>
          <hr>


        </div>
      </div>
    </section>
  </div>

 	
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
    
  </div>
  

  

  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/nouislider.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>


  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/laytpl/laytpl.js" type="text/javascript"></script>
  <script id="demo" type="text/html">
  
          <div class="shop-bar">
            <div class="column">
              <p class="text-sm space-bottom-none">
                <span class="text-gray">显示</span> {{d.count}} 项结果
              </p>
            </div>
            <div class="column">
              <form method="get" class="search-box">
                <input type="text" class="form-control" placeholder="请在此处搜索您想要的商品" value="{{d.search?d.search:''}}" id="searchvalue" >
                <button type="submit" onclick="javascript:;">
                  <i class="material-icons search" onClick="showlist('searchvalue','showsearch')"></i>
                </button>
              </form>
            </div>
          </div>
	  <div class="row">
	  {{# for(var i = 0, len = d.data.length; i < len; i++){}}

            
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="shop-item">
                <div class="shop-thumbnail">
                  <a href="shop-single.php?id={{d.data[i].goods_id}}" class="item-link"></a>
              {{# if(d.data[i].goods_thumb){}}
                  <img src="../{{d.data[i].goods_thumb}}" alt="Shop item">
                </div>
                {{#}}}
                <div class="shop-item-details">
                  <h3 class="shop-item-title"><a href="shop-single.html">{{d.data[i].goods_name}}</a></h3>
                  <span class="shop-item-price">
                    <span class="old-price">￥{{d.data[i].market_price}}</span>
                    ￥{{d.data[i].shop_price}}
                  </span>
                </div>
              </div>
            </div>
		{{#} }}
      </div>


	</script>
	<script type="text/javascript">


	$.ajax({
				   type: "post",
				   url: "goods_list.php?step=ajax_goods_type",
				   dataType:"json",
				   success: function (data) {
						var gettpl = document.getElementById('demo2').innerHTML;   //获取拼接部分的内容
						laytpl(gettpl).render(eval(data), function (html) {
           // console.log(data);     //給拼接的模板绑定数据
							document.getElementById('view2').innerHTML = html;    // 吧生成的结构绑定在负责呈现内容的div中。
						});
				  },
				  error: function(data){
						layer.open({
							content: 'Json数据出错'
							,skin: 'msg'
							,time: 1 //2秒后自动关闭
  						});
                }
		});
		$.ajax({
				   type: "post",
				   url: "goods_list.php?step=ajax_goods_count",
				   dataType:"json",
				   success: function (data) {


            insert_page(data);
				  },
				  error: function(data){
                    	layer.open({
							content: 'Json数据出错'
							,skin: 'msg'
							,time: 1 //2秒后自动关闭
  						});
                }
		});

	</script>
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_themes']; ?>/layui/css/layui.css">
<script type="text/livescript" src="<?php echo $this->_var['ectouch_themes']; ?>/layui/layui.js"></script>
<script type="text/javascript">
function insert_page(data,val,id){
  var val=val?val:'';
  var id=id?id:'';
layui.use('layer', function (){
  var layer = layui.layer;
});
layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
    laypage({
    cont: 'demo_page'
    ,pages: data
    ,skin: '#1E9FFF'
    ,jump: function(obj){
              $.ajax({
               type: "post",
               url: "goods_list.php?step=ajax_goods_list",
               dataType:"json",
               data:{page_num:obj.curr,typeid:val,type:id},
               success: function (data) {

                var gettpl = document.getElementById('demo').innerHTML;   //获取拼接部分的内容
                laytpl(gettpl).render(eval(data), function (html) {       //給拼接的模板绑定数据
                 document.getElementById('view').innerHTML = html;    // 吧生成的结构绑定在负责呈现内容的div中。
                });

              },
              error: function(data){
                          layer.open({
                  content: 'Json数据出错'
                  ,skin: 'msg'
                  ,time: 1 //2秒后自动关闭
                  });
                    }
          });
    }
  });
});
}

</script>

</body><!-- <body> -->

</html>
