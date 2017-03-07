<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>COLOR & SHAPE</title>

  
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/css/theme.min.css" rel="stylesheet" media="screen">

  
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
  .teammate img{
    border-radius: 50%;
  }
  .teammate:hover img{
    border-radius: 0%;
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
  .owl-nav{
    display:none;
  }
  </style>
</head>

<body class="page-preloading">

  
  <div class="page-wrapper">

    
   <?php echo $this->fetch('head.dwt'); ?>
    

    
    <section class="hero-slider">
      <div class="inner">
      <?php $_from = $this->_var['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bl');if (count($_from)):
    foreach ($_from AS $this->_var['bl']):
?>
        <a href="<?php echo $this->_var['bl']['ad_link']; ?>"><div class="slide" style="background-image:url(<?php echo $this->_var['bl']['ad_code']; ?>);">
        </div></a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </section>
  
  <section class="container padding-top-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="column">
            <form method="get" class="search-box">
              <input type="text" class="form-control" placeholder="请在此处搜索" onfocus="this.placeholder=''" onblur="this.placeholder='请在此处搜索'" id="search_content" <?php if ($this->_var['search_content']): ?>value="<?php echo $this->_var['search_content']; ?>"<?php endif; ?>>
              <button type="submit" id="ysj_search" >
                <i class="material-icons search"></i>
              </button>
            </form>
          </div>
      </div>
    </div>
    <br>
      <hr>
      <br>

      <div class="row padding-top" id="ysj_content">
      <?php $_from = $this->_var['artist_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'al');if (count($_from)):
    foreach ($_from AS $this->_var['al']):
?>
         <div class="col-xs-6 col-sm-4 col-md-2">
         <div class="teammate">
            <div class="teammate-thumb">
              <div class="social-bar text-center space-bottom">
                <a href="artist-detail.php?ysjid=<?php echo $this->_var['al']['user_id']; ?><?php echo $this->_var['linestring2']; ?>" class="btn btn-square btn-sm btn-primary waves-effect waves-light" >了解设计师</a>
              </div>
              <img src="<?php echo $this->_var['al']['hav_logo']; ?>" alt="<?php echo $this->_var['al']['user_name']; ?>" id="img">
            </div>
            <h4 class="teammate-name"><a href="artist-detail.php?ysjid=<?php echo $this->_var['al']['user_id']; ?><?php echo $this->_var['linestring2']; ?>"><?php echo $this->_var['al']['user_name']; ?>&nbsp;|&nbsp;<?php echo $this->_var['al']['country']; ?></a></h4>
          </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <div class="clearfix" id="clear-fudong">&nbsp;</div>
          <hr>
      <?php if ($this->_var['more'] == 1): ?>
          <div class="text-center padding-bottom-2x" id="morefather">
          <div id="more">
            <a href="#" class="btn btn-primary waves-effect waves-light" id="getValue">加载更多</a>
            <br>
            <a><i class="material-icons arrow_downward"></i></a>
            </div>
            <div style="text-align:center; width:50px;height:50px;margin:0 auto;display:none;" id="loadimg"><img src="<?php echo $this->_var['ectouch_themes']; ?>img/preloader.gif"></div>
            </div>
      <?php endif; ?>
      </div>
    </section>
    
   <?php echo $this->fetch('foot.dwt'); ?>
  </div>
  

  
  
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/smoothscroll.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/velocity.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/waves.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/icheck.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/vendor/owl.carousel.min.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/scripts.js"></script>
  <script src="<?php echo $this->_var['ectouch_themes']; ?>/js/layer_mobile/layer.js"></script>
  <script type="text/javascript">
        $(function(){
           var page=2;
            $("#getValue").click(function(){

                $.ajax({
                    type:"POST",
                    url:"artist_list.php?act=get_next_list",
                    dataType: "json",
                    data:{page:page},
                    success: function(data){
            //console.log(data);
            $.each(data.data,function(i){
              layer.open({
                type: 2
                ,content: '加载中'
              ,time: 0.5 //2秒后自动关闭
                });
                           $("#clear-fudong").before('<div class="col-xs-6 col-sm-4 col-md-2">'+'<div class="teammate"><div class="teammate-thumb">'+
              ' <div class="social-bar text-center space-bottom">'+
                '<a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>" class="btn btn-square btn-sm btn-primary waves-effect waves-light">了解设计师</a></div>'+
              '<img src="..'+data.data[i].hav_logo+'" alt="'+data.data[i].hav_logo+'"></div>'+
            '<h4 class="teammate-name"><a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>">'+data.data[i].user_name+'&nbsp;|&nbsp;'+data.data[i].country+'</a></h4></div></div>'

          );//内容添加到页面上.



                             });
            if(data.more==0){
                                $("#morefather").remove();
                           }
                           if(data.search_content!=''){
                            $("#search_content").val(data.search_content);
                           }
            page++;
                    },
                    error: function(){

                    }
                });

            })
        })
    </script>
     <script type="text/javascript">

            $("#ysj_search").click(function() {
               event.preventDefault();
              var content=$("#search_content").val();
                 $.ajax({
                    type:"POST",
                    url:"artist_list.php",
                    dataType: "json",
                    data:{content:content,act:'get_search_list'},
                    success: function(data){
            //console.log(data);
          $("#ysj_content").children().remove();
          var new_content='';
            $.each(data.data,function(i){
              layer.open({
                type: 2
                ,content: '加载中'
              ,time: 0.5 //2秒后自动关闭
                });
                 new_content+='<div class="col-xs-6 col-sm-4 col-md-2">'+'<div class="teammate"><div class="teammate-thumb">'+
              ' <div class="social-bar text-center space-bottom">'+
                '<a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>" class="btn btn-square btn-sm btn-primary waves-effect waves-light">了解设计师</a></div>'+
              '<img src="'+data.data[i].hav_logo+'" alt="'+data.data[i].user_name+'"></div>'+
            '<h4 class="teammate-name"><a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>">'+data.data[i].user_name+'&nbsp;|&nbsp;'+data.data[i].country+'</a></h4></div></div>';




                             });
            new_content+='<div class="clearfix" id="clear-fudong">&nbsp;</div>  <hr>';
             if(data.more==1){
                                new_content+='<div class="text-center padding-bottom-2x" id="morefather"> <div id="more"> <a href="#" class="btn btn-primary waves-effect waves-light" id="getsearchValue">加载更多</a><br><a><i class="material-icons arrow_downward"></i></a> </div><div style="text-align:center; width:50px;height:50px;margin:0 auto;display:none;" id="loadimg"><img src="<?php echo $this->_var['ectouch_themes']; ?>img/preloader.gif"></div> </div>';
                           }

                    $("#ysj_content").append(new_content);
                     var search_page=2;
            $("#getsearchValue").click(function(){

                $.ajax({
                    type:"POST",
                    url:"artist_list.php?act=get_search_list",
                    dataType: "json",
                    data:{page:search_page},
                    success: function(data){
            //console.log(data);
            $.each(data.data,function(i){
              layer.open({
                type: 2
                ,content: '加载中'
              ,time: 0.5 //2秒后自动关闭
                });
                           $("#clear-fudong").before('<div class="col-xs-6 col-sm-4 col-md-2">'+'<div class="teammate"><div class="teammate-thumb">'+
              ' <div class="social-bar text-center space-bottom">'+
                '<a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>" class="btn btn-square btn-sm btn-primary waves-effect waves-light">了解设计师</a></div>'+
              '<img src="'+data.data[i].hav_logo+'" alt="'+data.data[i].user_name+'"></div>'+
            '<h4 class="teammate-name"><a href="artist-detail.php?ysjid='+data.data[i].user_id+'<?php echo $this->_var['linestring2']; ?>">'+data.data[i].user_name+'&nbsp;|&nbsp;'+data.data[i].country+'</a></h4></div></div>'

          );//内容添加到页面上.



                             });
            if(data.more==0){
                                $("#morefather").remove();
                           }
                           if(data.search_content!=''){
                                $("#search_content").val(data.search_content);
                           }else{
                               $("#search_content").val();
                           }

            search_page++;
                    },
                    error: function(){

                    }
                });

            })
                    },
                    error: function(){

                    }
                });
                return false;
            });



      </script>

</body><!-- <body> -->

</html>
