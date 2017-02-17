<?php
/**
 * @Author: anchen
 * @Date:   2016-12-27 10:42:17
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-16 18:15:59
 */


define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');


include('head.php');



if (!isset($_REQUEST['step']))
{
    $_REQUEST['step'] = "goods_list";
}

if ($_REQUEST['step'] == 'goods_list'){


       $smarty->assign('search_val',$_COOKIE['search_content']);
       $smarty->display('goods_list.dwt');


}
elseif($_REQUEST['step'] == 'ajax_goods_count'){

         $page_count=15;   ///设置每页显示条数
        if(!$_POST['search']){
              setcookie('showsearch','',time()-3600);
              setcookie('search_content','',time()-3600);
        }

       if($_POST['type']=='showprice'){
          if(intval($_POST['typeid'])!=1){      //价格区间筛选
            //获取价格区间
            $price=get_price_type($_POST['typeid']);

            $where=" and (ep.attributeprice+g.more_price)>=".$price['min_money']." and (ep.attributeprice+g.more_price)<=".$price['max_money'];
            setcookie('showprice',$where);
            }else{
             setcookie('showprice','',time()-3600);
          }
            if($_COOKIE['showsearch']&&$_COOKIE['search_content']){
                        $str=$_COOKIE['search_content'];
                        $str=strFilter($str);
                        $num=abslength($str);
                        $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where.=$_COOKIE['showtype'].$_COOKIE['showsearch'];
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ";
                      $where_array[]=$where;
                     $b_count--;
                    }
                //$where.=$_COOKIE['showtype'].$_COOKIE['showsearch']." '%".$_COOKIE['search_content']."%' ";
            }else{
                $where.=$_COOKIE['showtype'];
                $where_array[]=$where;
            }



       }elseif($_POST['type']=='showtype'){  //类型
           if(intval($_POST['typeid'])){      //商品类型筛选
               $new_arr[]=$_POST['typeid'];
                 $sql = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = ".$_POST['typeid'];
                $parent_id = $GLOBALS['db']->getALL($sql);

               foreach ($parent_id as $key => $value) {

                    $new_arr[]=$value['cat_id'];
                    $sql = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = ".$value['cat_id'];
                    $cart_parent_id = $GLOBALS['db']->getALL($sql);
                    foreach ($cart_parent_id as $kk => $vv) {
                        $new_arr[]=$vv['cat_id'];
                    }
                }

                  $cart_id=implode(',',$new_arr);



                $where=" and g.cat_id in (".$cart_id.") ";
                setcookie('showtype',$where);

           }else{
               setcookie('showtype','',time()-3600);
           }


                if($_COOKIE['showsearch']&&$_COOKIE['search_content']){
                        $str=$_COOKIE['search_content'];
                        $str=strFilter($str);
                        $num=abslength($str);
                        $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where.=$_COOKIE['showprice'].$_COOKIE['showsearch'];
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ";
                      $where_array[]=$where;
                     $b_count--;
                    }
                       // $where.=$_COOKIE['showprice'].$_COOKIE['showsearch']." '%".$_COOKIE['search_content']."%' ";
                }else{
                       $where.=$_COOKIE['showprice'];
                       $where_array[]=$where;
                }

       }elseif($_POST['type']=='showsearch'){

             if($_POST['typeid']){
                    setcookie('search_content',$_POST['typeid']);
                    $str=strFilter($_POST['typeid']);
                    $num=abslength($str);
                    $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where=" and ( ";
                      setcookie('showsearch',$where);
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ".$_COOKIE['showprice'].$_COOKIE['showtype'];
                      $where_array[]=$where;
                     $b_count--;
                    }

                   // $where=" and g.goods_name like ";
                   // setcookie('showsearch',$where);
                   // $where.=" '%".$_POST['typeid']."%' ";
                   // $where.=$_COOKIE['showprice'].$_COOKIE['showtype'];
                   // setcookie('search_content',$_POST['typeid']);

                 }else{
                      setcookie('showsearch','',time()-3600);
                      setcookie('search_content','',time()-3600);
                 }
       }


       $no_str='';
       $goods_count=0;

   if(is_array($where_array)){
        foreach($where_array as $key=>$value){
              $data_list=array();
              $data_list=get_goods_id($value,$no_str);
              $goods_count+=get_goods_count($value,$no_str);
              if(is_array($data_list)){
                foreach ($data_list as $g_k => $g_v) {
                $no_id[]=$g_v['goods_id'];
                }
                $no_str=@implode(',',$no_id);

              }

              //$goods_list = array_merge($goods_list,$data_list);  //商品列表

        }
   }else{
     // $goods_list=get_goods_list();
      $goods_count+=get_goods_count();
   }


         $num=ceil($goods_count/$page_count);

         echo json_encode($num);
         exit;

}
elseif ($_REQUEST['step'] == 'ajax_goods_list') {

       $page_count=15;   ///设置每页显示条数
       if(!intval($_POST['page_num'])){
            $page_num=1;
       }else{
           $page_num=intval($_POST['page_num']);
       }
       if(!$_POST['search']){
              setcookie('showsearch','',time()-3600);
              setcookie('search_content','',time()-3600);
        }
       $limit="  limit ".($page_num-1)*$page_count." ,".$page_count." ";
       if($_POST['type']=='showprice'){
        $prev_search=$_COOKIE['search_content'];  //先拿到上一次搜索的内容
          if(intval($_POST['typeid'])!=1){      //价格区间筛选
            //获取价格区间
            $price=get_price_type($_POST['typeid']);

            $where=" and (ep.attributeprice+g.more_price)>=".$price['min_money']." and (ep.attributeprice+g.more_price)<=".$price['max_money'];
            setcookie('showprice',$where);
            if($_COOKIE['showsearch']&&$_COOKIE['search_content']){
                        $str=$_COOKIE['search_content'];
                        $str=strFilter($str);
                        $num=abslength($str);
                        $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where.=$_COOKIE['showtype'].$_COOKIE['showsearch'];
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ";
                      $where_array[]=$where;
                     $b_count--;
                    }
                //$where.=$_COOKIE['showtype'].$_COOKIE['showsearch']." '%".$_COOKIE['search_content']."%' ";
            }else{
                $where.=$_COOKIE['showtype'];
                $where_array[]=$where;
            }


          }else{
             setcookie('showprice','',time()-3600);
          }
       }elseif($_POST['type']=='showtype'){  //类型
        $prev_search=$_COOKIE['search_content'];  //先拿到上一次搜索的内容
           if(intval($_POST['typeid'])){      //商品类型筛选
               $new_arr[]=$_POST['typeid'];
                $sql = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = ".$_POST['typeid'];
                $parent_id = $GLOBALS['db']->getALL($sql);
                foreach ($parent_id as $key => $value) {

                    $new_arr[]=$value['cat_id'];
                    $sql = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = ".$value['cat_id'];
                    $cart_parent_id = $GLOBALS['db']->getALL($sql);
                    foreach ($cart_parent_id as $kk => $vv) {
                        $new_arr[]=$vv['cat_id'];
                    }
                }

                  $cart_id=implode(',',$new_arr);


                $where=" and g.cat_id in (".$cart_id.") ";

                setcookie('showtype',$where);
                if($_COOKIE['showsearch']&&$_COOKIE['search_content']){
                        $str=$_COOKIE['search_content'];
                        $str=strFilter($str);
                        $num=abslength($str);
                        $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where.=$_COOKIE['showprice'].$_COOKIE['showsearch'];
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ";
                      $where_array[]=$where;
                     $b_count--;
                    }
                       //$where.=$_COOKIE['showprice'].$_COOKIE['showsearch']." '%".$_COOKIE['search_content']."%' ";
                }else{
                       $where.=$_COOKIE['showprice'];
                       $where_array[]=$where;
                }

           }else{
               setcookie('showtype','',time()-3600);
           }
       }elseif($_POST['type']=='showsearch'){
             $prev_search=$_COOKIE['search_content'];  //先拿到上一次搜索的内容
             if($_POST['typeid']){
                    setcookie('search_content',$_POST['typeid']);
                     $str=strFilter($_POST['typeid']);
                    $num=abslength($str);
                    $b_count=$num;

                    for($a=$num-1;$a>=0;$a--){
                      $count=0;
                      $new_where=" ";//初始化
                      $search_value=array();  //初始化数组
                      $where=" and ( ";
                      setcookie('showsearch',$where);
                      for($b=0;$b<$num-$a;$b++){
                          $search_value[]=csubstr($str,$count,$b_count);

                          $count++;
                      }
                      $search_count=count($search_value);   //查询结果字符串的长度
                      $or_num=$search_count-1;  //or存在的个数
                      $value_count=0; //初始化结果循环次数
                      foreach($search_value as $s_k=>$s_v){

                          $new_where.="  g.goods_name like '%".$s_v."%' ";
                          if($value_count<$or_num){
                            $new_where.=" or";
                          }
                          $value_count++;
                      }

                      $where.=$new_where." ) ".$_COOKIE['showprice'].$_COOKIE['showtype'];
                      $where_array[]=$where;
                     $b_count--;
                    }

                   // $where=" and g.goods_name like ";
                   // setcookie('showsearch',$where);
                   // $where.=" '%".$_POST['typeid']."%' ";
                   // $where.=$_COOKIE['showprice'].$_COOKIE['showtype'];
                   // setcookie('search_content',$_POST['typeid']);

                 }else{
                      setcookie('showsearch','',time()-3600);
                      setcookie('search_content','',time()-3600);
                 }
       }

       $no_str='';
       $goods_count=0;
   if(is_array($where_array)){
        foreach($where_array as $key=>$value){
              $data_list=array();
              $data_list=get_goods_list($value,$limit,$no_str);
              $goods_count+=get_goods_count($value,$no_str);
              if(is_array($data_list)){
                foreach ($data_list as $g_k => $g_v) {
                $goods_list[]=$data_list[$g_k];
                $no_id[]=$g_v['goods_id'];
                }
                $no_str=@implode(',',$no_id);

              }

        }
   }else{
      $goods_list=get_goods_list();
      $goods_count+=get_goods_count();
   }


       // $sql="select min(ep.product_id) as product_id,ep.goods_id,(ep.attributeprice+g.more_price) as attributeprice,ep.attributeimg,g.goods_name from ecs_products as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where." GROUP BY ep.goods_id ".$limit;
        // $sql = "SELECT goods_id, goods_name, goods_type, goods_sn, market_price,shop_price, is_on_sale, is_best, is_new, is_hot, sort_order, goods_number, integral, sales_volume_base,goods_thumb, " .
        //             " (promote_price > 0 AND promote_start_date <= '$today' AND promote_end_date >= '$today') AS is_promote ".
        //             " FROM " . $GLOBALS['ecs']->table('goods') . " AS g WHERE is_delete=0 AND is_on_sale=1 ".$where.$limit;

      // $goods_list = $GLOBALS['db']->getALL($sql);  //商品列表




        // /* 记录总数 */
        // $sql = "SELECT COUNT(distinct ep.goods_id) FROM " .$GLOBALS['ecs']->table('products'). " as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where;
        // $goods_count = $GLOBALS['db']->getOne($sql);

         $data['data']=$goods_list;
         $data['count']=$goods_count;
         if($_POST['type']=='showsearch'){
         $data['search']=$_POST['typeid'];
         }else{
          $data['search']=$_COOKIE['search_content'];
         }
         if(!$data['data']){
          $data['prev_search']=$prev_search;
         }
         $num=ceil($goods_count/$page_count);

         $data['pages']=$num;



       echo json_encode($data);


}
elseif ($_REQUEST['step'] == 'ajax_goods_type') {  //获取商品类型



            $pcat_array = get_categories_tree();

            $new_array[0]['id']=0;
            $new_array[0]['name']="全部";
            $ii=1;
            foreach ($pcat_array as $key => $pcat_data) {

                $new_array[$ii]=$pcat_array[$key];
                $new_array[$ii]['name'] = $pcat_data['name'];
                if ($pcat_data['cat_id']) {
                    foreach ($pcat_data['cat_id'] as $k => $v) {
                        $new_array[$ii]['cat_id'][$k]['name'] = $v['name'];
                    }
                }
                $ii++;
            }




            //获取价格区间
            $sql=" select * from ".$GLOBALS['ecs']->table('money_type');
            $price_list=$GLOBALS['db']->getAll($sql);

           // $smarty->assign('pcat_array', $pcat_array);

           $data[0]['data']=$new_array;
           $data[0]['title']='商品分类';
           $data[0]['style']='widget-categories';
           $data[1]['data']=$price_list;
           $data[1]['title']='价格区间';
           $data[1]['style']='widget-price';

            echo json_encode($data);
}



