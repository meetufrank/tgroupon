<?php

/**
 * TGROUPON 首页文件
 * ============================================================================
 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: index.php 17217 2011-01-19 06:29:08Z liubo $
*/
//
//
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

include('head.php');





$smarty->display('artist-list.dwt');

function get_artist_list(){
  //艺术家列表
 $sql  = 'SELECT user_id, user_name,hav_logo'.

            ' FROM ' .$GLOBALS['ecs']->table('admin_user')."WHERE role_id = 4  and hav_logo!=''";

    $ysj_list = $GLOBALS['db']->getAll($sql);
    return $ysj_list;
}

?>