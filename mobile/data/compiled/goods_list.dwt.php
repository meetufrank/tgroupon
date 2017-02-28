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

  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/font-awesome.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/page-preloading.js"></script>

  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/modernizr.custom.js"></script>
<style>
@media screen and (max-width: 768px) {
  .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 0px;
    padding-right: 0px;
}
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
	
    
    <section class="container-fluid padding-top-3x padding-bottom-3x">

      
      <div class="sidebar-toggle">
        <i class="fa fa-th"></i>
      </div>

      <div class="row padding-top-goodlist">

        
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
                     <li class="pricechange"><a href="#" id="showprice{{d[i].data[y].money_id}}" class="widgeta {{# if(y==0){}}allpricechange{{#} }}" onClick="showlist({{d[i].data[y].money_id}},'showprice')">{{d[i].data[y].money_name}}</a></li>
                   {{#} }}
                     {{#  if(d[i].title=='商品分类'){}}
                     <li class="companychange"><a href="#" id="showtype{{d[i].data[y].id}}" class="widgetb  {{# if(d[i].data[y].id==<?php echo $this->_var['check_id']; ?>){}}allpricechange{{#} }}" onClick="showlist({{d[i].data[y].id}},'showtype')">{{d[i].data[y].name}}</a></li>
                   {{#} }}

				  {{#} }}
                </ul>
              </div>
			  {{#} }}


	</script>

    <script type="text/javascript">
       function showlist(val,id){
        $("#"+id+val).addClass("allpricechange");
        $("#"+id+val).parent().siblings().children().removeClass("allpricechange");
        var search=0;
        if(id=='showsearch'){
         var val= $("#"+val).val();

          }
        if($("#searchvalue").val()){
             search=$("#searchvalue").val();
         }


		     $.ajax({
				   type: "post",
				   url: "goods_list.php?step=ajax_goods_count",
				   data:{typeid:val,type:id,search:search},
				   success: function (data) {

            insert_page(data,val,id,search);
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

 	
       <?php echo $this->fetch('foot.dwt'); ?>
    
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
                <input type="text" class="form-control" placeholder="请在此处搜索您想要的商品" value="{{d.search?d.search:''}}" id="searchvalue" onfocus="this.placeholder=''" onblur="this.placeholder='请在此处搜索您想要的商品'">
                <button type="submit" onclick="javascript:return false;">
                  <i class="material-icons search" onClick="showlist('searchvalue','showsearch')"></i>
                </button>
              </form>
            </div>
          </div>
	  <div class="row">
    {{# if(d.data){}}
	  {{# for(var i = 0, len = d.data.length; i < len; i++){}}

            
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="shop-item">
                <div class="shop-thumbnail">
                  <a href="shop-single.php?id={{d.data[i].goods_id}}<?php echo $this->_var['linestring2']; ?>" class="item-link"></a>
              {{# if(d.data[i].attributeimg){}}
                  <img src="././admin/{{d.data[i].attributeimg}}" alt="Shop item">
                </div>
                {{#}}}
                <div class="shop-item-details">
                  <div class="shop-item-title"><a href="shop-single.php?id={{d.data[i].goods_id}}<?php echo $this->_var['linestring2']; ?>">{{d.data[i].goods_name}}</a></div>
                  <span class="shop-item-price">
                  {{# if(d.data[i].falseprice>d.data[i].attributeprice){}}
                     <span class="old-price">￥{{d.data[i].falseprice}}</span>
                     {{#} }}
                    ￥{{d.data[i].attributeprice}}
                  </span>
                </div>
              </div>
            </div>
		{{#} }}
      {{#}else{}}
      &nbsp;&nbsp;未搜索到指定商品~
      {{#}}}
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

                }
		});
  var searches='<?php echo $this->_var['search_val']; ?>';
  var typeid='<?php echo $this->_var['typeid']; ?>';
  var list_type='<?php echo $this->_var['showtype']; ?>';
		$.ajax({
				   type: "post",
				   url: "goods_list.php?step=ajax_goods_count",
				   dataType:"json",
				   success: function (data) {

            if(searches!=''){
                $("#searchvalue").val(searches);
            }

            insert_page(data,typeid,list_type,searches);
				  },
				  error: function(data){


                }
		});

	</script>
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_themes']; ?>/layui/css/layui.css">
<script type="text/livescript" src="<?php echo $this->_var['ectouch_themes']; ?>/layui/layui.js"></script>
<script type="text/javascript">
function insert_page(data,val,id,search){
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
               data:{page_num:obj.curr,typeid:val,type:id,search:search},
               success: function (data) {

                var gettpl = document.getElementById('demo').innerHTML;   //获取拼接部分的内容
                laytpl(gettpl).render(eval(data), function (html) {       //給拼接的模板绑定数据
                 document.getElementById('view').innerHTML = html;    // 吧生成的结构绑定在负责呈现内容的div中。
                });


              },
              error: function(data){

                          layer.open({
                  content: '暂无商品'
                  ,skin: 'msg'
                  });
                  $("#searchvalue").val('');
                    }
          });
    }
  });
});
}

</script>

</body><!-- <body> -->

</html>
