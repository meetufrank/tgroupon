<!-- $Id: article_list.htm 16783 2009-11-09 09:59:06Z liuhui $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/listtable.js')); ?>
<div class="form-div">
  <form action="fengchen.php?act=list" name="a" >
      <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      <!-- <select name="cat_id" >
        <option value="0"><?php echo $this->_var['lang']['all_cat']; ?></option>
        <option value="1">产品分成</option>
        <option value="2">销售分成</option>
        <option value="3">艺术家分成</option>
        <option value="4">厂商分成</option>
          <?php echo $this->_var['cat_select']; ?>
      </select> -->
      <select name="typeseach" >
        <option value="5">全部分类</option>
        <option value="1">产品分成</option>
        <option value="2">销售分成</option>
        <option value="3">艺术家分成</option>
        <option value="4">厂商分成</option>
      </select>
      分成类型 <input type="text" name="keyword" id="keyword" />
      用户名称<input type="text" name="yonghuname" id="yonghuname" />
     <!--  <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" /> -->
      <input type="button" value="搜索" class="button" />
  </form>
</div>

<form method="POST" action="article.php?act=batch_remove" name="listForm">
<!-- start cat list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellspacing='1' cellpadding='3' id='list-table'>
  <tr>
   <!--  <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a href="javascript:listTable.sort('article_id'); "><?php echo $this->_var['lang']['article_id']; ?></a><?php echo $this->_var['sort_article_id']; ?></th>
 -->
    <th><a>编号</th>
    <th><a>线下店名称</th>
    <th><a>商品名称</th>
    <th><a>用户名称</th>
    <th><a>分成金额</th>
    <th><a>分成类型</th>
    <th><a>获得提出用户</th>
    <!-- <th><?php echo $this->_var['lang']['handler']; ?></th> -->
  </tr>
  <?php $_from = $this->_var['fclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
   <tr>
      <td align="center"><?php echo $this->_var['list']['id']; ?></td>
      <td align="center"><?php echo $this->_var['list']['xxdname']; ?></td>
      <td align="center"><?php echo $this->_var['list']['goods_name']; ?></td>
      <td align="center"><?php echo $this->_var['list']['username']; ?></td>
      <td align="center"><?php echo $this->_var['list']['money']; ?></td>
      <td align="center"><?php if ($this->_var['list']['type'] == 0): ?>产品分成<?php elseif ($this->_var['list']['type'] == 1): ?>销售分成<?php elseif ($this->_var['list']['type'] == 2): ?>艺术家分成<?php elseif ($this->_var['list']['type'] == 3): ?>厂商分成<?php endif; ?></td>
      <td align="center"><?php echo $this->_var['list']['tcusername']; ?></td>
   </tr>
   <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_article']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>&nbsp;
    <td align="right" nowrap="true" colspan="8"><?php echo $this->fetch('page.htm'); ?></td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>

<div>
  <input type="hidden" name="act" value="batch" />
 <!--  <select name="type" id="selAction" onchange="changeAction()">
    <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
    <option value="button_remove"><?php echo $this->_var['lang']['button_remove']; ?></option>
    <option value="button_hide"><?php echo $this->_var['lang']['button_hide']; ?></option>
    <option value="button_show"><?php echo $this->_var['lang']['button_show']; ?></option>
    <option value="move_to"><?php echo $this->_var['lang']['move_to']; ?></option>
  </select> -->
<!--   <select name="target_cat" style="display:none">
    <option value="0"><?php echo $this->_var['lang']['select_please']; ?></option>
    <?php echo $this->_var['cat_select']; ?>
  </select> -->

  <!-- <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" id="btnSubmit" name="btnSubmit" class="button" disabled="true" /> -->
</div>
</form>
<!-- end cat list -->
<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }
	/**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'button_remove')
      {
          return confirm(drop_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }
	 function changeAction()
  {

      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';

      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

 // /* 搜索文章 */
 // function searchArticle()
 // {
 //    listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
 //    listTable.filter.cat_id = parseInt(document.forms['searchForm'].elements['cat_id'].value);
 //    listTable.filter.page = 1;
 //    listTable.loadList();
 // }

 
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
