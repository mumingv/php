<?php
/***********************************************************
 *     FileName: variable_is_array.php
 *         Desc: 检测变量是否是数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 17:03:15
 *      History:
 ***********************************************************/

# 语法：bool is_array ( mixed $var )

# 示例
$arr = array();
print_r(is_array($arr)); //1
var_export(is_array($arr)); //true

$arr = array(1, 2, 3);
print_r(is_array($arr)); //1
var_export(is_array($arr)); //true

$str = 'hello';
echo PHP_EOL;
print_r(is_array($str)); // (什么都没有打印)
var_export(is_array($str)); //true

