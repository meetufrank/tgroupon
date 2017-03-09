<?php



/**

 * TGROUPON 管理中心文章处理程序文件

 * ============================================================================

 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。

 * 网站地址: http://www.tgroupon.cn；

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: liubo $

 * $Id: article.php 17217 2011-01-19 06:29:08Z liubo $

*/


define('IN_ECTOUCH', true);



require(dirname(__FILE__) . '/includes/init.php');

require_once(ROOT_PATH . 'include/fckeditor/fckeditor.php');

require_once(ROOT_PATH . 'include/cls_image_tianxin.php');



/*初始化数据交换对象 */

$exc   = new exchange($ecs->table("article"), $db, 'article_id', 'title');

//$image = new cls_image();



/* 允许上传的文件类型 */

$allow_file_types = '|GIF|JPG|PNG|BMP|SWF|DOC|XLS|PPT|MID|WAV|ZIP|RAR|PDF|CHM|RM|TXT|';



/*------------------------------------------------------ */

//-- 文章列表

/*------------------------------------------------------ */

if(!isset($_REQUEST['act'])){
    $_REQUEST['act']='list';
}
if ($_REQUEST['act'] == 'list')
{





    /* 取得过滤条件 */

    $filter = array();

    $smarty->assign('cat_select',  article_cat_list(0));

    $smarty->assign('ur_here',      $_LANG['03_article_list']);

   //$smarty->assign('action_link',  array('text' => $_LANG['article_add'], 'href' => 'article.php?act=add'));

    $smarty->assign('full_page',    1);

    $smarty->assign('filter',       $filter);



   // $article_list = get_articleslist();











   $fclist=get_fencheng('?act=list');

   /* 显示列表页面 */

    assign_query_info();

    $smarty->assign('fclist',$fclist['fencheng']);
$smarty->assign('filter',       $fclist['filter']);

    $smarty->assign('record_count', $fclist['record_count']);

    $smarty->assign('page_count',   $fclist['page_count']);
    $smarty->assign('sum',   $fclist['sum']);
    $smarty->assign('full_page',    1);

    $smarty->display('fengchen_list.htm');

}elseif ($_REQUEST['act'] == 'fenchen_query')

{



    $result = get_fencheng();



    $smarty->assign('fclist',   $result['fencheng']);

    $smarty->assign('filter',       $result['filter']);

    $smarty->assign('record_count', $result['record_count']);

    $smarty->assign('page_count',   $result['page_count']);

    $smarty->assign('sum',   $result['sum']);



    make_json_result($smarty->fetch('fengchen_list.htm'), '', array('filter' => $result['filter'], 'page_count' => $result['page_count'],'sum'=>$result['sum']));

}






function get_fencheng($param_str=''){


if($_REQUEST['typeseach']!=5&&isset($_REQUEST['typeseach'])){
    $where=" where f.type=".$_REQUEST['typeseach'];
}
if($_REQUEST['usercode']){
    $sql=" select user_id from ecs_users  where weiyi_num=".$_REQUEST['usercode'];
    $user_id=$GLOBALS['db']->getOne($sql);
    if(!$where){
         $where=" where f.get_shopid=".$user_id;
    }else{
        $where.="  and f.get_shopid=".$user_id;
    }
}
$result = get_filter($param_str);

    if ($result === false)

    {


/* 记录总数 */

        $sql = "SELECT COUNT(*) as counts,sum(f.money) as summoney FROM " .$GLOBALS['ecs']->table('fencheng')." as f ".$where;

        $row= $GLOBALS['db']->getRow($sql);
         $filter['record_count']=$row['counts'];
         $filter['sum']=$row['summoney'];


/* 分页大小 */

        $filter = page_and_size($filter);


 $fclistsql = "select f.id,eu1.user_name as xxdname,g.goods_name,eu2.user_name as username,f.money,f.type,f.get_shopid,f.status from `ecs_fencheng` as f

inner join `ecs_users` as eu1

on f.line_shopid = eu1.user_id

inner join `ecs_goods` as g

on f.goodsid = g.goods_id

inner join `ecs_users` as eu2

on f.userid = eu2.user_id

".$where." order by f.id desc  LIMIT " . $filter['start'] . ",".$filter['page_size'];
set_filter($filter, $sql,$param_str);

    }else{

        $sql    = $result['sql'];

        $filter = $result['filter'];


    }

$fc_list=$GLOBALS['db']->getAll($fclistsql);

foreach ($fc_list as $key => $value) {
     if($value['get_shopid']<=0){
           $fc_list[$key]['tcusername']='型色主义';
     }else{
        $sql="select user_name from ecs_users where user_id=".$value['get_shopid'];
        $username=$GLOBALS['db']->getOne($sql);
        $fc_list[$key]['tcusername']=$username;

     }

}

 return array('fencheng' => $fc_list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count'],'sum'=>$filter['sum']);




}

?>