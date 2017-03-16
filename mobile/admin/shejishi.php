<?php



/**

 * TGROUPON 会员管理程序

 * ============================================================================

 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。

 * 网站地址: http://www.tgroupon.cn；

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: liubo $

 * $Id: users.php 17217 2011-01-19 06:29:08Z liubo $

*/



define('IN_ECTOUCH', true);



require(dirname(__FILE__) . '/includes/init.php');

require(ROOT_PATH . '/include/upload.php');



/*------------------------------------------------------ */

//-- 用户帐号列表

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

    $smarty->assign('ur_here',      $_LANG['03_users_list']);

    $smarty->assign('action_link',  array('text' => $_LANG['04_users_add'], 'href'=>'users.php?act=add'));

    $user_list = user_list();

	$user_list1=$user_list['user_list'];

	foreach($user_list1 as $aa){

		$user_id=$aa['user_id'];

		$sql = "SELECT count('uid')  FROM ecs_users  where parent_id='$user_id' ";

		$number = $db->query($sql);

		$number =mysql_fetch_array($number);

		$aa['number']=$number[0];

		$kk[]=$aa;

	}

     // print_r($user_list);

    $smarty->assign('user_list',   $kk);

    $smarty->assign('filter',       $user_list['filter']);

    $smarty->assign('record_count', $user_list['record_count']);

    $smarty->assign('page_count',   $user_list['page_count']);

    $smarty->assign('full_page',    1);

    $smarty->assign('sort_user_id', '<img src="images/sort_desc.gif">');



    assign_query_info();

    $smarty->display('shejishi_list.htm');

}



/*------------------------------------------------------ */

//-- ajax返回用户列表

/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'query')

{

    $user_list = user_list();

	$user_list1=$user_list['user_list'];

	foreach($user_list1 as $aa){

		$user_id=$aa['user_id'];

		$sql = "SELECT count('uid')  FROM ecs_users  where parent_id='$user_id' ";

		$number = $db->query($sql);

		$number =mysql_fetch_array($number);

		$aa['number']=$number[0];

		$kk[]=$aa;

	}



    $smarty->assign('user_list',    $kk);

    $smarty->assign('filter',       $user_list['filter']);

    $smarty->assign('record_count', $user_list['record_count']);

    $smarty->assign('page_count',   $user_list['page_count']);



    $sort_flag  = sort_flag($user_list['filter']);

    $smarty->assign($sort_flag['tag'], $sort_flag['img']);



    make_json_result($smarty->fetch('shejishi_list.htm'), '', array('filter' => $user_list['filter'], 'page_count' => $user_list['page_count']));

}



/*------------------------------------------------------ */

//-- 添加会员帐号

/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'add')

{

    /* 检查权限 */

    admin_priv('users_manage');





    $smarty->display('shejishi_add.htm');

}



/*------------------------------------------------------ */

//-- 添加会员帐号

/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'insert')

{

  $user_name = $_POST['user_name'];

  if(empty($user_name)){

      sys_msg(sprintf('设计师用户名不能为空', stripslashes($_POST['user_name'])), 1);

  }




  if(!empty($_POST['user_name'])){

     $sql=" select user_name from  ecs_admin_user where user_name='".$_POST['user_name']."' and role_id = 4";


     $user_names=$GLOBALS['db']->getOne($sql);

    if($user_names == $user_name){

        sys_msg(sprintf('设计师用户名已存在', stripslashes($_POST['user_name'])), 1);

    }
}

  if(!empty($_POST['user_code'])){

     $sql=" select user_id from  ecs_users where weiyi_num='".$_POST['user_code']."'";

     $user_id=$GLOBALS['db']->getOne($sql);

    if(!$user_id){

        sys_msg(sprintf('请输入正确的用户编号', stripslashes($_POST['user_code'])), 1);

    }

    $sql=" UPDATE ecs_users set is_art=1 where user_id=".$user_id;

    $GLOBALS['db']->query($sql);

  }

if(!$user_id){

    sys_msg(sprintf('需要绑定用户编号', stripslashes($_POST['user_code'])), 1);

  }

if($_FILES['pic']['name']){

                  //图片上传处理

 $up = new FileUpload();

    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)

    $path="images/logo/";

    $up -> set("path", ROOT_PATH.$path);

    $up -> set("maxsize", 5000000);

    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));

    $up -> set("israndname", true);





    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false

    if($up -> upload("pic")) {

        // echo '<pre>';

        // //获取上传后文件名子

        // var_dump($up->getFileName());

        // echo '</pre>';

        $url_img=$config['mobilesite_url'].$path.$up->getFileName();







    } else {

        // echo '<pre>';

        // //获取上传失败以后的错误提示

        // var_dump($up->getErrorMsg());

        // echo '</pre>';

        sys_msg($up->getErrorMsg(), 1);

    }

}









if($_FILES['sjspic']['name']){
//图片上传处理
 $up = new FileUpload();

    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)

    $path="images/sjsbanner/";

    $up -> set("path", ROOT_PATH.$path);

    $up -> set("maxsize", 5000000);

    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));

    $up -> set("israndname", true);

    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名字 sjspic, 如果成功返回true, 失败返回false

    if($up -> upload("sjspic")) {

        // echo '<pre>';

        // //获取上传后文件名子

        // var_dump($up->getFileName());

        // echo '</pre>';

        $url_imgbanner=$config['mobilesite_url'].$path.$up->getFileName();
    } else {

        // echo '<pre>';

        // //获取上传失败以后的错误提示

        // var_dump($up->getErrorMsg());

        // echo '</pre>';

        sys_msg($up->getErrorMsg(), 1);

    }
}

