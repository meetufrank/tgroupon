<?php

/**
 * TGROUPON 线下店签约管理程序
 * ============================================================================
 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: line_shop 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'include/lib_weixintong.php');

/*------------------------------------------------------ */
//-- 线下店签约帐号列表
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('users_manage');
    $sql = "SELECT rank_id, rank_name, min_points FROM ".$ecs->table('user_rank')." ORDER BY min_points ASC ";
    $rs = $db->query($sql);

    $ranks = array();
    while ($row = $db->FetchRow($rs))
    {
        $ranks[$row['rank_id']] = $row['rank_name'];
    }

    $smarty->assign('user_ranks',   $ranks);
    $smarty->assign('ur_here',      $_LANG['line_shop']);
    $smarty->assign('action_link',  array('text' => $_LANG['line_shop_add'], 'href'=>'line_shop.php?act=add'));
    $user_list = user_list();


    $smarty->assign('user_list',   $user_list['user_list']);
    $smarty->assign('filter',       $user_list['filter']);
    $smarty->assign('record_count', $user_list['record_count']);
    $smarty->assign('page_count',   $user_list['page_count']);
    $smarty->assign('full_page',    1);
    $smarty->assign('sort_user_id', '<img src="images/sort_desc.gif">');

    assign_query_info();
    $smarty->display('line_shop_list.htm');
}

/*------------------------------------------------------ */
//-- ajax返回线下店签约列表
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $user_list = user_list();


    $smarty->assign('user_list',    $user_list['user_list']);
    $smarty->assign('filter',       $user_list['filter']);
    $smarty->assign('record_count', $user_list['record_count']);
    $smarty->assign('page_count',   $user_list['page_count']);

    $sort_flag  = sort_flag($user_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('line_shop_list.htm'), '', array('filter' => $user_list['filter'], 'page_count' => $user_list['page_count']));
}

/*------------------------------------------------------ */
//-- 添加线下店签约帐号
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('admin_manage');

     /* 模板赋值 */
    $smarty->assign('ur_here',     $_LANG['line_shop']);
    $smarty->assign('action_link', array('href'=>'line_shop.php?act=list', 'text' => $_LANG['line_shop']));
    $smarty->assign('form_act',    'insert');
    $smarty->assign('action',      'add');
    $smarty->assign('select_role',  get_user_list());

    /* 显示页面 */
    assign_query_info();
    $smarty->display('line_shop_add.htm');
}

/*------------------------------------------------------ */
//-- 添加线下店签约帐号
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert')
{
    admin_priv('admin_manage');
    /* 初始化 $exc 对象 */
  $exc = new exchange($ecs->table("goods"), $db, 'goods_id', 'goods_sn');
    /* 判断商品货号是否存在 */
    if (!empty($_POST['goods']))
    {
        $is_only = $exc->is_only('goods_sn', stripslashes($_POST['goods']));

        if ($is_only)
        {
            sys_msg(sprintf('商品不存在', stripslashes($_POST['goods'])), 1);
        }else{
            $sql="select goods_id from ".$GLOBALS['ecs']->table('goods').' where goods_sn = \''.$_POST['goods'].'\'';
            $goods_id=$GLOBALS['db']->getOne($sql);

        }
    }
    if (empty($_POST['select_role'])) {
        sys_msg(sprintf('线下店必须选择', stripslashes($_POST['select_role'])), 1);
    }
    $sql=" select count(*) from".$ecs->table('line_shop')." where ls_goodsid=".$goods_id." and ls_userid=".$_POST['select_role'];
    $count=$GLOBALS['db']->getOne($sql);
    if ($count) {
        sys_msg(sprintf('该商品已和该线下店签约过', stripslashes($_POST['goods'])), 1);
    }


    $sql = "INSERT INTO ".$ecs->table('line_shop')." ( ls_goodsid, ls_userid, ls_ratio) ".
           "VALUES ( $goods_id, ".$_POST['select_role'].", ".$_POST['ratio'].")";

    $db->query($sql);
    $link[] = array('text' => '返回列表','href'=>'line_shop.php?act=list');
     sys_msg(sprintf('添加成功', $_POST['ratio']), 0, $link);





}







/*------------------------------------------------------ */
//-- 删除线下店签约
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'remove')
{
    /* 检查权限 */
    admin_priv('users_drop');

    $sql = "delete from ".$ecs->table('line_shop')." where ls_id=".$_GET['id'];

     $db->query($sql);



    /* 提示信息 */
    $link[] = array('text' => '返回列表','href'=>'line_shop.php?act=list');
    sys_msg(sprintf('删除成功', $_GET['id']), 0, $link);
}






/**
 *  返回线下店签约列表数据
 *
 * @access  public
 * @param
 *
 * @return void
 */
function user_list()
{



    $result = get_filter();
    if ($result === false)
    {
        /* 过滤条件 */
        $filter['keywords'] = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);

        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
        {
            $filter['keywords'] = json_str_iconv($filter['keywords']);
        }
        $filter['rank'] = empty($_REQUEST['rank']) ? 0 : ($_REQUEST['rank']);

        $ex_where = ' WHERE  1';
        if ($filter['rank']=='name')
        {
            if ($filter['keywords'])
            {
                $ex_where .= " AND user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";

            }
        }elseif ($filter['rank']=='num')
        {
            if ($filter['keywords'])
            {
                $ex_where .= " AND goods_sn = '" . mysql_like_quote($filter['keywords']) ."'";
            }
        }else{
            if ($filter['keywords'])
            {
                $ex_where .= " AND user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
            }
        }


        $filter['record_count'] = get_line_count($ex_where);



        /* 分页大小 */
        $filter = page_and_size($filter);



        $limit=" LIMIT " . $filter['start'] . ',' . $filter['page_size'];
        $order=" ORDER by  ls_addtime desc "  ;
        $sql=get_line_list($ex_where);
        $sql=$sql.$order.$limit;


        $filter['keywords'] = stripslashes($filter['keywords']);
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $user_list = $GLOBALS['db']->getAll($sql);


    $arr = array('user_list' => $user_list, 'filter' => $filter,
        'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);


    return $arr;
}


function get_line_list($where)
{

    $sql  = ' SELECT els.ls_id,els.ls_goodsid,els.ls_userid,els.ls_ratio,els.ls_addtime,eu.user_name,eg.goods_name,eg.goods_sn '.
            'FROM ' .$GLOBALS['ecs']->table('line_shop').' els ';

    $sql .=  ' INNER JOIN ecs_users eu on  els.ls_userid=eu.user_id ';

    $sql .=  ' INNER JOIN ecs_goods eg on els.ls_goodsid=eg.goods_id '.$where;


    return $sql;
}
function get_line_count($where)
{
    $list = array();
    $sql  = 'SELECT count(\'els.ls_id\')  '.
            'FROM ' .$GLOBALS['ecs']->table('line_shop').' els ';
    $sql .=  ' INNER JOIN ecs_users eu on  els.ls_userid=eu.user_id ';
    $sql .=  ' INNER JOIN ecs_goods eg on  els.ls_goodsid=eg.goods_id '.$where;
    $count = $GLOBALS['db']->getOne($sql);

    return $count;
}

function get_user_list(){

        $sql  = ' SELECT user_id,user_name '.
            'FROM ' .$GLOBALS['ecs']->table('users').' where is_line = 1';

            $count = $GLOBALS['db']->getAll($sql);



            return $count;



}

?>