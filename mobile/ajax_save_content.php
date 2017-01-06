<?php
/**
 * @Author: anchen
 * @Date:   2017-01-06 17:42:35
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-06 17:56:49
 */

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
session_start();

$_SESSION['back_url']=$_POST['content'];


exit;
?>