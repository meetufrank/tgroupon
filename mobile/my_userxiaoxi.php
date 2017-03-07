<?php

/*个人中心 --- 我的消息*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
include('head.php');

if (!isset($_REQUEST['act']))
{
    $_REQUEST['act'] = "xiaoxi_list";
}
$page_num=2;  //页面显示条数
if($_REQUEST['act']=='xiaoxi_list'){


//个人中心  -- 当前页面选中样式，声明的变量
$xuanzhong = 3;
$smarty->assign('my_active',  $xuanzhong);

//判断用户登录状态
   if ($_SESSION['user_id'] <= 0)

        {

            please_in();

        }


$user_id=$_SESSION['user_id'];

//查询出系统消息总数
$xxcount = "select count(*) from `ecs_xiaoxi`";
$xxcounts = $GLOBALS['db']->getOne($xxcount);
$smarty->assign('xxcounts',  $xxcounts);


$limit=' limit 0,'.$page_num;
$next_limit=' limit '.$page_num.','.$page_num;

//查询系统消息信息
$xxxx = "select * from `ecs_xiaoxi`";
$xxxxs = get_xiaoxi_list($limit);
$smarty->assign('xxxxs',$xxxxs);
$next_xxxxs=get_xiaoxi_list($next_limit);
if(count($next_xxxxs)){
    $more=1;
}else{
    $more=0;
}

$smarty->assign('more',$more);




$smarty->display('my_userxiaoxi.dwt');



}elseif($_REQUEST['act']=='get_next_list'){


 if(intval($_POST['page'])){
       $pages=intval($_POST['page']);
    }else{
       $pages=1;
    }

        $num=$page_num*($pages-1);
     $limit=' limit  '.$num.','.$page_num;
     $next_num=$page_num*$pages;
     $next_limit=' limit  '.$next_num.','.$page_num;
     $xxxxs = get_xiaoxi_list($limit);
     $next_xxxxs=get_xiaoxi_list($next_limit);
     if(count($next_xxxxs)){
          $more=1;
        }else{
            $more=0;
        }

        $data['data']=$xxxxs;
        $data['more']=$more;


 echo json_encode($data);
     exit;

}elseif($_REQUEST['act']=='loca_link'){

    $id=intval($_POST['id']);

        if($id){
            $sql="select * from ecs_xiaoxi where xxid=".$id;
            $data=$GLOBALS['db']->getRow($sql);
            if(is_array($data)){
                $sql=" insert into ecs_read  (re_userid,re_xxid) values ($user_id,$id)";
                $GLOBALS['db']->query($sql);
                echo json_encode($data['xxlink']);
            }

        }

        exit;

}





function get_xiaoxi_list($limit){

    $xxxx = "select * from `ecs_xiaoxi` order by xxtime desc ".$limit;
    $xxxxs = $GLOBALS['db']->getAll($xxxx);

    return $xxxxs;
}
?>