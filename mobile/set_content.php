<?php
/**
 * @Author: anchen
 * @Date:   2017-02-21 15:47:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-21 17:16:34
 */


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
             exit;
}