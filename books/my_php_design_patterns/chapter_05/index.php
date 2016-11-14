<?php
/**
 * 主程序 
 */

// [重要说明]本实例涉及数据库操作，注意如下两点：
// 1. 数据库为pdp，备份在backup目录中；
// 2. 数据库密码，存放在config.passwd文件中；

require_once('BaseDao.php');
require_once('User.php');

// 下面这些配置需要放在配置文件中
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
$password = trim(file_get_contents('config.passwd'));
define('DB_PASS', $password);
define('DB_DATABASE', 'pdp');

// 主程序

// 使用基类提供的方法，查询主键(id)值为1的用户信息
$userObj = new User();
$userInfo = $userObj->query(1);
echo "User info number: ".count($userInfo).PHP_EOL;
foreach ($userInfo as $user) {
    echo "id: ".$user['id'].", name: ".$user['name'].", tel: ".$user['tel'].PHP_EOL;
}

// 使用基类提供的方法，更新主键(id)值为1的用户信息
$userObj->update(array('id' => 1, 'name' => 'Jay', 'tel' => '18612345678'));

// 使用派生类提供的方法，查询名字为'Jay'的所有用户信息
$userInfo = $userObj->getUserByName('Jay');
echo "User info number: ".count($userInfo).PHP_EOL;
foreach ($userInfo as $user) {
    echo "id: ".$user['id'].", name: ".$user['name'].", tel: ".$user['tel'].PHP_EOL;
}