// print_r($url_imgbanner);exit;







    /* 获取添加日期及密码 */

    $add_time = gmtime();

    //获取设计师介绍
    $content = $_POST['content'];


    $password  = md5($_POST['password']);

    $role_id = '';

    $action_list = '';

    if (!empty($_POST['select_role']))

    {

        $sql = "SELECT action_list FROM " . $ecs->table('role') . " WHERE role_id = '".$_POST['select_role']."'";

        $row = $db->getRow($sql);

        $action_list = $row['action_list'];

        $role_id = $_POST['select_role'];

    }



        $sql = "SELECT nav_list FROM " . $ecs->table('admin_user') . " WHERE action_list = 'all'";

        $row = $db->getRow($sql);





    $sql = "INSERT INTO ".$ecs->table('admin_user')." (user_name, email, password, add_time, nav_list, action_list, role_id,country,hav_logo,sjsbanner,ysj_fencheng,ysj_tixian,sjsintro) ".

           "VALUES ('".trim($_POST['user_name'])."', '".trim($_POST['email'])."', '$password', '$add_time', '$row[nav_list]', '$action_list', 4,'".trim($_POST['country'])."','"
           .$url_img."','".$url_imgbanner."','"
           .trim($_POST['ysj_fencheng'])."',".$user_id.",'$content')";





    $db->query($sql);



    /* 转入权限分配列表 */

    $new_id = $db->Insert_ID();



    /* 手机端后台权限添加 */

    $sql = "insert into ".$ecs->table('touch_priv')." (user_id, action_list) values ($new_id, '$action_list')";

    $db->query($sql);



    /*添加链接*/
    $sjslist = "设计师列表";
    $link[0]['text'] = $sjslist;

    $link[0]['href'] = 'shejishi.php?act=list';



    $link[1]['text'] = $_LANG['continue_add'];

    $link[1]['href'] = 'shejishi.php?act=add';



    sys_msg($_LANG['add'] . "&nbsp;" .$_POST['user_name'] . "&nbsp;" . $_LANG['action_succeed'],0, $link);



    /* 记录管理员操作 */

    admin_log($_POST['user_name'], 'add', 'privilege');





}


//设计师修改显示
elseif ($_REQUEST['act'] == 'edit')

{

    /* 检查权限 */

    admin_priv('users_manage');
    $id = $_REQUEST['id'];


        /* 获取艺术家信息 */

    $sql = "SELECT user_id, user_name, email, password, agency_id, role_id,country,ysj_fencheng,ysj_tixian,sjsintro FROM " .$ecs->table('admin_user').

           " WHERE user_id = '".$_REQUEST['id']."'";

    $user_info = $db->getRow($sql);
    //print_r($user_info);exit;
     $smarty->assign('user_info',$user_info);

    $sql=" select weiyi_num from ecs_users where user_id=".$user_info['ysj_tixian'];

     $weiyi_num = $db->getOne($sql);

     $smarty->assign('weiyi_num',$weiyi_num);


    $smarty->display('shejishi_edit.htm');

}


//设计师修改
elseif ($_REQUEST['act'] == 'xiugai'){

   $userid = $_POST['userid'];
   // print_r($userid);exit;

  $user_name = $_POST['user_name'];
  if(empty($user_name)){

      sys_msg(sprintf('设计师用户名不能为空', stripslashes($_POST['user_name'])), 1);

  }




  if(!empty($_POST['user_name'])){

     $sql=" select user_name from  ecs_admin_user where user_name='".$_POST['user_name']."' and role_id = 4 and user_id != $userid";


     $user_names=$GLOBALS['db']->getOne($sql);

    if($user_names == $user_name){

        sys_msg(sprintf('设计师用户名已存在', stripslashes($_POST['user_name'])), 1);

    }
}

  if(!empty($_POST['user_code'])){

     $sql=" select user_id from  ecs_users where weiyi_num='".$_POST['user_code']."'";

     $user_id=$GLOBALS['db']->getOne($sql);

    if(!$user_id){

        sys_msg(sprintf('请输入正确的用户编号', stripslashes($_POST['user_code'])), 1);

    }

    $sql=" UPDATE ecs_users set is_art=1 where user_id=".$user_id;

    $GLOBALS['db']->query($sql);

  }

if(!$user_id){

    sys_msg(sprintf('需要绑定用户编号', stripslashes($_POST['user_code'])), 1);

  }

if($_FILES['pic']['name']){

                  //图片上传处理

 $up = new FileUpload();

    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)

    $path="images/logo/";

    $up -> set("path", ROOT_PATH.$path);

    $up -> set("maxsize", 5000000);

    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));

    $up -> set("israndname", true);





    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false

    if($up -> upload("pic")) {

        // echo '<pre>';

        // //获取上传后文件名子

        // var_dump($up->getFileName());

        // echo '</pre>';

        $url_img=$config['mobilesite_url'].$path.$up->getFileName();







    } else {

        // echo '<pre>';

        // //获取上传失败以后的错误提示

        // var_dump($up->getErrorMsg());

        // echo '</pre>';

        sys_msg($up->getErrorMsg(), 1);

    }

}









if($_FILES['sjspic']['name']){
//图片上传处理
 $up = new FileUpload();

    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)

    $path="images/sjsbanner/";

    $up -> set("path", ROOT_PATH.$path);

    $up -> set("maxsize", 5000000);

    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));

    $up -> set("israndname", true);

    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名字 sjspic, 如果成功返回true, 失败返回false

    if($up -> upload("sjspic")) {

        // echo '<pre>';

        // //获取上传后文件名子

        // var_dump($up->getFileName());

        // echo '</pre>';

        $url_imgbanner=$config['mobilesite_url'].$path.$up->getFileName();
    } else {

        // echo '<pre>';

        // //获取上传失败以后的错误提示

        // var_dump($up->getErrorMsg());

        // echo '</pre>';

        sys_msg($up->getErrorMsg(), 1);

    }
}

// print_r($url_imgbanner);exit;

//设计师名称


 //设计师分成
 $ysj_fencheng = $_POST['ysj_fencheng'];


 //设计师logo

if($url_img == ''){
   $sqllogosql = "select hav_logo from `ecs_admin_user` where user_id = $userid";
   $url_img = $db->getOne($sqllogosql);
}



//设计师详情banner图

if($url_imgbanner == ''){
   $sqlimgbannerql = "select sjsbanner from `ecs_admin_user` where user_id = $userid";
   $url_imgbanner = $db->getOne($sqlimgbannerql);
}

  //国家
 $country = $_POST['country'];





  //绑定用户编号
 $user_code = $_POST['user_code'];

