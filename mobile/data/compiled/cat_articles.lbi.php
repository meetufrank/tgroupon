
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <header>
        <span>
            网站公告
        </span>
    </header>
 <div class="clearfix article-list" style="padding:0px 20px; padding-bottom:10px;">
  <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['brand_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['brand_goods']['iteration']++;
?> 
    <li><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['title']; ?>"><?php echo $this->_var['goods']['title']; ?></a></li>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
    </div>
          
      
</section>
