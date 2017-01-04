



<form method="post" class="checkout-form container" id="address_form" action="my_usergrzx.php?act=editdizhi">
<input  name="addressid" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>">
<div><input type="text"  style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" name="consignee"/></div>
<?php $_from = $this->_var['shengshiqu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shengshiqu_0_22448700_1483175352');if (count($_from)):
    foreach ($_from AS $this->_var['shengshiqu_0_22448700_1483175352']):
?>

    <div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" name="tel" /></div>

    <div id="form-control"><div class="col-md-4 col-xs-12"><div class="form-element form-select">
    <select name="province" id="province"   class="form-control" >
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                 <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['shengshiqu_0_22448700_1483175352']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </select>
                 </div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">
                 <select name="city" id="city"  class="form-control">
                  <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                   <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                  <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['shengshiqu_0_22448700_1483175352']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                 </select>
                 </div></div><div class="col-md-4 col-xs-12"><div class="form-element form-select">
                 <select name="district" id="district"   class="form-control">
                   <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                     <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                    <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['shengshiqu_0_22448700_1483175352']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                 </div></div></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div><input type="text" style="width:98%; height:40px; padding:0 1%; margin-bottom:10px; border: 1px solid #ededed;" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" name="address"/></div>

    <div class="text-right visible-sm visible-xs"></div></form>
    ;





























