<?php

define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');

if($_REQUEST['ajax_province']){   //ajax查询地址
        $province=intval($_REQUEST['ajax_province']);
        $content=file_get_contents("region.txt");
          if($content){
              $list=json_decode($content,true);
              foreach ($list as $key => $value) {
                  if($list[$key]['parent_id']==$province){
                    $arr[]=$list[$key];
                  }
              }

            echo  json_encode($arr);
           }else{
             $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('region') .

            " WHERE parent_id = $province ";

            $p_arr=$GLOBALS['db']->getAll($sql);

          echo  json_encode($p_arr);

           }
    }
?>