$bianhaosql = "select user_id from `ecs_users` where weiyi_num = '$user_code'";
$bianhaos = $db->getOne($bianhaosql);



//设计师简介
$content = $_POST['content'];



$sjsupdatesql = "UPDATE `ecs_admin_user` SET user_name = '$user_name', ysj_fencheng = $ysj_fencheng,hav_logo = '$url_img',sjsbanner = '$url_imgbanner',country = '$country', ysj_tixian = $bianhaos,sjsintro = '$content'
WHERE user_id = $userid and role_id = 4";

$sjsupdate = $db->query($sjsupdatesql);




    /* 获取添加日期及密码 */

    $add_time = gmtime();



        $link[0]['text'] = '继续修改';

        $link[0]['href'] = "shejishi.php?act=edit&id=$userid";

        $link[1]['text'] = '返回设计师列表页';

        $link[1]['href'] = 'shejishi.php?act=list';

         sys_msg('操作成功', 0, $link);

         exit;


}

//删除设计师
elseif ($_REQUEST['act'] == 'remove')

{

    /* 检查权限 */

    admin_priv('users_drop');
    $id =  intval($_REQUEST['id']);




    $sql = "DELETE from `ecs_admin_user` where user_id = $id and role_id = 4";

        $username = $db -> query($sql);

        $link[0]['text'] = '删除设计师成功,返回列表页!';

        $link[0]['href'] = 'shejishi.php?act=list';

        sys_msg('操作成功', 0, $link);

        exit;


}

/*------------------------------------------------------ */

//-- 编辑用户帐号

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'edit')

{

    /* 检查权限 */

    admin_priv('users_manage');



    $sql = "SELECT u.user_name, u.sex, u.birthday, u.pay_points, u.rank_points, u.user_rank , u.user_money, u.frozen_money, u.credit_line, u.parent_id, u2.user_name as parent_username, u.qq, u.msn, u.office_phone, u.home_phone, u.mobile_phone,u.is_line,u.hav_logo,u.hav_money,u.tj_fencheng,u.xs_fencheng".

        " FROM " .$ecs->table('users'). " u LEFT JOIN " . $ecs->table('users') . " u2 ON u.parent_id = u2.user_id WHERE u.user_id='$_GET[id]'";



    $row = $db->GetRow($sql);

    $row['user_name'] = addslashes($row['user_name']);

    $users  =& init_users();

    $user   = $users->get_user_info($row['user_name']);



    $sql = "SELECT u.user_id, u.sex, u.birthday, u.pay_points, u.rank_points, u.user_rank , u.user_money, u.frozen_money, u.credit_line, u.parent_id, u2.user_name as parent_username, u.qq, u.msn,

    u.office_phone, u.home_phone, u.mobile_phone,u.is_line,u.hav_logo,u.hav_money,u.tj_fencheng,u.xs_fencheng".

        " FROM " .$ecs->table('users'). " u LEFT JOIN " . $ecs->table('users') . " u2 ON u.parent_id = u2.user_id WHERE u.user_id='$_GET[id]'";



    $row = $db->GetRow($sql);



    if ($row)

    {

        $user['user_id']        = $row['user_id'];

        $user['sex']            = $row['sex'];

        $user['birthday']       = date($row['birthday']);

        $user['pay_points']     = $row['pay_points'];

        $user['rank_points']    = $row['rank_points'];

        $user['user_rank']      = $row['user_rank'];

        $user['user_money']     = $row['user_money'];

        $user['frozen_money']   = $row['frozen_money'];

        $user['credit_line']    = $row['credit_line'];

        $user['formated_user_money'] = price_format($row['user_money']);

        $user['formated_frozen_money'] = price_format($row['frozen_money']);

        $user['parent_id']      = $row['parent_id'];

        $user['parent_username']= $row['parent_username'];

        $user['qq']             = $row['qq'];

        $user['msn']            = $row['msn'];

        $user['office_phone']   = $row['office_phone'];

        $user['home_phone']     = $row['home_phone'];

        $user['mobile_phone']   = $row['mobile_phone'];

        $user['is_line']   = $row['is_line'];

        $user['hav_logo']  = $row['hav_logo'];

        $user['hav_money']  = $row['hav_money'];

        $user['tj_fencheng'] = $row['tj_fencheng'];

        $user['xs_fencheng'] = $row['xs_fencheng'];

    }

    else

    {

          $link[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');

          sys_msg($_LANG['username_invalid'], 0, $links);

//        $user['sex']            = 0;

//        $user['pay_points']     = 0;

//        $user['rank_points']    = 0;

//        $user['user_money']     = 0;

//        $user['frozen_money']   = 0;

//        $user['credit_line']    = 0;

//        $user['formated_user_money'] = price_format(0);

//        $user['formated_frozen_money'] = price_format(0);

     }



    /* 取出注册扩展字段 */

    $sql = 'SELECT * FROM ' . $ecs->table('reg_fields') . ' WHERE type < 2 AND display = 1 AND id != 6 ORDER BY dis_order, id';

    $extend_info_list = $db->getAll($sql);



    $sql = 'SELECT reg_field_id, content ' .

           'FROM ' . $ecs->table('reg_extend_info') .

           " WHERE user_id = $user[user_id]";

    $extend_info_arr = $db->getAll($sql);



    $temp_arr = array();

    foreach ($extend_info_arr AS $val)

    {

        $temp_arr[$val['reg_field_id']] = $val['content'];

    }



    foreach ($extend_info_list AS $key => $val)

    {

        switch ($val['id'])

        {

            case 1:     $extend_info_list[$key]['content'] = $user['msn']; break;

            case 2:     $extend_info_list[$key]['content'] = $user['qq']; break;

            case 3:     $extend_info_list[$key]['content'] = $user['office_phone']; break;

            case 4:     $extend_info_list[$key]['content'] = $user['home_phone']; break;

            case 5:     $extend_info_list[$key]['content'] = $user['mobile_phone']; break;

            default:    $extend_info_list[$key]['content'] = empty($temp_arr[$val['id']]) ? '' : $temp_arr[$val['id']] ;

        }

    }



    $smarty->assign('extend_info_list', $extend_info_list);



    /* 当前会员推荐信息 */

    $affiliate = unserialize($GLOBALS['_CFG']['affiliate']);

    $smarty->assign('affiliate', $affiliate);



    empty($affiliate) && $affiliate = array();



    if(empty($affiliate['config']['separate_by']))

    {

        //推荐注册分成

        $affdb = array();

        $num = count($affiliate['item']);

        $up_uid = "'$_GET[id]'";

        for ($i = 1 ; $i <=$num ;$i++)

        {

            $count = 0;

            if ($up_uid)

            {

                $sql = "SELECT user_id FROM " . $ecs->table('users') . " WHERE parent_id IN($up_uid)";

                $query = $db->query($sql);

                $up_uid = '';

                while ($rt = $db->fetch_array($query))

                {

                    $up_uid .= $up_uid ? ",'$rt[user_id]'" : "'$rt[user_id]'";

                    $count++;

                }

            }

            $affdb[$i]['num'] = $count;

        }

        if ($affdb[1]['num'] > 0)

        {

            $smarty->assign('affdb', $affdb);

        }

    }





    assign_query_info();

    $smarty->assign('ur_here',          $_LANG['users_edit']);

    $smarty->assign('action_link',      array('text' => $_LANG['03_users_list'], 'href'=>'users.php?act=list&' . list_link_postfix()));

    $smarty->assign('user',             $user);

    $smarty->assign('form_action',      'update');

    $smarty->assign('special_ranks',    get_rank_list(true));

    $smarty->display('user_info.htm');

}

// 生成二维码链接

elseif($_REQUEST['act'] == 'erweima'){

   $userid = $_GET['id'];

   $smarty->assign('userid',$userid);



   $smarty->display('user_infoerweima.htm');

}

// 根据货号查询商品id

elseif($_REQUEST['act'] == 'goodsid'){

   $erweimalainjie = $config['erweimalainjie'];




   $huohaoid = $_POST['huohao'];

   $userid = $_POST['userid'];

   $sql = "select goods_id from ecs_goods where goods_sn = '$huohaoid'";

   $goodsid = $db->getOne($sql);



     if($goodsid){
       $data['msg']="http://".$erweimalainjie."mobile/shop-single.php?id=$goodsid&"."lineshop=".$userid;

       $data['goodsid']=$goodsid;

       $data['userid']=$userid;

       echo json_encode($data);

     }else{

         $data['msg']='error';

         $data['aa']='aa';

        echo json_encode($data);



     }

    exit;



}

/*------------------------------------------------------ */

//-- 更新用户帐号

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'update')

