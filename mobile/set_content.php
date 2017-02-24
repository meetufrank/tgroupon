<?php
/**
 * @Author: anchen
 * @Date:   2017-02-21 15:47:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-24 15:30:16
 */

define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
if($_REQUEST['act']=='goods'){


if($_POST['type']){
    $type=$_POST['type'];
    $typeid=$_POST['typeid'];
             if($type=='showsearch'){
                   setcookie('list_type',$type);
                  setcookie('typeid',$typeid);
                  setcookie('search_content',$typeid);
             }elseif($type=='showtype'){
                 setcookie('list_type',$type);
                  setcookie('typeid',$typeid);
             }
            echo json_encode(1);

}
 exit;
}elseif($_REQUEST['act']=='ysj'){

    if($_POST['content']){
        $_SESSION['ysj_content']=$_POST['content'];
        $_SESSION['is_send']=1;

        echo json_encode(1);
    }
exit;
}