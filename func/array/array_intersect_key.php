<?php
/***********************************************************
 *     FileName: array_intersect_key.php
 *         Desc: 使用键名比较计算数组的交集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-11 14:42:48
 *      History:
 ***********************************************************/

# 语法：array array_intersect_key ( array $array1 , array $array2 [, array $ ... ] )
# 说明：可以多个数组一起求交集; 不仅仅限于两个; 返回的数据是第一个数组的;

# 示例：
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
print_r(array_intersect_key($array1, $array2));
/*
Array
(
    [blue] => 1
    [green] => 3
)
*/

