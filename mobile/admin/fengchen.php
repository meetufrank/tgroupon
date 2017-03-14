<?php



/**

 * TGROUPON 管理中心文章处理程序文件

 * ============================================================================

 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。

 * 网站地址: http://www.tgroupon.cn；

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: liubo $

 * $Id: article.php 17217 2011-01-19 06:29:08Z liubo $

*/


define('IN_ECTOUCH', true);



require(dirname(__FILE__) . '/includes/init.php');

require_once(ROOT_PATH . 'include/fckeditor/fckeditor.php');

require_once(ROOT_PATH . 'include/cls_image_tianxin.php');



/*初始化数据交换对象 */

$exc   = new exchange($ecs->table("article"), $db, 'article_id', 'title');

//$image = new cls_image();



/* 允许上传的文件类型 */

$allow_file_types = '|GIF|JPG|PNG|BMP|SWF|DOC|XLS|PPT|MID|WAV|ZIP|RAR|PDF|CHM|RM|TXT|';



/*------------------------------------------------------ */

//-- 文章列表

/*------------------------------------------------------ */

if(!isset($_REQUEST['act'])){
    $_REQUEST['act']='list';
}
if ($_REQUEST['act'] == 'list')
{





    /* 取得过滤条件 */

    $filter = array();

    $smarty->assign('cat_select',  article_cat_list(0));

    $smarty->assign('ur_here',      $_LANG['03_article_list']);

   //$smarty->assign('action_link',  array('text' => $_LANG['article_add'], 'href' => 'article.php?act=add'));

    $smarty->assign('full_page',    1);

    $smarty->assign('filter',       $filter);



   // $article_list = get_articleslist();











   $fclist=get_fencheng();

   /* 显示列表页面 */

    assign_query_info();

    $smarty->assign('fclist',$fclist['fencheng']);
$smarty->assign('filter',       $fclist['filter']);

    $smarty->assign('record_count', $fclist['record_count']);

    $smarty->assign('page_count',   $fclist['page_count']);
    $smarty->assign('sum',   $fclist['sum']);
    $smarty->assign('full_page',    1);

    $smarty->display('fengchen_list.htm');

}elseif ($_REQUEST['act'] == 'fenchen_query')

{



    $result = get_fencheng();



    $smarty->assign('fclist',   $result['fencheng']);

    $smarty->assign('filter',       $result['filter']);

    $smarty->assign('record_count', $result['record_count']);

    $smarty->assign('page_count',   $result['page_count']);

    $smarty->assign('sum',   $result['sum']);



    make_json_result($smarty->fetch('fengchen_list.htm'), '', array('filter' => $result['filter'], 'page_count' => $result['page_count'],'sum'=>$result['sum']));

}elseif($_REQUEST['act'] == 'fencheng_export'){


 include(dirname(__FILE__) . '/includes/PHPExcel.php');
//根据条件导出excel表格


$result = get_fencheng(true);
$fencheng=$result['fencheng'];
foreach ($fencheng as $key => $value) {
   
       switch ($value['type']) {
           case 1:
               $fencheng[$key]['type']='推荐提成';
               break;
           case 2:
               $fencheng[$key]['type']='设计提成';
               break;
           case 0:
               $fencheng[$key]['type']='销售利润';
               break;
           case 3:
               $fencheng[$key]['type']='型色主义';
               break;
           default:
               $fencheng[$key]['type']='型色主义';
               break;
       }

    if($value['status']==1){
        $fencheng[$key]['status']='已提现';
    }else{
        $fencheng[$key]['status']='未提现';
    }
   
}



//创建对象  
    $objPHPExcel = new PHPExcel();  

    // import("Org.Util.PHPExcel.Reader.Excel5");
    //  include(dirname(__FILE__) . '/includes/PHPExcel/Reader/Excel5');
    
    if($_SESSION['admin_id']){
        $sql=" select user_name from ecs_admin_user where user_id=".$_SESSION['admin_id'];
        $username=$GLOBALS['db']->getOne($sql);
    }else{
        $username="型色主义";
    }
            /*设置excel的属性*/
            $objPHPExcel->getProperties()->setCreator($username)//创建人
            ->setLastModifiedBy($username)//最后修改人
            ->setTitle("分成信息表")//标题
            ->setSubject("分成信息表")//题目
            ->setDescription("型色主义分成信息表,导出人：".$username)//描述
            ->setKeywords("分成")//关键字
            ->setCategory("result file");//种类 
//set width
            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
            $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
            

            //第一行数据
            $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', '编号')
            ->setCellValue('B1', '商品名称')
            ->setCellValue('C1','购买渠道')
            ->setCellValue('D1', '购买用户')
            //->setCellValue('D1', '出生日期')
            //->setCellValue('E1', '年龄')
            ->setCellValue('E1', '总金额：'.$result['sum'].'元')
            ->setCellValue('F1', '状态')
            ->setCellValue('G1', '分成类型')
            ->setCellValue('H1', '分成获得者')
            ->setCellValue('I1', '分成日期');

            foreach($fencheng as $k => $v){
                    $k=$k+1;
                    $num=$k+1;//数据从第二行开始录入


                $objPHPExcel->setActiveSheetIndex(0)
                //Excel的第A列，uid是你查出数组的键值，下面以此类推
                ->setCellValue('A'.$num, $v['id'])
                ->setCellValue('B'.$num, $v['goods_name'])
                ->setCellValue('C'.$num, $v['xxdname'])
                ->setCellValue('D'.$num, $v['username'])
                //->setCellValue('D'.$num, $v['ar_birthday'])
                //->setCellValue('E'.$num, $v['age'])
                ->setCellValue('E'.$num, $v['money'].'元')
                ->setCellValue('F'.$num, $v['status'])
                ->setCellValue('G'.$num, $v['type'])
                ->setCellValue('H'.$num, $v['tcusername'])
                ->setCellValue('I'.$num, $v['time']);
              


            }

            $objPHPExcel->getActiveSheet()->setTitle('分成信息表');  
            $objPHPExcel->setActiveSheetIndex(0);  
            $day      = date("m-d");  
            $filename = $day.'分成信息表'; 
            ob_end_clean();//清除缓冲区,避免乱码
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
            header('Cache-Control: max-age=0');
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            exit;

}






