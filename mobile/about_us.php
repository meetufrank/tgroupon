<?php
/**
 * @Author: anchen
 * @Date:   2017-03-02 10:14:48
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-03-02 10:18:52
 */
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

include(ROOT_PATH . 'head.php');

if (!isset($_REQUEST['act']))
{
    $_REQUEST['act'] = "about_us";
}


if($_REQUEST['act']=='about_us'){





$smarty->display('about_us.dwt');
exit;
}