{

    /* 检查权限 */

    admin_priv('users_manage');

    $username = empty($_POST['username']) ? '' : trim($_POST['username']);

    $password = empty($_POST['password']) ? '' : trim($_POST['password']);

    $email = empty($_POST['email']) ? '' : trim($_POST['email']);

    $sex = empty($_POST['sex']) ? 0 : intval($_POST['sex']);

    $sex = in_array($sex, array(0, 1, 2)) ? $sex : 0;

    $birthday = $_POST['birthdayYear'] . '-' .  $_POST['birthdayMonth'] . '-' . $_POST['birthdayDay'];

    $rank = empty($_POST['user_rank']) ? 0 : intval($_POST['user_rank']);

    $credit_line = empty($_POST['credit_line']) ? 0 : floatval($_POST['credit_line']);

    $sf = empty($_POST['shenfen']) ? 0 : intval($_POST['shenfen']);

    $fc = empty($_POST['tj_fencheng']) ? 0 : intval($_POST['tj_fencheng']);

    $xs = empty($_POST['xs_fencheng']) ? 0 : intval($_POST['xs_fencheng']);



    if ($_FILES['pic']['name']) {





              //图片上传处理

 $up = new FileUpload();

    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)

    $path="images/logo/";

    $up -> set("path", ROOT_PATH.$path);

    $up -> set("maxsize", 2000000);

    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));

    $up -> set("israndname", true);





    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false

    if($up -> upload("pic")) {

        // echo '<pre>';

        // //获取上传后文件名子

        // var_dump($up->getFileName());

        // echo '</pre>';

        $url_img=$config['mobilesite_url'].$path.$up->getFileName();







    } else {

        // echo '<pre>';

        // //获取上传失败以后的错误提示

        // var_dump($up->getErrorMsg());

        // echo '</pre>';

       sys_msg($up->getErrorMsg(), 1);

    }

 }







    $users  =& init_users();



    if (!$users->edit_user(array('username'=>$username, 'password'=>$password, 'email'=>$email, 'gender'=>$sex, 'bday'=>$birthday), 1))

    {



        if ($users->error == ERR_EMAIL_EXISTS)

        {

            $msg = $_LANG['email_exists'];

        }

        else

        {

            $msg = $_LANG['edit_user_failed'];

        }



        //sys_msg($msg, 1);

        sys_msg('修改成功', 1);

    }

    if(!empty($password))

    {

			$sql="UPDATE ".$ecs->table('users'). "SET `ec_salt`='0' WHERE user_name= '".$username."'";

			$db->query($sql);

	}



    /* 更新用户扩展字段的数据 */

    $sql = 'SELECT id FROM ' . $ecs->table('reg_fields') . ' WHERE type = 0 AND display = 1 ORDER BY dis_order, id';   //读出所有扩展字段的id

    $fields_arr = $db->getAll($sql);

    $user_id_arr = $users->get_profile_by_name($username);

    $user_id = $user_id_arr['user_id'];



    foreach ($fields_arr AS $val)       //循环更新扩展用户信息

    {

        $extend_field_index = 'extend_field' . $val['id'];

        if(isset($_POST[$extend_field_index]))

        {

            $temp_field_content = strlen($_POST[$extend_field_index]) > 100 ? mb_substr($_POST[$extend_field_index], 0, 99) : $_POST[$extend_field_index];



            $sql = 'SELECT * FROM ' . $ecs->table('reg_extend_info') . "  WHERE reg_field_id = '$val[id]' AND user_id = '$user_id'";

            if ($db->getOne($sql))      //如果之前没有记录，则插入

            {

                $sql = 'UPDATE ' . $ecs->table('reg_extend_info') . " SET content = '$temp_field_content' WHERE reg_field_id = '$val[id]' AND user_id = '$user_id'";

            }

            else

            {

                $sql = 'INSERT INTO '. $ecs->table('reg_extend_info') . " (`user_id`, `reg_field_id`, `content`) VALUES ('$user_id', '$val[id]', '$temp_field_content')";

            }

            $db->query($sql);

        }

    }





    /* 更新会员的其它信息 */

    $other =  array();

    $other['credit_line'] = $credit_line;

    $other['user_rank'] = $rank;

    $other['is_line'] = $sf;

    $other['hav_logo'] = $url_img;



    $other['msn'] = isset($_POST['extend_field1']) ? htmlspecialchars(trim($_POST['extend_field1'])) : '';

    $other['qq'] = isset($_POST['extend_field2']) ? htmlspecialchars(trim($_POST['extend_field2'])) : '';

    $other['office_phone'] = isset($_POST['extend_field3']) ? htmlspecialchars(trim($_POST['extend_field3'])) : '';

    $other['home_phone'] = isset($_POST['extend_field4']) ? htmlspecialchars(trim($_POST['extend_field4'])) : '';

    $other['mobile_phone'] = isset($_POST['extend_field5']) ? htmlspecialchars(trim($_POST['extend_field5'])) : '';

	$other['parent_id'] = isset($_POST['parent_id']) ? htmlspecialchars(trim($_POST['parent_id'])) : '';

    $other['tj_fencheng'] = isset($_POST['tj_fencheng']) ? htmlspecialchars(trim($_POST['tj_fencheng'])) : '';

    $other['xs_fencheng'] = isset($_POST['xs_fencheng']) ? htmlspecialchars(trim($_POST['xs_fencheng'])) : '';

	$parent_id=$other['parent_id'];



	if(!empty($parent_id))

	{

	$sql = 'SELECT * FROM ' . $ecs->table('users') . "WHERE user_id ='$parent_id'";

	$tianxinarr=$db->getRow($sql);

	if(empty($tianxinarr)){

		sys_msg("自定义上级ID不存在", 0);

		exit;

	}

	}

    $db->autoExecute($ecs->table('users'), $other, 'UPDATE', "user_name = '$username'");



    /* 记录管理员操作 */

    admin_log($username, 'edit', 'users');



    /* 提示信息 */

    $links[0]['text']    = $_LANG['goto_list'];

    $links[0]['href']    = 'users.php?act=list&' . list_link_postfix();

    $links[1]['text']    = $_LANG['go_back'];

    $links[1]['href']    = 'javascript:history.back()';



    sys_msg($_LANG['update_success'], 0, $links);



}



