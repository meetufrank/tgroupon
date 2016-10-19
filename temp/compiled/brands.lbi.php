<?php if ($this->_var['brand_list']): ?>
<div class="side_brd">
<div class="side_out">
<div class="side_list">
  <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_0_26132200_1461456462');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_0_26132200_1461456462']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
   <?php if (($this->_foreach['brand_foreach']['iteration'] - 1) <= 17): ?>
    
      <?php if ($this->_var['brand_0_26132200_1461456462']['brand_logo']): ?>
        <a href="<?php echo $this->_var['brand_0_26132200_1461456462']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand_0_26132200_1461456462']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_0_26132200_1461456462']['brand_name']); ?> (<?php echo $this->_var['brand_0_26132200_1461456462']['goods_num']; ?>)" /></a>
      <?php else: ?>
        <a href="<?php echo $this->_var['brand_0_26132200_1461456462']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand_0_26132200_1461456462']['brand_name']); ?> <?php if ($this->_var['brand_0_26132200_1461456462']['goods_num']): ?>(<?php echo $this->_var['brand_0_26132200_1461456462']['goods_num']; ?>)<?php endif; ?></a>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<div class="side_all">
    	<a href="brand.php" target="_blank"><img src="themes/miqinew/images/logo_more.gif" border="0"></a>
    </div>
</div>
<?php endif; ?>