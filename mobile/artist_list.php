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

if (!isset($_REQUEST['act']))
{
    $_REQUEST['act'] = "artist_list";
}
$page_num=12;  //页面显示条数
if($_REQUEST['act']=='artist_list'){

  setcookie('artist_content','',time()-3600);
  if( !$_SESSION['is_send']){    //页面刷新清除功能
      unset($_SESSION["ysj_content"]);
  }else{
    unset($_SESSION["is_send"]);
  }
  if($_SESSION["ysj_content"]){
    $content=$_SESSION["ysj_content"];
    $where_array=get_where($content);
                 $no_str='';
             $no_next_str='';
   if(is_array($where_array)){
        foreach($where_array as $key=>$value){
              $data_list=array();
              $next_data_list=array();
             $limit=' limit 0,'.$page_num;
             $next_limit=' limit '.$page_num.','.$page_num;
              $data_list=get_artist_list($limit,$no_str,$value);
              $next_data_list=get_artist_list($next_limit,$no_next_str,$value);
              if(is_array($data_list)){
                foreach ($data_list as $g_k => $g_v) {
                  $datas[]=$data_list[$g_k];
                $no_id[]=$g_v['user_id'];
                }
                $no_str=@implode(',',$no_id);

              }
               if(is_array($next_data_list)){
                foreach ($next_data_list as $g_k => $g_v) {
                  $next_data[]=$next_data_list[$g_k];
                $no_next_id[]=$g_v['user_id'];
                }
                $no_next_str=@implode(',',$no_next_id);

              }


              //$goods_list = array_merge($goods_list,$data_list);  //商品列表

        }
   }

   if(count($next_data)){
         $more=1;
   }else{
        $more=0;
   }
   $artist_list=$datas;
   $search_content=$content;

  }else{

      //艺术家列表
        $limit=' limit 0,'.$page_num;
        $artist_list=get_artist_list($limit);
        $next_limit=' limit '.$page_num.','.$page_num;
      $artist_next_list=get_artist_list($next_limit);
      if(count($artist_next_list)){
        $more=1;
      }else{
        $more=0;
      }
  }
  //艺术家banner显示
 $sql=" select * from ecs_touch_ad  where   ad_code!='' and position_id=2 and enabled=1 order by sort desc limit 1 ";
$banner_list=$GLOBALS['db']->getAll($sql);
//print_r($banner_list);
foreach ($banner_list as $key => $value) {
    if(!strpos($value['ad_code'],'http://')){
           $banner_list[$key]['ad_code']="data/afficheimg/".$value['ad_code'];
    }
    if(strpos($value['ad_link'], '?')){
      $banner_list[$key]['ad_link']=$value['ad_link'].$linestring2;
    }else{
      $banner_list[$key]['ad_link']=$value['ad_link'].$linestring1;
    }
}


//print_r($artist_list);exit;
$smarty->assign("search_content",$search_content);
$smarty->assign("banner_list",$banner_list);
  $smarty->assign('more',$more);
  $smarty->assign('artist_list',$artist_list);
   $smarty->display('artist-list.dwt');
   exit;
}elseif ($_REQUEST['act']=='get_next_list') {
    if(intval($_POST['page'])){
       $pages=intval($_POST['page']);
    }else{
       $pages=1;
    }
    if($_SESSION["ysj_content"]){
    $content=$_SESSION["ysj_content"];
    $where_array=get_where($content);
                 $no_str='';
             $no_next_str='';
   if(is_array($where_array)){
        foreach($where_array as $key=>$value){
              $data_list=array();
              $next_data_list=array();
               $num=$page_num*($pages-1);
             $limit=' limit  '.$num.','.$page_num;
             $next_num=$page_num*$pages;
             $next_limit=' limit  '.$next_num.','.$page_num;
              $data_list=get_artist_list($limit,$no_str,$value);
              $next_data_list=get_artist_list($next_limit,$no_next_str,$value);
              if(is_array($data_list)){
                foreach ($data_list as $g_k => $g_v) {
                  $datas[]=$data_list[$g_k];
                $no_id[]=$g_v['user_id'];
                }
                $no_str=@implode(',',$no_id);

              }
               if(is_array($next_data_list)){
                foreach ($next_data_list as $g_k => $g_v) {
                  $next_data[]=$next_data_list[$g_k];
                $no_next_id[]=$g_v['user_id'];
                }
                $no_next_str=@implode(',',$no_next_id);

              }


              //$goods_list = array_merge($goods_list,$data_list);  //商品列表

        }
   }

   if(count($next_data)){
         $more=1;
   }else{
        $more=0;
   }
   $artist_list=$datas;
    $data['data']=$artist_list;
      $data['more']=$more;
    $data['search_content']=$content;
  }else{
     $num=$page_num*($pages-1);
      $limit=' limit  '.$num.','.$page_num;
      $artist_list=get_artist_list($limit);
      $next_num=$page_num*$pages;
      $next_limit=' limit  '.$next_num.','.$page_num;
      $artist_next_list=get_artist_list($next_limit);
      if(count($artist_next_list)){
        $more=1;
      }else{
        $more=0;
      }

      $data['data']=$artist_list;
      $data['more']=$more;

  }


      echo json_encode($data);
      exit;
 }elseif ($_REQUEST['act']=='get_search_list') {
    if(isset($_POST['content'])){
      $content=$_POST['content'];
      setcookie('artist_content',$content);
    }else{
        $content=$_COOKIE['artist_content'];
    }
     if(intval($_POST['page'])){
       $pages=intval($_POST['page']);
     }else{
       $pages=1;
     }
    if($content){


$where_array=get_where($content);


             $no_str='';
             $no_next_str='';

   if(is_array($where_array)){

        foreach($where_array as $key=>$value){

              $data_list=array();
              $next_data_list=array();
              $num=$page_num*($pages-1);
             $limit=' limit  '.$num.','.$page_num;
             $next_num=$page_num*$pages;
             $next_limit=' limit  '.$next_num.','.$page_num;
              $data_list=get_artist_list($limit,$no_str,$value);
              $next_data_list=get_artist_list($next_limit,$no_next_str,$value);
              if(is_array($data_list)){
                foreach ($data_list as $g_k => $g_v) {
                  $datas[]=$data_list[$g_k];
                $no_id[]=$g_v['user_id'];
                }
                $no_str=@implode(',',$no_id);

              }
               if(is_array($next_data_list)){
                foreach ($next_data_list as $g_k => $g_v) {
                  $next_data[]=$next_data_list[$g_k];
                $no_next_id[]=$g_v['user_id'];
                }
                $no_next_str=@implode(',',$no_next_id);

              }


              //$goods_list = array_merge($goods_list,$data_list);  //商品列表

        }
   }
}else{
      $num=$page_num*($pages-1);
             $limit=' limit  '.$num.','.$page_num;
             $next_num=$page_num*$pages;
             $next_limit=' limit  '.$next_num.','.$page_num;
              $datas=get_artist_list($limit);
              $next_data=get_artist_list($next_limit);
   }


   if(count($next_data)<=0){
        $data['more']=0;
   }else{
        $data['more']=1;
   }
   $data['data']=$datas;
   $data['search_content']=$content;



      echo json_encode($data);
      exit;
 }





function get_artist_list($limit='',$str='',$where=''){
  if($str){
    $add_where=" and user_id not in (".$str.") ";
   }
  //艺术家列表
  $sql  = 'SELECT user_id, user_name,hav_logo,country'.

            ' FROM ' .$GLOBALS['ecs']->table('admin_user')."WHERE role_id = 4  and hav_logo!='' ".$where.$add_where.$limit;

    $ysj_list = $GLOBALS['db']->getAll($sql);
    return $ysj_list;
}


function  get_where($string=''){

    $str=strFilter($string);
                    $num=abslength($str);
                    $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where=" and ( ";
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  user_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ";
                      $where_array[]=$where;
                     $b_count--;
                    }


                    return $where_array;
}
?>