/*------------------------------------------------------ */

//-- 批量删除会员帐号

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'batch_remove')

{

    /* 检查权限 */

    admin_priv('users_drop');



    if (isset($_POST['checkboxes']))

    {

        $sql = "SELECT user_name FROM " . $ecs->table('users') . " WHERE user_id " . db_create_in($_POST['checkboxes']);

        $col = $db->getCol($sql);

        $usernames = implode(',',addslashes_deep($col));

        $count = count($col);

        /* 通过插件来删除用户 */

        $users =& init_users();

        $users->remove_user($col);



        admin_log($usernames, 'batch_remove', 'users');



        $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');

        sys_msg(sprintf($_LANG['batch_remove_success'], $count), 0, $lnk);

    }

    else

    {

        $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');

        sys_msg($_LANG['no_select_user'], 0, $lnk);

    }

}



/* 编辑用户名 */

elseif ($_REQUEST['act'] == 'edit_username')

{

    /* 检查权限 */

    check_authz_json('users_manage');



    $username = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));

    $id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);



    if ($id == 0)

    {

        make_json_error('NO USER ID');

        return;

    }



    if ($username == '')

    {

        make_json_error($GLOBALS['_LANG']['username_empty']);

        return;

    }



    $users =& init_users();



    if ($users->edit_user($id, $username))

    {

        if ($_CFG['integrate_code'] != 'ecshop')

        {

            /* 更新商城会员表 */

            $db->query('UPDATE ' .$ecs->table('users'). " SET user_name = '$username' WHERE user_id = '$id'");

        }



        admin_log(addslashes($username), 'edit', 'users');

        make_json_result(stripcslashes($username));

    }

    else

    {

        $msg = ($users->error == ERR_USERNAME_EXISTS) ? $GLOBALS['_LANG']['username_exists'] : $GLOBALS['_LANG']['edit_user_failed'];

        make_json_error($msg);

    }

}



/*------------------------------------------------------ */

//-- 编辑email

/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'edit_email')

{

    /* 检查权限 */

    check_authz_json('users_manage');



    $id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);

    $email = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));



    $users =& init_users();



    $sql = "SELECT user_name FROM " . $ecs->table('users') . " WHERE user_id = '$id'";

    $username = $db->getOne($sql);





    if (is_email($email))

    {

        if ($users->edit_user(array('username'=>$username, 'email'=>$email)))

        {

            admin_log(addslashes($username), 'edit', 'users');



            make_json_result(stripcslashes($email));

        }

        else

        {

            $msg = ($users->error == ERR_EMAIL_EXISTS) ? $GLOBALS['_LANG']['email_exists'] : $GLOBALS['_LANG']['edit_user_failed'];

            make_json_error($msg);

        }

    }

    else

    {

        make_json_error($GLOBALS['_LANG']['invalid_email']);

    }

}



/*------------------------------------------------------ */

//-- 删除会员帐号

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'remove')

{

    /* 检查权限 */

    admin_priv('users_drop');



    $sql = "SELECT user_name FROM " . $ecs->table('users') . " WHERE user_id = '" . $_GET['id'] . "'";

    $username = $db->getOne($sql);

    /* 通过插件来删除用户 */

    $users =& init_users();

    $users->remove_user($username); //已经删除用户所有数据



    /* 记录管理员操作 */

    admin_log(addslashes($username), 'remove', 'users');



    /* 提示信息 */

    $link[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');

    sys_msg(sprintf($_LANG['remove_success'], $username), 0, $link);

}



/*------------------------------------------------------ */

//--  收货地址查看

/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'address_list')

