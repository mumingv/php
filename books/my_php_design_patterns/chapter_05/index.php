<?php
/**
 * 主程序 
 */

require_once('BaseDao.php');
require_once('User.php');

// 下面这些配置需要放在配置文件中
define('DB_USER', 'root');
define('DB_PASS', 'Mysql2016!');
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'pdp');

// 主程序
$user = new User();
$result = $user->query(1);
var_dump($result);

