<?php
/**
 * 主程序 
 */

require_once('User.php');
require_once('UserCD.php');
require_once('UserCDInterpreter.php');
$user = new User('Jay');
$interpreter = new UserCDInterpreter();
$interpreter->setUser($user);  // 解释器对象中保存了用户对象
print $interpreter->getInterpreted();
print "\n";
