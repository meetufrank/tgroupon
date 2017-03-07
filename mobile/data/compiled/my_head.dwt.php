<ul class="nav-tabs my-head-mobile" role="tablist">
        <li <?php if ($this->_var['my_active'] == 1): ?>class="active"<?php endif; ?>><a href="my_user.php?act=order_list<?php echo $this->_var['linestring2']; ?>" role="tab" data-toggle="tab">我的订单</a></li>
        <li <?php if ($this->_var['my_active'] == 2): ?>class="active"<?php endif; ?>><a href="my_grzxgdsc.php<?php echo $this->_var['linestring1']; ?>" role="tab" data-toggle="tab">我的收藏</a></li>
        <li <?php if ($this->_var['my_active'] == 3): ?>class="active"<?php endif; ?>><a href="" role="tab" data-toggle="tab">消息记录</a></li>
        <li <?php if ($this->_var['my_active'] == 4): ?>class="active"<?php endif; ?>><a href="my_usergrzx.php?act=address_list<?php echo $this->_var['linestring2']; ?>" role="tab" data-toggle="tab">管理地址</a></li>
       <?php if ($this->_var['is_income']): ?> <li <?php if ($this->_var['my_active'] == 5): ?>class="active"<?php endif; ?>><a href="my_income.php?act=income<?php echo $this->_var['linestring2']; ?>" role="tab" data-toggle="tab">商品销售</a></li><?php endif; ?>
      </ul>