{

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    $sql = "SELECT a.*, c.region_name AS country_name, p.region_name AS province, ct.region_name AS city_name, d.region_name AS district_name ".

           " FROM " .$ecs->table('user_address'). " as a ".

           " LEFT JOIN " . $ecs->table('region') . " AS c ON c.region_id = a.country " .

           " LEFT JOIN " . $ecs->table('region') . " AS p ON p.region_id = a.province " .

           " LEFT JOIN " . $ecs->table('region') . " AS ct ON ct.region_id = a.city " .

           " LEFT JOIN " . $ecs->table('region') . " AS d ON d.region_id = a.district " .

           " WHERE user_id='$id'";

    $address = $db->getAll($sql);

    $smarty->assign('address',          $address);

    assign_query_info();

    $smarty->assign('ur_here',          $_LANG['address_list']);

    $smarty->assign('action_link',      array('text' => $_LANG['03_users_list'], 'href'=>'users.php?act=list&' . list_link_postfix()));

    $smarty->display('user_address_list.htm');

}



/*------------------------------------------------------ */

//-- 脱离推荐关系

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'remove_parent')

{

    /* 检查权限 */

    admin_priv('users_manage');



    $sql = "UPDATE " . $ecs->table('users') . " SET parent_id = 0 WHERE user_id = '" . $_GET['id'] . "'";

    $db->query($sql);



    /* 记录管理员操作 */

    $sql = "SELECT user_name FROM " . $ecs->table('users') . " WHERE user_id = '" . $_GET['id'] . "'";

    $username = $db->getOne($sql);

    admin_log(addslashes($username), 'edit', 'users');



    /* 提示信息 */

    $link[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');

    sys_msg(sprintf($_LANG['update_success'], $username), 0, $link);

}



/*------------------------------------------------------ */

//-- 查看用户推荐会员列表

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'aff_list')

{

    /* 检查权限 */

    admin_priv('users_manage');

    $smarty->assign('ur_here',      $_LANG['03_users_list']);



    $auid = $_GET['auid'];

    $user_list['user_list'] = array();



    $affiliate = unserialize($GLOBALS['_CFG']['affiliate']);

    $smarty->assign('affiliate', $affiliate);



    empty($affiliate) && $affiliate = array();



    $num = count($affiliate['item']);

    $up_uid = "'$auid'";

    $all_count = 0;

    for ($i = 1; $i<=$num; $i++)

    {

        $count = 0;

        if ($up_uid)

        {

            $sql = "SELECT user_id FROM " . $ecs->table('users') . " WHERE parent_id IN($up_uid)";

            $query = $db->query($sql);

            $up_uid = '';

            while ($rt = $db->fetch_array($query))

            {

                $up_uid .= $up_uid ? ",'$rt[user_id]'" : "'$rt[user_id]'";

                $count++;

            }

        }

        $all_count += $count;



        if ($count)

        {

            $sql = "SELECT user_id, user_name, '$i' AS level, email, is_validated, user_money, frozen_money, rank_points, pay_points, reg_time ".

                    " FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id IN($up_uid)" .

                    " ORDER by level, user_id";

            $user_list['user_list'] = array_merge($user_list['user_list'], $db->getAll($sql));

        }

    }



    $temp_count = count($user_list['user_list']);

    for ($i=0; $i<$temp_count; $i++)

    {

        $user_list['user_list'][$i]['reg_time'] = local_date($_CFG['date_format'], $user_list['user_list'][$i]['reg_time']);

    }



    $user_list['record_count'] = $all_count;



    $smarty->assign('user_list',    $user_list['user_list']);

    $smarty->assign('record_count', $user_list['record_count']);

    $smarty->assign('full_page',    1);

    $smarty->assign('action_link',  array('text' => $_LANG['back_note'], 'href'=>"users.php?act=edit&id=$auid"));



    assign_query_info();

    $smarty->display('affiliate_list.htm');

}

/*------------------------------------------------------ */

//-- 查看用户分销下线列表

/*------------------------------------------------------ */



elseif ($_REQUEST['act'] == 'share_list')

