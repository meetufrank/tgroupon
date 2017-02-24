<?php
/**
 * @Author: anchen
 * @Date:   2017-02-21 15:47:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-24 14:22:23
 */

define('IN_ECTOUCH', true);
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
        setcookie('ysj_content',$_POST['content']);
        setcookie('is_send',1);
        echo json_encode(1);
    }
exit;
}