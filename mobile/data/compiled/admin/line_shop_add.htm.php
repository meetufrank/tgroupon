<!-- $Id: privilege_info.htm 16616 2009-08-27 01:56:35Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<form name="theForm" method="post" enctype="multipart/form-data" onsubmit="return validate();">
<table width="100%">
  <tr>
    <td class="label">线下店选择</td>
    <td>
      <select name="select_role">
        <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
        <?php $_from = $this->_var['select_role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <option value="<?php echo $this->_var['list']['user_id']; ?>"  ><?php echo $this->_var['list']['user_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
    </td>
  </tr>
  <tr>
    <td class="label">商品货号</td>
    <td>
      <input type="text" name="goods" value="" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">分成比例</td>
    <td>
      <input type="text" name="ratio" value="" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>

  <?php if ($this->_var['user']['agency_name']): ?>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['agency']; ?></td>
    <td><?php echo $this->_var['user']['agency_name']; ?></td>
  </tr>
  <?php endif; ?>



  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
      </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/validator.js')); ?>
<script language="JavaScript">
var action = "<?php echo $this->_var['action']; ?>";
<!--

document.forms['theForm'].elements['goods'].focus();
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 切换增加按钮的状态
 */
function toggleAddButton()
{
    var sel = document.getElementById("all_menu_list");
    document.getElementById("btnAdd").disabled = (sel.selectedIndex > -1) ? false : true;
}

/**
 * 切换移出，上移，下移按钮状态
 */
function toggleButtonSatus()
{
    var sel = document.getElementById("menus_navlist");
    document.getElementById("btnRemove").disabled = (sel.selectedIndex > -1) ? false : true;
    document.getElementById("btnMoveUp").disabled = (sel.selectedIndex > -1) ? false : true;
    document.getElementById("btnMoveDown").disabled = (sel.selectedIndex > -1) ? false : true;
}

/**
 * 移动选定的列表项
 */
function moveOptions(direction)
{
    var sel = document.getElementById('menus_navlist');
    if (sel.selectedIndex == -1)
    {
        return;
    }

    len = sel.length
    for (i = 0; i < len; i++)
    {
        if (sel.options[i].selected)
        {
            if (i == 0 && direction == 'up')
            {
                return;
            }

            newOpt = sel.options[i].cloneNode(true);

            sel.removeChild(sel.options[i]);
            tarOpt = (direction == "up") ? sel.options[i-1] : sel.options[i+1]
            sel.insertBefore(newOpt, tarOpt);
            newOpt.selected = true;
            break;
        }
    }
}

/**
* 检查表单输入的数据
*/
function validate()
{
  get_navlist();

  validator = new Validator("theForm");
  validator.password = function (controlId, msg)
  {
    var obj = document.forms[this.formName].elements[controlId];
    obj.value = Utils.trim(obj.value);
    if (!(obj.value.length >= 6 && /\d+/.test(obj.value) && /[a-zA-Z]+/.test(obj.value)))
    {
      this.addErrorMsg(msg);
    }

  }

  validator.required("goods", user_name_empty);
  validator.required("ratio", email_empty, 1);


  if (action == "add")
  {
    if (document.forms['theForm'].elements['password'])
    {
      validator.password("password", password_invaild);
      validator.eqaul("password", "pwd_confirm", password_error);
    }
  }
  if (action == "edit" || action == "modif")
  {
    if (document.forms['theForm'].elements['old_password'].value.length > 0)
    {
      validator.password("new_password", password_invaild);
      validator.eqaul("new_password", "pwd_confirm", password_error);
    }
  }

  return validator.passed();
}

function get_navlist()
{
  if (!document.getElementById('nav_list[]'))
  {
    return;
  }

  document.getElementById('nav_list[]').value = joinItem(document.getElementById('menus_navlist'));
  //alert(document.getElementById('nav_list[]').value);
}
//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>