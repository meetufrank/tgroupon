<?php
/**
 * @Author: anchen
 * @Date:   2017-01-24 13:56:56
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-24 14:33:10
 */



define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
include_once('include/cls_json.php');
 $json  = new JSON;

if($_GET['imgstr']){
    $imgstr=$_GET['imgstr'];

    $imgarr=$json->decode($imgstr);
    $imgcount=count($imgarr);
    $smarty->assign('imgarr',$imgarr);
    $smarty->assign('imgcount',$imgcount);
}

$smarty->display('/Swiper-3.4.0/demos/23-thumbs-gallery-loop.html');