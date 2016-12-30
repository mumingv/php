<?php
/***********************************************************
 *     FileName: array_diff_key.php
 *         Desc: 使用键名比较计算数组的差集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-31 00:16:17
 *      History:
 ***********************************************************/

# 语法：array array_diff_key ( array $array1 , array $array2 [, array $... ] )


# 示例：两个数组的差集
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
$result = array_diff_key($array1, $array2);
print_r($result);
/*
Array
(
    [red] => 2
    [purple] => 4
)
*/


# 示例：多个数组的差集
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4); 
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8); 
$array3 = array('purple' => 9);
$result = array_diff_key($array1, $array2, $array3);
print_r($result);
/*
Array
(
    [red] => 2
)
*/






