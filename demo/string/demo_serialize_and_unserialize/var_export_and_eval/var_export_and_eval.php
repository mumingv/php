<?php
/***********************************************************
 *     FileName: var_export_and_eval.php
 *         Desc: 序列化和反序列化：使用var_export和eval函数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-13 19:39:38
 *      History:
 ***********************************************************/

$a = array('a' => 'Apple' ,'b' => 'banana' , 'c' => 'Coconut');

# 序列化
$s = var_export($a , true);
echo $s.PHP_EOL;

# 反序列化
eval('$my_var=' . $s . ';');
print_r($my_var);