function get_fencheng($param_str=''){


if($_REQUEST['typeseach']!=5&&isset($_REQUEST['typeseach'])){
    $where=" where f.type=".$_REQUEST['typeseach'];
    
}
if($_REQUEST['usercode']){
    $sql=" select user_id from ecs_users  where weiyi_num='".$_REQUEST['usercode']."'";
    $user_id=$GLOBALS['db']->getOne($sql);
    if(!$user_id){
        $user_id=0;
    }
    if(!$where){
         $where=" where f.get_shopid=".$user_id;
    }else{
        $where.="  and f.get_shopid=".$user_id;
    }

}
$result = get_filter();

    if ($result === false)

    {


/* 记录总数 */

        $sql = "SELECT COUNT(*) as counts,sum(f.money) as summoney FROM " .$GLOBALS['ecs']->table('fencheng')." as f ".$where;

        $row= $GLOBALS['db']->getRow($sql);
         $filter['record_count']=$row['counts'];
         $filter['sum']=$row['summoney'];


/* 分页大小 */

        $filter = page_and_size($filter);
if($param_str){
    $limit='';
}else{
   $limit=" LIMIT ". $filter['start'] . ",".$filter['page_size']; 
}


 $fclistsql = "select f.id,g.goods_name,eu2.user_name as username,f.money,f.type,f.get_shopid,f.status,f.line_shopid,f.time from `ecs_fencheng` as f
inner join `ecs_goods` as g

on f.goodsid = g.goods_id

inner join `ecs_users` as eu2

on f.userid = eu2.user_id

".$where." order by f.id desc  ".$limit;
set_filter($filter, $sql);

    }else{

        $sql    = $result['sql'];

        $filter = $result['filter'];


    }

$fc_list=$GLOBALS['db']->getAll($fclistsql);

foreach ($fc_list as $key => $value) {
     if($value['get_shopid']<=0){
           $fc_list[$key]['tcusername']='型色主义';
     }else{
        $sql="select user_name from ecs_users where user_id=".$value['get_shopid'];
        $username=$GLOBALS['db']->getOne($sql);
        $fc_list[$key]['tcusername']=$username;

     }
     if($value['line_shopid']<=0){
             $fc_list[$key]['xxdname']='型色主义网站';
     }else{
        $sql="select user_name from ecs_users where user_id=".$value['line_shopid'];
        $username=$GLOBALS['db']->getOne($sql);
        $fc_list[$key]['xxdname']=$username;
     }

}

 return array('fencheng' => $fc_list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count'],'sum'=>$filter['sum']);




}

?>