{

    /* 检查权限 */

    admin_priv('users_manage');

    $smarty->assign('ur_here',      $_LANG['03_users_list']);





    $user_list['user_list'] = array();

	$auid = $_GET['id'];

    $num = 4;

    $up_uid = "'$auid'";

    $all_count = 0;

    for ($i = 1; $i<=$num; $i++)

    {

        $count = 0;

        if ($up_uid)

        {

            $sql = "SELECT user_id FROM " . $ecs->table('users') . " WHERE parent_id IN($up_uid)";

            $query = $db->query($sql);

            $up_uid = '';

            while ($rt = $db->fetch_array($query))

            {

                $up_uid .= $up_uid ? ",'$rt[user_id]'" : "'$rt[user_id]'";

                $count++;

            }

        }

		$all_count += $count;

        if ($count)

        {

            $sql = "SELECT user_id, user_name, '$i' AS level, email, is_validated, user_money, frozen_money, rank_points, pay_points, reg_time,wxid ".

                    " FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id IN($up_uid)" .

                    " ORDER by level, user_id";

			$user_info=$db->getAll($sql);

			foreach($user_info as $key=>$value){



				$sql="SELECT count(*) as order_num ,sum(goods_amount - discount)  as order_amount FROM ".$GLOBALS['ecs']->table('order_info')."WHERE user_id=".$value['user_id'];

				$order_info=$db->getRow($sql);

				$k=$i-1;

				$affiliate['item'][$k]['level_money'] = (float)$affiliate['item'][$k]['level_money'];

                if ($affiliate['item'][$k]['level_money'])

                {

                    $affiliate['item'][$k]['level_money'] /= 100;

                }

				$setmoney = round($order_info['order_amount'] * $affiliate['item'][$k]['level_money'], 2);

				$user_info[$key]['order_num']=$order_info['order_num'];

				$user_info[$key]['order_amount']=$order_info['order_amount'];

				$user_info[$key]['setmoney']=$setmoney;



			}

            $user_list['user_list'] = array_merge($user_list['user_list'], $user_info);

        }

    }

	$new_arr1=array();

	$new_arr2=array();

	$new_arr3=array();

	$new_arr4=array();

	$new_arr5=array();

	foreach($user_list['user_list'] as $key =>$value)

	{



		if($value['level']==1){

			$wxid=$value['wxid'];

			$value['head_url']=$GLOBALS['db']->getOne("SELECT  headimgurl FROM wxch_user WHERE wxid = '$wxid'");

			$value['nickname']=$GLOBALS['db']->getOne("SELECT nickname FROM wxch_user WHERE wxid = '$wxid'");

			$new_arr1[]=$value;

		}

		elseif($value['level']==2){

			$wxid=$value['wxid'];

			$value['head_url']=$GLOBALS['db']->getOne("SELECT  headimgurl FROM wxch_user WHERE wxid = '$wxid'");

			$value['nickname']=$GLOBALS['db']->getOne("SELECT nickname FROM wxch_user WHERE wxid = '$wxid'");

			$new_arr2[]=$value;

		}

		elseif($value['level']==3){

			$wxid=$value['wxid'];

			$value['head_url']=$GLOBALS['db']->getOne("SELECT  headimgurl FROM wxch_user WHERE wxid = '$wxid'");

			$value['nickname']=$GLOBALS['db']->getOne("SELECT nickname FROM wxch_user WHERE wxid = '$wxid'");

			$new_arr3[]=$value;

		}

		elseif($value['level']==4){

			$wxid=$value['wxid'];

			$value['head_url']=$GLOBALS['db']->getOne("SELECT  headimgurl FROM wxch_user WHERE wxid = '$wxid'");

			$value['nickname']=$GLOBALS['db']->getOne("SELECT nickname FROM wxch_user WHERE wxid = '$wxid'");

			$new_arr4[]=$value;

		}

		elseif($value['level']==5){

			$wxid=$value['wxid'];

			$value['head_url']=$GLOBALS['db']->getOne("SELECT  headimgurl FROM wxch_user WHERE wxid = '$wxid'");

			$value['nickname']=$GLOBALS['db']->getOne("SELECT nickname FROM wxch_user WHERE wxid = '$wxid'");

			$new_arr5[]=$value;

		}



	}



    $user_list['record_count'] = $all_count;

    $smarty->assign('user_list1',    $new_arr1);

	$smarty->assign('user_list2',    $new_arr2);

	$smarty->assign('user_list3',    $new_arr3);

	$smarty->assign('user_list4',    $new_arr4);

	$smarty->assign('user_list5',    $new_arr5);

    $smarty->assign('record_count', $user_list['record_count']);

    $smarty->assign('full_page',    1);

    $smarty->assign('action_link',  array('text' => $_LANG['back_note'], 'href'=>"users.php?act=edit&id=$auid"));



    assign_query_info();

    $smarty->display('share_list.htm');

}

/**

 *  返回下线会员消费详情

 *

 */

elseif ($_REQUEST['act'] == 'myorder')

{

	//显示分成记录

	$user_id=$_GET['user_id'];

	$level=$_GET['level'];

	$logdb = get_affiliate_ck($user_id,$level);

	$smarty->assign('logdb',        $logdb['logdb']);

	$smarty->assign('level',        $level);

    $smarty->assign('full_page',    1);



	//显示分成记录结束

	assign_query_info();

	$smarty->display('myorder.htm');

}

/**

 *  返回用户列表数据

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

        //用户编号
        $filter['weiyi_num'] = empty($_REQUEST['weiyi_num']) ? '' : trim($_REQUEST['weiyi_num']);

        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)

        {

            $filter['keywords'] = json_str_iconv($filter['keywords']);

        }

        $filter['rank'] = empty($_REQUEST['rank']) ? 0 : intval($_REQUEST['rank']);

        $filter['pay_points_gt'] = empty($_REQUEST['pay_points_gt']) ? 0 : intval($_REQUEST['pay_points_gt']);

        $filter['pay_points_lt'] = empty($_REQUEST['pay_points_lt']) ? 0 : intval($_REQUEST['pay_points_lt']);



        $filter['sort_by']    = empty($_REQUEST['sort_by'])    ? 'user_id' : trim($_REQUEST['sort_by']);

        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC'     : trim($_REQUEST['sort_order']);



        //$ex_where = ' WHERE 1 ';

        if ($filter['keywords'])

        {

            $ex_where .= " AND user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";

        }

        if ($filter['weiyi_num'])

        {

            $ex_where .= " AND weiyi_num LIKE '%" . mysql_like_quote($filter['weiyi_num']) ."%'";

        }

        if ($filter['rank'])

        {

            $sql = "SELECT min_points, max_points, special_rank FROM ".$GLOBALS['ecs']->table('user_rank')." WHERE rank_id = '$filter[rank]'";

            $row = $GLOBALS['db']->getRow($sql);

            if ($row['special_rank'] > 0)

            {

                /* 特殊等级 */

                $ex_where .= " AND user_rank = '$filter[rank]' ";

            }

            else

            {

                $ex_where .= " AND rank_points >= " . intval($row['min_points']) . " AND rank_points < " . intval($row['max_points']);

            }

        }

        if ($filter['pay_points_gt'])

        {

             $ex_where .=" AND pay_points >= '$filter[pay_points_gt]' ";

        }

        if ($filter['pay_points_lt'])

        {

            $ex_where .=" AND pay_points < '$filter[pay_points_lt]' ";

        }



        $filter['record_count'] = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('admin_user') . 'where role_id = 4'.$ex_where.'  ORDER BY user_id DESC');
//print_r($filter['record_count']);exit;


        /* 分页大小 */

        $filter = page_and_size($filter);



        $sql = "SELECT user_id, ysj_fencheng,hav_logo,sjsbanner,user_name, email, add_time, last_login,sjsintro ".

                " FROM " . $GLOBALS['ecs']->table('admin_user') . 'where role_id = 4'.$ex_where

                .' ORDER BY user_id DESC'.

                " LIMIT " . $filter['start'] . ',' . $filter['page_size'];



