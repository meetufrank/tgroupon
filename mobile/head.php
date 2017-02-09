<?php

/**
 * TGROUPON 购物流程
 * ============================================================================
 * 版权所有 2005-2010 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: douqinghua $
 * $Id: flow.php 17218 2011-01-24 04:10:41Z douqinghua $
 */






define('PC_URL', $config['pc_url']);   //定义非微信浏览器跳转链接
define('PHONE_URL', $config['phone_url']);   //定义微信浏览器跳转链接

if($_SERVER['REQUEST_METHOD']!="POST"){
  $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $_SESSION['back_url']=$url;

}

if($_COOKIE['user_id']){
  $_SESSION['user_id']=$_COOKIE['user_id'];
}

if(intval($_REQUEST['lineshop'])){   //线下店标示
     $lineshopid=intval($_REQUEST['lineshop']);
     $sql="select is_line from ecs_users where user_id=".$lineshopid;
     $is_line=$GLOBALS['db']->getOne($sql);
     if($is_line==1){
      $linestring2="&lineshop=".$lineshopid;
      $linestring1="?lineshop=".$lineshopid;

     }else{
      $linestring2="";
      $linestring1="";
     }
     $smarty->assign('linestring2',$linestring2);
      $smarty->assign('linestring1',$linestring1);

}


if ($_SESSION['user_id'])
    {
      include_once(ROOT_PATH .'include/lib_order.php');
      $sql  = "SELECT * ".
           "FROM " .$GLOBALS['ecs']->table('users') . " WHERE user_id = ".$_SESSION['user_id'];
      $infos = $GLOBALS['db']->getRow($sql);

      $smarty->assign('user_status', 1);
      $css='<a href="#userinfo" class="toolbar-toggle"><i class="material-icons person"></i></a>';
       /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods(0,1);

     //查询这个用户是否为线下店

        if($infos['is_line']==1){   //若是
          $fx_link='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              $check_link=strpos($fx_link, '?');
               if($check_link){
                    $fx_link.="&lineshop=".$_SESSION['user_id'];
               }else{
                    $fx_link.="?lineshop=".$_SESSION['user_id'];
               }

         $smarty->assign('fx_link',$fx_link);  //分享图片链接
        }

        $smarty->assign('goods_list', $cart_goods['goods_list']);
        $smarty->assign('total', $cart_goods['total']);
     $smarty->assign('user_data', $infos);


     //个人中心是否显示销量的判断
      $sql="select count(*) from ".$ecs->table('users')." where user_id=".$_SESSION['user_id']." and (is_line!=0 or is_art!=0)";    //查询提现金额
      $income=$GLOBALS['db']->getOne($sql);

      $smarty->assign('is_income',$income);



    }else{
      $css='<a href="#account"class="toolbar-toggle"><i class="material-icons person"></i></a>';
    }


$smarty->assign('login_css', $css);





    $is_wechat=is_wechat_browser();
        if($is_wechat){
            $loginphone = "1";   //微信浏览器
            $smarty->assign('loginphone',  $loginphone);
          }else{

              $loginpc = "2";  //非微信浏览器
              $smarty->assign('loginpc',  $loginpc);
            }


include('Jssdk.php');

$appId = 'wxb5aec13c030a530b';//打开微信公众平台-开发者中心 获取appId和appSecret
$appSecret = '2232d4acc3612e530f0ccc311c72d68c';
$jssdk = new \Jssdk($appId, $appSecret);
$datajssdk = $jssdk->getSignPackage();

$smarty->assign('datajssdk', $datajssdk);

function is_weixin(){

if ( strpos($_SERVER['HTTP_USER_AGENT'],

'MicroMessenger') !== false ) {

        return true;

    }

        return false;

}
function please_in(){


        if(!is_weixin()){

            ecs_header("Location: ".PC_URL);
               exit;
          }else{


              ecs_header("Location: ".PHONE_URL);
               exit;
            }


}


function ajax_please_in(){

       $result['error'] = 12;

        if(!is_weixin()){
           $result['url'] =PC_URL;

          }else{

            $result['url'] =PHONE_URL;
          }


            echo json_encode($result);
            exit;
}


/**
* 可以统计中文字符串长度的函数
* @param $str 要计算长度的字符串
* @param $type 计算长度类型，0(默认)表示一个中文算一个字符，1表示一个中文算两个字符
*
*/
function abslength($str)
{
    if(empty($str)){
        return 0;
    }
    if(function_exists('mb_strlen')){
        return mb_strlen($str,'utf-8');
    }
    else {
        preg_match_all("/./u", $str, $ar);
        return count($ar[0]);
    }
}

/*

* 中文截取，支持gb2312,gbk,utf-8,big5

*

* @param string $str 要截取的字串

* @param int $start 截取起始位置

* @param int $length 截取长度

* @param string $charset utf-8|gb2312|gbk|big5 编码

* @param $suffix 是否加尾缀

*/

 function csubstr($str, $start=0, $length, $charset="utf-8", $suffix=false)

{

   if(function_exists("mb_substr"))

   {

       if(mb_strlen($str, $charset) <= $length) return $str;

       $slice = mb_substr($str, $start, $length, $charset);

   }

   else

   {

       $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";

       $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";

       $re['gbk']          = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";

       $re['big5']          = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";

       preg_match_all($re[$charset], $str, $match);

       if(count($match[0]) <= $length) return $str;

       $slice = join("",array_slice($match[0], $start, $length));

   }

   if($suffix) return $slice."…";

   return $slice;

}

/*
   过滤特殊字符
 */
function strFilter($str){
    $str = str_replace('`', '', $str);
    $str = str_replace('·', '', $str);
    $str = str_replace('~', '', $str);
    $str = str_replace('!', '', $str);
    $str = str_replace('！', '', $str);
    $str = str_replace('@', '', $str);
    $str = str_replace('#', '', $str);
    $str = str_replace('$', '', $str);
    $str = str_replace('￥', '', $str);
    $str = str_replace('%', '', $str);
    $str = str_replace('^', '', $str);
    $str = str_replace('……', '', $str);
    $str = str_replace('&', '', $str);
    $str = str_replace('*', '', $str);
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace('（', '', $str);
    $str = str_replace('）', '', $str);
    $str = str_replace('-', '', $str);
    $str = str_replace('_', '', $str);
    $str = str_replace('——', '', $str);
    $str = str_replace('+', '', $str);
    $str = str_replace('=', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);
    $str = str_replace('【', '', $str);
    $str = str_replace('】', '', $str);
    $str = str_replace('{', '', $str);
    $str = str_replace('}', '', $str);
    $str = str_replace(';', '', $str);
    $str = str_replace('；', '', $str);
    $str = str_replace(':', '', $str);
    $str = str_replace('：', '', $str);
    $str = str_replace('\'', '', $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('“', '', $str);
    $str = str_replace('”', '', $str);
    $str = str_replace(',', '', $str);
    $str = str_replace('，', '', $str);
    $str = str_replace('<', '', $str);
    $str = str_replace('>', '', $str);
    $str = str_replace('《', '', $str);
    $str = str_replace('》', '', $str);
    $str = str_replace('.', '', $str);
    $str = str_replace('。', '', $str);
    $str = str_replace('/', '', $str);
    $str = str_replace('、', '', $str);
    $str = str_replace('?', '', $str);
    $str = str_replace('？', '', $str);
    return trim($str);
}





?>