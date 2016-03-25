<?php
/***********************************************************
 *     FileName: variable_var_export.php
 *         Desc: 输出或返回一个变量的字符串表示
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 11:48:47
 *      History:
 ***********************************************************/

# 语法：mixed var_export ( mixed $expression [, bool $return ] )

$a = array(1, 2, array ("a", "b", "c"));
var_export($a);
echo PHP_EOL;
/*
输出：
array (
  0 => 1,
  1 => 2,
  2 => 
    array (
    0 => 'a',
    1 => 'b',
    2 => 'c',
  ),
)
*/

$b = 3.1;
$v = var_export($b);
echo $v; //3.100000000000000088817841970012523233890533447265625

