<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="TGROUPON v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<script>
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
</head>
<body>
<div class="body_user "> <?php echo $this->fetch('library/page_header.lbi'); ?> </div>

<div class="block_s box">
  <div id="ur_here"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
</div>


<div class="content clearfix">


<form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
  <div class="block_s">
    <div class="inDetail_body">
      <div class="inDetail_left">
        <div class="inDetail_left_top_out">
          <div class="inDetail_left_top" style="position:relative">
            <div class="left_top_title clearix"  style=" padding-top:8px;"> 
              
<div class="jiathis_style">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_qzone">QQ空间</a>
	<a class="jiathis_button_tsina">新浪微博</a>
	<a class="jiathis_button_tqq">腾讯微博</a>
	<a class="jiathis_button_weixin">微信</a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>

            </div>
            <div class="left_top_txt"> <b><span>限时特卖:</span> <?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></b> </div>
            <div class="left_top_box">
              <div class="left_top_table">
                <div class="left_topTable_02">
                  <div class="left_topTable_btn"> <b><span class="arial">¥</span><?php echo $this->_var['group_buy']['price_ladder']['0']['price']; ?></b>
                    <div class="left_topTable_buy">
                      <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
                      <input type="submit" style="vertical-align:middle; background:url(themes/miqinew/images/purchase_button.jpg) no-repeat; height:39px; overflow:hidden; border:0; margin:0; padding:0; width:76px; cursor:pointer;" value=" " id="ToBuy" onmouseover="this.style.backgroundPosition='0 -39px'" onmouseout="this.style.backgroundPosition='0 0'"/>
                    </div>
                  </div>
                </div>
                <div class="left_topTable_01">
                  <table>
                    <tbody>
                      <tr>
                        <th>市场价</th>
                        <th>折扣</th>
                        <th>为您节省</th>
                      </tr>
                      <tr>
                        <td class="topTable_through"><span class="arial">¥</span><?php echo $this->_var['group_buy']['market_price']; ?></td>
                        <td><?php echo $this->_var['group_buy']['zhekou']; ?>折</td>
                        <td><span class="arial">¥</span><?php echo $this->_var['group_buy']['jiesheng']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                   <?php if ($this->_var['specification']): ?>
                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                <div class="left_topTable_spec">
                  <span style=" display:block;float:left; width:60px; padding-top:5px; font-size:13px; color:#999; font-weight:normal;">颜色：</span>
                  
                      <div class="catt" style="width:145px; float:left;">  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?><a title="[[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]]" name="<?php echo $this->_var['value']['id']; ?>" href="javascript:;" onclick="changeAtt(this)" <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> style=" text-decoration:none"><?php echo $this->_var['value']['label']; ?><input type="radio" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> value="<?php echo $this->_var['value']['id']; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none"></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
                      <input type="hidden" value="<?php echo $this->_var['key']; ?>" name="spec_list">
                    
                 
                  <div class="clear"></div>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?>
                   <div class="left_topTable_number" >
                   <strong style="float:left; width:60px; padding-top:5px; font-size:13px; color:#999; font-weight:normal;">数量：</strong>
                   	   <input name="number" type="text" class="inputBg" id="number" value="1" size="4" style="text-align:center;"/>
                   </div>
                <div class="left_topTable_03">
                  <div class="topTable_endtime">距离团购结束还有</div>
                  <div id="deal-timeleft_check" class="deal_time deal-box deal-timeleft deal-on"></div>
                  <div id="timer" class="topTable_timer">
                    <p class="end_date" value="<?php echo $this->_var['group_buy']['end_date']; ?>"></p>
                  </div>
                </div>
                <div class="left_topTable_04">
                  <div class="topTable_buy"><strong><?php echo $this->_var['group_buy']['valid_goods']; ?></strong>人已购买</div>
                  <div class="topTable_gif">数量有限下手要快哦</div>
                </div>
              </div>
              <div class="left_top_img"> <img src="<?php echo $this->_var['gb_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>" /> </div>
            </div>
            <div class="clear" style="clear:both;"></div>
          </div>
        </div>
        <div class="inDetail_left_box_out">
          <div class="inDetail_left_box"> 
            
            <div class="inDetail_boxOut ">
              <DIV class="inDetail_box">
                <div class="fixed_out ">
                  <div  id="inner" class="fixed" >
                    <ul class="inLeft_btn">
                      <li><a id="property-id" href="#shangpsx" class="current">商品属性</a></li>
                      <li><a id="detail-id" href="#shangpjs">本单详情</a></li>
                      <li><a id="shot-id" href="#miqsp">产品实拍</a></li>
                      <li><a id="coms1-id" href="#coms1">买家评论</a></li>
                      <li class="advantage"><a id="good-id" href="#miqfw">米奇网优势</a></li>
                    </ul>
                    <div class="inLeftBtn" style="">
                      <input type="submit" style="vertical-align:middle; background:url(themes/miqinew/images/more_v.gif) no-repeat; height:27px; overflow:hidden; border:0; margin:0; padding:0; width:84px; cursor:pointer;" value=" " id="ToBuy" />
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
var obj11 = document.getElementById("inner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
if (bodyScrollTop > top11){
obj11.style.position = (isIE6) ? "absolute" : "fixed";
obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
} else {
obj11.style.position = "static";
}
}
function getTop(e){
var offset = e.offsetTop;
if(e.offsetParent != null) offset += getTop(e.offsetParent);
return offset;
}
</script>
                <div class="inLeft_img">
                  <ul>
                    <li> <b><a href="#" target="_blank">假一赔三</a></b>
                      <p><a href="#" target="_blank">米奇网承诺所有售出产品皆为正品。支持所有产品专柜验货，并为用户提供假一赔三的消费保证。</a></p>
                    </li>
                    <li> <b><a href="#" target="_blank">当日发货</a></b>
                      <p><a href="#" target="_blank">每天下午16:00之前购买的全部订单我们将会当日闪电发出！</a></p>
                    </li>
                    <li> <b><a href="#" target="_blank">30天无条件退货</a></b>
                      <p><a href="#" target="_blank">您购买的所有商品均可享受30天无条件退货服务，且返回运费由我们负责。(请在退货前与客服联系。)</a></p>
                    </li>
                    <li class="border_none"> <b><a href="#" target="_blank">全程保障</a></b>
                      <p><a href="#" target="_blank">米奇网对进货渠道、合作伙伴都经过精心挑选并严格审核，您的利益有我们全程保障。</a></p>
                    </li>
                  </ul>
                </div>
                <div  id="no_try_record"> 
                  
                  
                  <div class="inLeft_title" style="margin: 22px 0 0 15px;"> <img id="shangpsx" src="themes/miqinew/images/inLeft_titli_02.gif" border="0"> </div>
                  <div class="inLeft_attributes"   style="width: 678px;margin: 15px 0 0 15px;display: inline;text-align: left;float: left; padding:0;">
                    <div class="inLeft_attributes_1" style="width: 678px;">
                      <table border="0" cellspacing="0" cellpadding="0"  style="width: 678px;">
                        <tbody>
                          <tr>
                            <td>商品名称</td>
                            <td><p class="fit_people "> <?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></p></td>
                            <td align="center" style="text-align:center;" rowspan="9"><img src="<?php echo $this->_var['gb_goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>"  /></td>
                          </tr>
                          
                          <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
                          <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                          <tr >
                            <td><?php echo htmlspecialchars($this->_var['property']['name']); ?></td>
                            <td><p class="fit_people "><?php echo $this->_var['property']['value']; ?></p></td>
                          </tr>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                  
                  <div class="inLeft_title " id="shangpjs" style="margin: 22px 0 0 15px;"> <img src="themes/miqinew/images/inLeft_titli_03.gif" border="0"> </div>
                  <div class="inLeft_attributes inLeft_style" style="width:678px; padding:0;">
                    <div class="inLeft_orderDetail" style=" background:none; padding:0;">
                      <div class="inLeft_orderDetail_in" > <?php echo $this->_var['gb_goods']['goods_desc']; ?> </div>
                    </div>
                  </div>
                  
                  
                  
                  <div class="inLeft_title " id="miqsp" style="margin: 22px 0 0 15px;"> <img border="0" src="themes/miqinew/images/inLeft_titli_05.gif"> </div>
                  <?php echo $this->_var['gb_goods']['goods_shipai']; ?> 
                  
                  
                  <div class="inLeft_title " id="coms1" style="margin: 22px 0 0 15px;"> <img border="0" src="themes/miqinew/images/inLeft_titli_06.gif"> </div>
                  <div class="inLeft_comment" style="width: 678px; margin: 0 0 0 15px;" >
                    <div class="comment_body " style="width: 678px; " >
                      <div class="comment_bodyd " > 
					  
					        
                            <div id="i-comment"  style="margin-top:20px;">
                <div class="rate"> <strong><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</strong> <br> 好评度 </div>
                <div class="percent"> 
                  <dl> 
                    <dt>好评</dt> 
                    <dd class="d1"> 
                      <div style="width: 100%;"> </div> 
                    </dd> 
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</dd> 
                  </dl> 
                  <dl> 
                    <dt>中评</dt> 
                    <dd class="d1"> 
                      <div style="width: 0%;"> </div> 
                    </dd> 
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</dd> 
                  </dl> 
                  <dl> 
                    <dt>差评</dt> 
                    <dd class="d1"> 
                      <div style="width: 0%;"> </div> 
                    </dd> 
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</dd> 
                  </dl> 
                </div> 
                <div class="actor"> 
                 <a href="<?php echo $this->_var['goods']['url']; ?>"> <img src="<?php echo $this->_var['gb_goods']['goods_thumb']; ?>"  style="width:100px;"></a>
                </div> 
                <div class="btns" style="width:120px;"> 
                  <div>购买过<?php echo $this->_var['goods']['goods_name']; ?>的顾客，在收到商品才可以对该商品发表评论</div> 
                  <a href="javascript:void(0);" class="btn-comment" id="showcommentform">我要评价</a>
                </div>
                <div class="clear"></div>
              </div>
              <div class="blank"></div>
                   
					  <Div class="group_comment">
					  <?php echo $this->fetch('library/comments.lbi'); ?>
                        
                        </Div>
                         </div>
                    </div>
                  </div>
                  
                  
                  <div class="inLeft_title1 " id="miqfw" style="margin: 22px 0 0 15px;" > <img border="0" src="themes/miqinew/images/inLeft_titli_08.gif"> </div>
                  <?php echo $this->fetch('library/benwangyoushi_group.lbi'); ?> </DIV>
              </div>
            </div>
            <div class="blank"></div>
             
          </div>
        </div>
      </div>
      <div class="inDetail_right">
        <div class="ranking_out">
          <div class="ranking">
            <div class="inDetail_scan"> <a href="#" target="_blank" class="scan_pic"> <img src="http://www.miqi.cn/static/imagecache/150026_98_98.jpg"> </a>
              <div class="scan_txt"> <span class="scan_num_con"><strong class="scan_num" id="scan_num_view"><?php echo $this->_var['gb_goods']['click_count']; ?></strong>人</span> 已浏览本产品<br>
                下手要快啊！ </div>
            </div>
          </div>
        </div>
        <div class="blank"></div>
        
        <?php echo $this->fetch('library/goods_related_group.lbi'); ?>
         
         <?php echo $this->fetch('library/brands.lbi'); ?>  </div>
    </div>
     
  </div>
</form>
<div class="blank5"></div>
<div class="flow">
  <div class="footer">
    <div class="footerBody">
      <Div class="block_s"> <?php echo $this->fetch('library/page_footer.lbi'); ?> </Div>
    </div>
  </div>
</div>
<script>
$(function(){


	
		
	setInterval(function(){
      $(".end_date").each(function(){
        var obj = $(this);
		
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		
		var myHZero = '';
 		var myMZero = '';
		var mySZero = '';
		if (myH < 10)
		{
			var myHZero = '0';
		}
		if (myM < 10)
		{
			var myMZero = '0';
		}
		if (myS < 10)
		{
			var mySZero = '0';
		}
			
			
        if(parseInt(myS+myM+myH+myD) > 0){
			if(show_day == 'show')
			{
				var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
				//var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
			}
			else
			{
				var str = '<span class="times">'+myHZero+myH+'</span><em>时</em><span class="times">'+myMZero+myM+'</span><em>分</em><span class="times">'+mySZero+myS+'</span><em>秒</em>';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);	
})
</script>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
