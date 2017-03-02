<?php
/**
 * @Author: anchen
 * @Date:   2017-03-02 10:14:48
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-03-02 15:09:38
 */
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

include(ROOT_PATH . 'head.php');

if (!isset($_REQUEST['act']))
{
    $_REQUEST['act'] = "about_us";
}


if($_REQUEST['act']=='about_us'){





$smarty->display('about_us.dwt');
exit;
}elseif($_REQUEST['act']=='add_hezuo'){

 if($_SESSION['user_id'] <= 0){
       ajax_please_in();
     }
    $userid=$_SESSION['user_id'];

$username=$_POST['UserName']?$_POST['UserName']:'';
$tel=$_POST['UserTel']?$_POST['UserTel']:'';
$email=$_POST['UserMail']?$_POST['UserMail']:'';
$weixin=$_POST['UserWeixin']?$_POST['UserWeixin']:'';
$kjz_name=$_POST['SpaceName']?$_POST['SpaceName']:'';
$kjz_add=$_POST['SpaceAddr']?$_POST['SpaceAddr']:'';
$hz_content=$_POST['TextSay']?$_POST['TextSay']:'';
if($_REQUEST['type']){
    $type=intval($_REQUEST['type']);
}else{
    $type=1;
}

 $sql="insert into ecs_shenqing
(sq_userid,sq_username,sq_tel,sq_email,sq_wxname,sq_kjname,sq_kjaddress,sq_text,sq_type) values
 ($userid,'$username','$tel','$email','$weixin','$kjz_name','$kjz_add','$hz_content',$type)
 ";
 $result=$GLOBALS['db']->query($sql);
 if($result){
    $data['msg']='true';
    echo json_encode($data);
 }else{
    $data['msg']='false';
    echo json_encode($data);
 }
exit;

}