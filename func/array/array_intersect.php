<?php
/***********************************************************
 *     FileName: array_intersect.php
 *         Desc: 计算数组的交集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-10 15:40:09
 *      History:
 ***********************************************************/

# 语法：array array_intersect ( array $array1 , array $array2 [, array $ ... ] )
# 说明：可以多个数组一起求交集，不仅仅限于两个

# 示例：
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
/*
Array
(
    [a] => green
    [0] => red
)
 */

$array3 = array("c" => "green", "blue");
$result = array_intersect($array1, $array2, $array3);
print_r($result);
/*
Array
(
    [a] => green
)
 */

