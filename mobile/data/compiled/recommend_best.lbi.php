<?php if ($this->_var['best_goods']): ?>
<style type="text/css">
.picScroll3{margin:10px auto; text-align:center;}
.picScroll3 .bd ul{width:100%;  float:left; padding-top:10px;}
.picScroll3 .bd li{width:50%; float:left; font-size:14px; text-align:center;}
.picScroll3 .bd li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll3 .bd li img{width:150px; height:150px;}
.picScroll3 .hd{display:None}



.picScroll3 .bd1 ul{width:100%;  float:left; padding-top:10px;}
.picScroll3 .bd1 li{width:50%; float:left; font-size:14px; text-align:center;}
.picScroll3 .bd1 li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll3 .bd1 li img{width:150px; height:150px;}
</style>
<div class="blank2"></div>
<div class="item_show_box2 box1 region" style="overflow:hidden">

    <div id="picScroll3" class="picScroll3">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd1">
            <ul>
                <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_44923800_1476847496');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_44923800_1476847496']):
        $this->_foreach['best_goods']['iteration']++;
?>
                <!--jeffxieli><a href="<?php echo $this->_var['goods_0_44923800_1476847496']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_0_44923800_1476847496']['thumb']; ?>" /></a-->
                <li><a href="<?php echo $this->_var['goods_0_44923800_1476847496']['url']; ?>"><img src="../<?php echo $this->_var['goods_0_44923800_1476847496']['thumb']; ?>" /></a>
                <br/>
                <?php if ($this->_var['goods_0_44923800_1476847496']['promote_price'] != ""): ?> 
				<font style="font-size:8px">市场价</font><del style="font-size: .675rem;"><?php echo $this->_var['goods_0_44923800_1476847496']['market_price']; ?></del>
                <span class="price_s"> <?php echo $this->_var['goods_0_44923800_1476847496']['promote_price']; ?> </span> 
                <?php else: ?> 
				<font style="font-size:8px">市场价</font><del style="font-size: .675rem;"><?php echo $this->_var['goods_0_44923800_1476847496']['market_price']; ?></del>
                <span class="price_s"> <?php echo $this->_var['goods_0_44923800_1476847496']['shop_price']; ?> </span>
				
                <?php endif; ?>
                <br><?php echo sub_str(htmlspecialchars($this->_var['goods_0_44923800_1476847496']['name']),12); ?>
                </li>
                <?php if ($this->_foreach['best_goods']['iteration'] % 2 == 0 && $this->_foreach['best_goods']['iteration'] != $this->_foreach['best_goods']['total']): ?></ul><ul><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>

    <div class="position_a_lt">
      <div> </div>
      <a href="search.php?intro=best">
      <p> 精品 </p>
      <p class="ico_04"> </p>
      </a> </div>
    <div class="position_a_rb">
      <div> </div>
      <a href="search.php?intro=best">
      <p class="ico_04_b"> </p>
      <p> 更多 </p>
      </a> </div>
  </div>

<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll3",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>
<?php endif; ?>
