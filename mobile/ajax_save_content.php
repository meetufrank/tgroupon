<?php
/**
 * @Author: anchen
 * @Date:   2017-01-06 17:42:35
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-06 19:17:53
 */

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
session_start();

$back_url = $_POST['content'];
session_register("back_url");


exit;
?>