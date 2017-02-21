<!-- $Id: user_account_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheaderxingtong.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'./js/validator.js')); ?>
<div class="main-div">
  <form action="user_account.php?act=xiugai" method="post" name="theForm" onsubmit="">
    <table width="100%">
     <!--  <tr>
        <td class="label"><?php echo $this->_var['lang']['user_id']; ?>：</td>
        <td>
          <input type="text" name="user_id" value="<?php echo $this->_var['user_name']; ?>" size="20"
          <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> readonly="true" <?php endif; ?>/>
        </td>
      </tr> -->
    <!--   <tr>
        <td class="label"><?php echo $this->_var['lang']['surplus_amount']; ?>：</td>
        <td>
          <input type="text" name="amount" value="<?php echo $this->_var['user_surplus']['amount']; ?>" size="20"
          <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> readonly="true" <?php endif; ?>/>
        </td>
      </tr> -->



     <!--  <tr>
        <td class="label"><?php echo $this->_var['lang']['pay_mothed']; ?>：</td>
        <td>
          <select name="payment" <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3): ?>disabled="true" <?php endif; ?>>
          <option value=""><?php echo $this->_var['lang']['please_select']; ?></option>
          <?php echo $this->html_options(array('options'=>$this->_var['payment_list'],'selected'=>$this->_var['user_surplus']['payment'])); ?>
          </select>
        </td>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['process_type']; ?>：</td>
        <td>
          <input type="radio" name="process_type" value="0"
          <?php if ($this->_var['user_surplus']['process_type'] == 0): ?> checked="true" <?php endif; ?> <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?>disabled="true" <?php endif; ?> /><?php echo $this->_var['lang']['surplus_type_0']; ?>
          <input type="radio" name="process_type" value="1"
          <?php if ($this->_var['user_surplus']['process_type'] == 1): ?> checked="true" <?php endif; ?> <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?>disabled="true" <?php endif; ?> /><?php echo $this->_var['lang']['surplus_type_1']; ?>
          <?php if ($this->_var['action'] == "edit" && ( $this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 )): ?>
          <input type="radio" name="process_type" value="2"
          <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['action'] == "edit"): ?> checked="true"<?php endif; ?><?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3): ?> disabled="true"<?php endif; ?> /><?php echo $this->_var['lang']['surplus_type_2']; ?>
          <input type="radio" name="process_type" value="3"
          <?php if ($this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> checked="true"<?php endif; ?><?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3): ?> disabled="true"<?php endif; ?> /><?php echo $this->_var['lang']['surplus_type_3']; ?>
          <?php endif; ?>
        </td>
      </tr>

      <tr>
        <td class="label"><?php echo $this->_var['lang']['surplus_notic']; ?>：</td>
        <td>
          <textarea name="admin_note" cols="55" rows="3"<?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3): ?> readonly="true" <?php endif; ?>><?php echo $this->_var['user_surplus']['admin_note']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['surplus_desc']; ?>：</td>
        <td>
          <textarea name="user_note" cols="55" rows="3"<?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3): ?> readonly="true" <?php endif; ?>><?php echo $this->_var['user_surplus']['user_note']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['status']; ?>：</td>
        <td>
          <input type="radio" name="is_paid" value="0"
          <?php if ($this->_var['user_surplus']['is_paid'] == 0): ?> checked="true"<?php endif; ?> <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> disabled="true"<?php endif; ?>/><?php echo $this->_var['lang']['unconfirm']; ?>
          <input type="radio" name="is_paid" value="1"
          <?php if ($this->_var['user_surplus']['is_paid'] == 1): ?> checked="true" <?php endif; ?> <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> disabled="true"<?php endif; ?>/><?php echo $this->_var['lang']['confirm']; ?>
          <input type="radio" name="is_paid" value="2"
          <?php if ($this->_var['user_surplus']['is_paid'] == 2): ?> checked="true" <?php endif; ?> <?php if ($this->_var['user_surplus']['process_type'] == 2 || $this->_var['user_surplus']['process_type'] == 3 || $this->_var['action'] == "edit"): ?> disabled="true"<?php endif; ?>/><?php echo $this->_var['lang']['cancel']; ?>
        </td>
      </tr> -->
      <?php $_from = $this->_var['txbianjixs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
              <td class="label">空间主名称:</td>
              <td>

                <input type="text" readOnly="true" name="amount" value="<?php echo $this->_var['item']['user_name']; ?>" size="20">
                <!-- 提现用户id -->
                <input type="hidden"  name="lineshopid" id="lineshopid" value="<?php echo $this->_var['item']['line_shopid']; ?>" size="20">
                <!-- 提现用户id -->
                <input type="hidden"  id="txid" value="<?php echo $this->_var['item']['id']; ?>" size="20" name="txid">
              </td>
            </tr>
            <tr>
              <td class="label">提现金额:</td>
              <td>
                <input type="text" readOnly="true" id="money" name="amount" value="<?php echo $this->_var['item']['money']; ?>" size="20">
              </td>
            </tr>
            <tr>
              <td class="label">提现时间:</td>
              <td>
                <input type="text" readOnly="true" name="amount" value="<?php echo $this->_var['item']['time']; ?>" size="20">
              </td>
            </tr>
            <tr>
              <td class="label">审核状态:</td>
              <td>
            <!--     <input type="radio" name="radioname" value="0" <?php if ($this->_var['item']['status'] == 0): ?> checked<?php endif; ?>>未受理 -->
                <input type="radio" name="radioname" value="0" <?php if ($this->_var['item']['status'] == 0): ?> checked<?php endif; ?>>未受理
                <input type="radio" name="radioname" value="1" <?php if ($this->_var['item']['status'] == 1): ?> checked<?php endif; ?>>已受理
                <input type="radio" name="radioname" value="2" <?php if ($this->_var['item']['status'] == 2): ?> checked<?php endif; ?>>拒绝
                <input type="radio" name="radioname" value="3" <?php if ($this->_var['item']['status'] == 3): ?> checked<?php endif; ?>>已完成
              </td>
            </tr>

                <tr>
                  <td class="label">备注:</td>
                  <td><textarea name="beizhu" id="beizhu" cols="40" rows="5"><?php echo $this->_var['txlog']['remark']; ?></textarea></td>
                </tr>
                <tr>
                  <td class="label">拒绝理由:</td>
                  <td><textarea name="objection" id="objection" cols="40" rows="5"><?php echo $this->_var['txlog']['objection']; ?></textarea></td>
                </tr>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    <!--   <tr>
        <td class="label">&nbsp;</td>
        <td>
          <input type="hidden" name="id" value="<?php echo $this->_var['user_surplus']['id']; ?>" />
          <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
          <?php if ($this->_var['user_surplus']['process_type'] == 0 || $this->_var['user_surplus']['process_type'] == 1): ?>
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
          <?php endif; ?>
        </td>
      </tr> -->
      <tr>
        <td colspan="2" align="center">
             <input id="btn" type="submit" value="确定" class="button"   />
        </td>
     </tr>
    </table>
  </form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js')); ?>

<script language="JavaScript">
<!--


//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>