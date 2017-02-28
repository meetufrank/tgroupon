<!-- $Id: ads_js.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="form-div">
<form action="" method="post" name="js_code">
  <table width="100%">
    <tr>
      <td class="label"><?php echo $this->_var['lang']['outside_address']; ?></td>
      <td><input type="text" name="outside_address" size="30" /></td>
    </tr>
    <tr>
      <td class="label"><?php echo $this->_var['lang']['label_charset']; ?></td>
      <td><select name="charset" id="charset">
        <?php echo $this->html_options(array('options'=>$this->_var['lang_list'])); ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="button" name="gen_code" value="<?php echo $this->_var['lang']['add_js_code']; ?>" onclick="validate(); genCode(); autocopy()" class="button" />
      </div></td>
      </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <textarea name="ads_js" cols="70" rows="5"><?php echo $this->_var['js_code']; ?></textarea>
        </div></td>
    </tr>
  </table>
 </form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/validator.js')); ?>
<script language="JavaScript">
var elements = document.forms['js_code'].elements;
var url = '<?php echo $this->_var['url']; ?>';

<!--

document.forms['js_code'].elements['outside_address'].focus();

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("js_code");
    validator.required("outside_address",  no_outside_address);
    return validator.passed();
}
/**
 * 生成代码
 */
function genCode()
{
    // 生成代码
    var code = '<script src="' + url;
        code += '&from=' + encodeURI(elements['outside_address'].value);
        code += '&charset=' + elements['charset'].value;
        code += '"></script\>';
        elements['ads_js'].value = code;
}

function autocopy()
{
    if (Browser.isIE)
    {
        window.clipboardData.setData('text', document.js_code.ads_js.value);
    }
    document.forms['js_code'].elements['ads_js'].select();
}

//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>