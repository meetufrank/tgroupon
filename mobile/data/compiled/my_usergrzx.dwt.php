


<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
  <meta charset="utf-8">
  <title>COLOR & SHAPE</title>

  
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,region.js,shopping_flow.js')); ?>

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

<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.9.1.min.js"></script>

  
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



        <div role="tabpanel" class="tab-pane transition fade in active" id="tab4">



          <script type="text/javascript">
          function deldizhi(addressid){
                          $.ajax({
                                    type:"post",
                                    url:"my_usergrzx.php?act=drop_consignees",
                                    async:true,
                                    data:{addressid:addressid},
                                    dataType: "json",
                                    success: function (result) {


                                          }//回调函数结束
                               });//ajax结束
                           document.getElementById("dizhi"+addressid).remove();

          }

         </script>

           <!--  <script type="text/javascript">

            function getaddr(){

                    WeixinJSBridge.invoke('editAddress',{

                        "appId" : "<?php echo $this->_var['appId']; ?>", //公众号名称，由商户传入

                        "timeStamp" : "<?php echo $this->_var['timestamp']; ?>", //时间戳 这里随意使用了一个值

                        "nonceStr" : "<?php echo $this->_var['nonceStr']; ?>", //随机串

                        "signType" : "SHA1", //微信签名方式:sha1

                        "addrSign" : "<?php echo $this->_var['addrSign']; ?>", //微信签名

                        "scope"    : "jsapi_address"

                    },function(res){

                        if(res.err_msg == 'edit_address:ok'){

                            // document.getElementById("showAddress").innerHTML="收件人："+res.userName+"  联系电话："+res.telNumber+"  收货地址："+res.proviceFirstStageName+res.addressCitySecondStageName+res.addressCountiesThirdStageName+res.addressDetailInfo+"  邮编："+res.addressPostalCode;
                            // window.location.href="my_usergrzx.php?act=wxaddress&consignee="+res.userName+"&tel="+res.telNumber+"&province="+res.proviceFirstStageName+"&city="+res.addressCitySecondStageName+"&district="+res.addressCountiesThirdStageName+"&address="+res.addressDetailInfo;
                            // return;
                              $.ajax({

                                            url:"my_usergrzx.php?act=wxaddress",
                                            async:true,
                                            data:{consignee:res.userName,tel:res.telNumber,province:res.proviceFirstStageName,city:res.addressCitySecondStageName,district:res.addressCountiesThirdStageName,address:res.addressDetailInfo},
                                            dataType: "json",
                                            success: function (result) {
                                               if(result.msg=='success'){
                                                 window.location.reload("my_usergrzx.php?act=address_list");
                                               }


                                                  }//回调函数结束
                                       });//ajax结束


                        }
                        else{
                            alert("获取地址失败，请重新点击");
                        }

                    });
        }


    </script> -->
    <script language="javascript">
            function callpay()
            {
                WeixinJSBridge.invoke('editAddress',{
                    "appId" : "<?php echo $this->_var['appId']; ?>",
                    "scope" : "jsapi_address",
                    "signType" : "sha1",
                    "addrSign" : "<?php echo $this->_var['signature']; ?>",
                    "timeStamp" : "<?php echo $this->_var['timestamp']; ?>",
                    "nonceStr" : "<?php echo $this->_var['noncestr']; ?>",
                },function(res){

                    // document.form1.address1.value         = res.proviceFirstStageName;   //省
                    // document.form1.address2.value         = res.addressCitySecondStageName;  //市
                    // document.form1.address3.value         = res.addressCountiesThirdStageName;  //区
                    // document.form1.detail.value           = res.addressDetailInfo;   //详细
                    // document.form1.national.value         = res.nationalCode;   //国家码
                    // document.form1.user.value            = res.userName;     //收货人
                    // document.form1.phone.value            = res.telNumber;   //电话
                    // document.form1.postcode.value         = res.addressPostalCode;  //邮编
                    // document.form1.errmsg.value         = res.err_msg;


                      if(res.err_msg == 'edit_address:ok'){


                              $.ajax({

                                            url:"my_usergrzx.php?act=wxaddress",
                                            async:true,
                                            data:{consignee:res.userName,tel:res.telNumber,province:res.proviceFirstStageName,city:res.addressCitySecondStageName,district:res.addressCountiesThirdStageName,address:res.addressDetailInfo},
                                            dataType: "json",
                                            success: function (result) {
                                               if(result.msg=='success'){
                                                 window.location.reload("my_usergrzx.php?act=address_list<?php echo $this->_var['linestring2']; ?>");
                                               }


                                                  }//回调函数结束
                                       });//ajax结束


                        }
                        else{
                            alert("获取地址失败，请重新点击");
                        }
                });
            }
        </script>
      <!--   <form name="form1" target="_blank">
            <table border="1">
                <colgroup><col width="20%"><col width="80%"></colgroup>
                <TR><th>结果</th><th><INPUT value="" name="errmsg" id="9"></th>
                <TR><th>国家码</th><th><INPUT value="" name="national" id="6"></th>
                <TR><th>区</th><th><INPUT value="" name="address3" id="3"></th>
                <TR><th>省</th><th><INPUT value="" name="address1" id="1"></th>
                <tr><th>市</th><th><INPUT value="" name="address2" id="2"></th>
                <TR><th>详细</th><th><INPUT value="" name="detail"   id="4"></th>
                <TR><th>收货人</th><th><INPUT value="" name="user" id="7"></th>
                <TR><th>电话</th><th><INPUT value="" name="phone"    id="5"></th>
                <TR><th>邮编</th><th><INPUT value="" name="postcode" id="8"></th>
            </table>
        </form>
        <div>
            <button type="button" onclick="callpay()">获取收货地址</button>
        </div> -->



          
       <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
        <div class="shop-item" <?php if ($this->_var['consignee']['default'] == 1): ?>class="clearfix" style="padding:18px; background: #edf7f9;"<?php else: ?>style="padding:18px;"<?php endif; ?> id="dizhi<?php echo $this->_var['consignee']['address_id']; ?>">
                <div class="shop-thumbnail">
                  <form name=”form” method=”post” action=”#” id="form0">
                        <div  id="shouhuo">
                                <div>
                                  <p>收件人:<span><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></span></p>
                                  <p>手机号:<span><?php echo $this->_var['consignee']['tel']; ?></span></p>
                                  <p style="float:left">地&nbsp;&nbsp;址:</p>
                                  <p><span class="mobile-address"><?php echo $this->_var['consignee']['province']; ?><?php echo $this->_var['consignee']['city']; ?><?php echo $this->_var['consignee']['district']; ?><?php echo htmlspecialchars($this->_var['consignee']['address']); ?></span></p>
                                </div>
                                <div class="pull-right hidden-xs" style="margin-top: -62px;">

 <?php if ($this->_var['consignee']['default'] == 1): ?> <span href="#" style="font-size:12px; color: #999; margin-right:20px;">默认地址</span><?php else: ?>
                                  <a href="#" onclick="morendizhi(<?php echo $this->_var['consignee']['address_id']; ?>)" class="btn btn-default btn-sm">设为默认地址</a>
                                  <?php endif; ?>
                                  <a href="#" onclick="editdizhi(<?php echo $this->_var['consignee']['address_id']; ?>)" class="btn btn-primary btn-sm">编辑</a>
                              </div>
                              <div class="pull-right visible-xs">
                              <?php if ($this->_var['consignee']['default'] == 1): ?>
                              <span href="#" style="font-size:12px; color: #999; margin-right:20px;">默认地址</span>

                              <?php else: ?>
                                  <a href="#" onclick="morendizhi(<?php echo $this->_var['consignee']['address_id']; ?>)" class="btn btn-default btn-sm">设为默认地址</a>
                              <?php endif; ?>

                                  <a href="#" onclick="editdizhi(<?php echo $this->_var['consignee']['address_id']; ?>)"  class="btn btn-primary btn-sm">编辑</a>
                              </div>
                        </div>
                        <div id="btn-sm" class="shop-item-tools">
                            <a onclick="deldizhi(<?php echo $this->_var['consignee']['address_id']; ?>)" href="#" class="btn btn-default btn-sm"><i class="material-icons close"></i></a>
                         </div>
                    </form>
                </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          





          <div class="text-right" id="adddizhi">

          <?php if ($this->_var['loginpc']): ?>

          <?php else: ?>
               <a onclick="callpay()" class="wechataddress duquaddress">读取微信地址</a>
          <?php endif; ?>
              <a  id="Address_Manager" class="btn btn-primary waves-effect waves-light">添加地址</a>
              <div class="clear"></div>
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





  


  <script>



	//管理地址 xs
   $('#Address_Manager_xs').click(function(){
   	var content ='<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="收件人" /></div>'
   	+
   	'<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="手机" /></div>'
   	+
   	'<div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>省</option></select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>市</option></select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select"><select class="form-control"><option>区</option></select></div></div></div>'
   	+
   	'<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="详细地址" /></div>'
   	+
   	'<div class="text-right visible-sm visible-xs"><a id="" href="indexsi.php"   style="text-decoration: underline;">读取微信地址</a></div>';
  	layer.open({
			  title: [
			    '编辑地址',
			    'background-color:#77cde3; color:#fff;'
			  ],
			  content:content,
			  btn: ['确认', '返回']
			});
			});

   //设为默认地址
   function morendizhi(addressid){

         $.ajax({
                                    type:"post",
                                    url:"my_usergrzx.php?act=morendizhi",
                                    async:true,
                                    data:{addressid:addressid},
                                    dataType: "json",
                                    success: function (result) {

                                         window.location.reload();




                                          }//回调函数结束
                               });//ajax结束
   }
   //编辑地址





   function editdizhi(addressid){


                       $.ajax({
                            type:"post",
                            url:"my_usergrzx.php?act=act_edit_address&flag=display",
                            async:true,
                            data:{id:addressid},
                            dataType:'JSON',
                            success: function (result) {
                              //console.log(result);return;
                                   if(result){
                                    var content =' <form method="post" class="checkout-form container" id="address_form"><div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="收件人" name="consignee" value="'+result.useraddress.consignee
+'"/></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="手机" name="tel" value="'+result.useraddress.tel+'"/></div>'
    +
    '<div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
    '<select name="province" id="province"   class="form-control" >'+
               ' <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>';
                if(result.address){
                  $.each(result.address.province,function(i){
                    content=content+'<option value="'+result.address.province[i].region_id+'" ';
                    if(result.useraddress.province==result.address.province[i].region_id){
                      content=content+' selected';
                    }
                    content=content+'  >'+result.address.province[i].region_name+'</option>';

                  });
                  content=content+' </select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                  '<select name="city" id="city"  class="form-control">'+
                  '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>';
                  $.each(result.address.city,function(i){
                    content=content+'<option value="'+result.address.city[i].region_id+'" ';
                    if(result.useraddress.city==result.address.city[i].region_id){
                      content=content+' selected';
                    }
                    content=content+'  >'+result.address.city[i].region_name+'</option>';

                  });
                  content=content+' </select></div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                  '<select name="district" id="district"   class="form-control">'+
                  '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>';
                   $.each(result.address.district,function(i){
                    content=content+'<option value="'+result.address.district[i].region_id+'" ';
                    if(result.useraddress.district==result.address.district[i].region_id){
                      content=content+' selected';
                    }
                    content=content+'  >'+result.address.district[i].region_name+'</option>';

                  });
                   content=content+'</select></div></div></div>';
                   content=content+'<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="详细地址" name="address" value="'+result.useraddress.address+'"/></div><div class="text-right visible-sm visible-xs"><a href="" style="text-decoration: underline;"></a></div></form>';
                }

                                    layer.open({
                                      title: [
                                        '编辑地址',
                                        'background-color:#77cde3; color:#fff;'
                                      ],
                                      content:content,
                                      btn: ['确认', '返回'],
                                      success: function(){
                                         //省事件开始
                             $("#province").change(function(){
                                var id=$("#province").val();
                                $("#city").find("option").remove();
                                          $("#district").find("option").remove();
                                         $("#city").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>');
                                         $("#district").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                                if(id!=0){
                                 $.ajax({
                                    url:"ajax_region.php",
                                    data:{ajax_province:id},
                                    dataType:"JSON",
                                    success: function(data){

                                         $.each(data,function(i){

                                             $("#city").append(
                                               ' <option value="'+data[i].region_id+'"  >'+data[i].region_name+'</option>'
                                             );


                                         });
                                         var cityid=$("#city").val();





                                    },
                                    error:function(){
                                          alert('error');
                                    }
                                  });
                                }

                            });
                        //省事件结束
                        //市事件开始
                         $("#city").change(function(){
                            var id=$("#city").val();
                            $("#district").find("option").remove();
                            $("#district").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                            if(id!=0){
                             $.ajax({
                                url:"ajax_region.php",
                                data:{ajax_province:id},
                                dataType:"JSON",
                                success: function(data){

                                     $.each(data,function(i){
                                     if(i==0){
                                         $("#district").append(
                                           ' <option value="'+data[i].region_id+'" selected >'+data[i].region_name+'</option>'
                                         );
                                     }else{
                                         $("#district").append(
                                           ' <option value="'+data[i].region_id+'" >'+data[i].region_name+'</option>'
                                         );
                                     }

                                     });

                                },
                                error:function(){
                                      alert('error');
                                }
                              });
                            }

                        });
                        //市事件结束

                        },
                          yes: function(index){
                              $("#address_form").submit();
              },

                                    });

                                }

                                  }//回调函数结束
                               });//ajax结束





   }

   //添加地址
   $('#Address_Manager').click(function(){

     var content =' <form method="post" class="checkout-form container" id="address_form"><div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="收件人" name="consignee"/></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="手机" name="tel" /></div>'
    +
    '<div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
    '<select name="province" id="province"   class="form-control" >'+
               ' <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>' +
                '<?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>'+
                '<option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>'+
               '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></select>'+
                 '</div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                 '<select name="city" id="city"  class="form-control">'+
                  '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>'+
                  '<?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>'+
                  '<option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>'+
                  '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>'+
                 '</select>'+
                 '</div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">'+
                 '<select name="district" id="district"   class="form-control">'+
                   '<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>' +
                    '<?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>'+
                    '<option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>'+
                    '<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>'+
                  '</select>'+
                 '</div></div></div>'
    +
    '<div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" placeholder="详细地址" name="address"/></div>'
    +
    '<div class="text-right visible-sm visible-xs"><a href="" style="text-decoration: underline;"></a></div></form>'
    ;





    layer.open({
              title: [
                '新增地址',
                'background-color:#77cde3; color:#fff;'
              ],
              content:content,
              btn: ['确认', '返回'],
              success: function(){
                       //省事件开始
                             $("#province").change(function(){
                                var id=$("#province").val();
                                $("#city").find("option").remove();
                                          $("#district").find("option").remove();
                                          $("#city").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>');
                                         $("#district").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                                if(id!=0){
                                 $.ajax({
                                    url:"ajax_region.php",
                                    data:{ajax_province:id},
                                    dataType:"JSON",
                                    success: function(data){
                                    $.each(data,function(i){

                                             $("#city").append(
                                               ' <option value="'+data[i].region_id+'"  >'+data[i].region_name+'</option>'
                                             );
                                         });
                                         var cityid=$("#city").val();
                                    },
                                    error:function(){
                                          alert('error');
                                    }
                                  });
                                }

                            });
                        //省事件结束
                        //市事件开始
                         $("#city").change(function(){
                            var id=$("#city").val();
                            $("#district").find("option").remove();
                            $("#district").append('<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>');
                            if(id!=0){
                             $.ajax({
                                url:"ajax_region.php",
                                data:{ajax_province:id},
                                dataType:"JSON",
                                success: function(data){

                                     $.each(data,function(i){
                                     if(i==0){
                                         $("#district").append(
                                           ' <option value="'+data[i].region_id+'" selected >'+data[i].region_name+'</option>'
                                         );
                                     }else{
                                         $("#district").append(
                                           ' <option value="'+data[i].region_id+'" >'+data[i].region_name+'</option>'
                                         );
                                     }

                                     });

                                },
                                error:function(){
                                      alert('error');
                                }
                              });
                            }

                        });
                        //市事件结束
                        },
              yes: function(index){
                //console.log($('#address_form').serialize());

                    $.ajax({
                          type:"POST",
                          url:"flow.php?step=consignee",
                          data:$('#address_form').serialize(),
                          success: function(data){
                            window.location.reload();
                            //window.location.href=window.location.href;
                            //alert("ada");
                                 layer.close(index);
                                  //window.location.href=window.location.href;
                                }
                               });
              },

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


</body><!-- <body> -->

</html>