function get_price_type($id=''){
                if($id){
                    $where=" where money_id=".$id;
                }
                 $sql=" select * from ".$GLOBALS['ecs']->table('money_type').$where;
                 if($id){
                    $price=$GLOBALS['db']->getRow($sql);
                }else{
                    $price=$GLOBALS['db']->getAll($sql);
                }



            return $price;
    }
function get_goods_list($where='',$limit='',$str=''){
   if($str){
    $add_where="and g.goods_id not in (".$str.") ";
   }
      $sql="select min(ep.product_id) as product_id,ep.goods_id,ep.priceratio,cast(ep.attributeprice+g.more_price as decimal(10,2)) as attributeprice,ep.attributeimg,g.goods_name from ecs_products as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where.$add_where." GROUP BY ep.goods_id ".$limit." order by sort_order desc";
      $data=$GLOBALS['db']->getALL($sql);
      foreach ($data as $key => $value) {
        if($value['priceratio']&&$value['priceratio']<1&&$value['priceratio']>0){
          $oldprice=$value['attributeprice']/$value['priceratio'];
          $data[$key]['oldprice']= sprintf("%.2f",round($oldprice,2));
        }
      }
      return $data;
}

function get_goods_count($where='',$str=''){
  if($str){
    $add_where="and g.goods_id not in (".$str.") ";
   }
   $sql = "SELECT COUNT(distinct ep.goods_id) FROM " .$GLOBALS['ecs']->table('products'). " as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where.$add_where;
  $goods_count = $GLOBALS['db']->getOne($sql);

  return $goods_count;
}

function get_goods_id($where='',$str=''){
if($str){
    $add_where="and g.goods_id not in (".$str.") ";
   }
  $sql="select min(ep.product_id) as product_id,ep.goods_id from ecs_products as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where.$add_where." GROUP BY ep.goods_id ";
      $data=$GLOBALS['db']->getALL($sql);

      return $data;
}