// print_r($sql);exit;


        $filter['keywords'] = stripslashes($filter['keywords']);

        set_filter($filter, $sql);

    }

    else

    {

        $sql    = $result['sql'];

        $filter = $result['filter'];

    }



    $user_list = $GLOBALS['db']->getAll($sql);



    $count = count($user_list);

    for ($i=0; $i<$count; $i++)

    {

        $user_list[$i]['reg_time'] = local_date($GLOBALS['_CFG']['date_format'], $user_list[$i]['reg_time']);

    }



    $arr = array('user_list' => $user_list, 'filter' => $filter,

        'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;

}

//定义，显示某个会员下面的分成订单情况

function get_affiliate_ck($user_id,$level)

{



    $affiliate = unserialize($GLOBALS['_CFG']['affiliate']);

    empty($affiliate) && $affiliate = array();

    $separate_by = $affiliate['config']['separate_by'];



    $sqladd = '';

    if (isset($_REQUEST['status']))

    {

        $sqladd = ' AND o.is_separate = ' . (int)$_REQUEST['status'];

        $filter['status'] = (int)$_REQUEST['status'];

    }

    if (isset($_REQUEST['order_sn']))

    {

        $sqladd = ' AND o.order_sn LIKE \'%' . trim($_REQUEST['order_sn']) . '%\'';

        $filter['order_sn'] = $_REQUEST['order_sn'];

    }





        //$sqladd = ' AND a.user_id=' . $_SESSION['user_id'];





    if(!empty($affiliate['on']))

    {

        if(empty($separate_by))

        {

            //推荐注册分成

            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                    " WHERE o.user_id > 0 AND (u.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd";

        }

        else

        {

            //推荐订单分成

            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                    " WHERE o.user_id > 0 AND (o.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd";

        }

    }

    else

    {

        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                " WHERE o.user_id > 0 AND o.is_separate > 0 $sqladd";

    }





    $filter['record_count'] = $GLOBALS['db']->getOne($sql);

    $logdb = array();

    /* 分页大小 */

    $filter = page_and_size($filter);



    if(!empty($affiliate['on']))

    {

        if(empty($separate_by))

        {

            //推荐注册分成



            $sql = "SELECT o.*, a.log_id, a.user_id as suid,  a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                    " WHERE o.user_id > 0 AND (u.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd".

                    " ORDER BY order_id DESC" .

                    " LIMIT " . $filter['start'] . ",$filter[page_size]";



            /*

                SQL解释：



                列出同时满足以下条件的订单分成情况：

                1、有效订单o.user_id > 0

                2、满足以下情况之一：

                    a.有用户注册上线的未分成订单 u.parent_id > 0 AND o.is_separate = 0

                    b.已分成订单 o.is_separate > 0



            */

        }

        else

        {

            //推荐订单分成

            $sql = "SELECT o.*, a.log_id,a.user_id as suid, a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                    " WHERE o.user_id > 0 AND (o.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd" .

                    " ORDER BY order_id DESC" .

                    " LIMIT " . $filter['start'] . ",$filter[page_size]";



            /*

                SQL解释：



                列出同时满足以下条件的订单分成情况：

                1、有效订单o.user_id > 0

                2、满足以下情况之一：

                    a.有订单推荐上线的未分成订单 o.parent_id > 0 AND o.is_separate = 0

                    b.已分成订单 o.is_separate > 0



            */

        }

    }

    else

    {

        //关闭

        $sql = "SELECT o.*, a.log_id,a.user_id as suid, a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up FROM " . $GLOBALS['ecs']->table('order_info') . " o".

                " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".

                " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .

                " WHERE o.user_id > 0 AND o.is_separate > 0 $sqladd" .

                " ORDER BY order_id DESC" .

                " LIMIT " . $filter['start'] . ",$filter[page_size]";

    }





    $query = $GLOBALS['db']->query($sql);

    while ($rt = $GLOBALS['db']->fetch_array($query))

    {

        if(empty($separate_by) && $rt['up'] > 0)

        {

            //按推荐注册分成

            $rt['separate_able'] = 1;

        }

        elseif(!empty($separate_by) && $rt['parent_id'] > 0)

        {

            //按推荐订单分成

            $rt['separate_able'] = 1;

        }

        if(!empty($rt['suid']))

        {

            //在affiliate_log有记录

            $rt['info'] = sprintf($GLOBALS['_LANG']['separate_info2'], $rt['suid'], $rt['auser'], $rt['money'], $rt['point']);

            if($rt['separate_type'] == -1 || $rt['separate_type'] == -2)

            {

                //已被撤销

                $rt['is_separate'] = 3;

                $rt['info'] = "<s>" . $rt['info'] . "</s>";

            }

        }

        $logdb[] = $rt;

    }



	$logdbnew=array();

	foreach($logdb  as $key=>$value){



		if($value['user_id']==$user_id){



			$logdbnew[$key]=$value;

			$user_id=$value['user_id'];

			$sql = "SELECT wxid FROM " .$GLOBALS['ecs']->table('users'). " WHERE user_id = '$user_id'";

			$wxid = $GLOBALS['db']->getOne($sql);

			if(!empty($wxid)){

				$weixinInfo = $GLOBALS['db']->getRow("SELECT nickname, headimgurl FROM wxch_user WHERE wxid = '$wxid'");

				$logdbnew[$key]['avatar'] = empty($weixinInfo['headimgurl']) ? '':$weixinInfo['headimgurl'];

				$logdbnew[$key]['username'] = empty($weixinInfo['nickname']) ? '':$weixinInfo['nickname'];

			}

				$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);

				$k=$level-1;

				$affiliate['item'][$k]['level_money'] = (float)$affiliate['item'][$k]['level_money'];

                if ($affiliate['item'][$k]['level_money'])

                {

                    $affiliate['item'][$k]['level_money'] /= 100;

                }

				$setmoney = round($value['order_amount'] * $affiliate['item'][$k]['level_money'], 2);

				$logdbnew[$key]['set_money']=$setmoney;

				$logdbnew[$key]['level_money']=$affiliate['item'][$k]['level_money'];





		}

	}



    $arr = array('logdb' => $logdbnew, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);



    return $arr;

}







?>