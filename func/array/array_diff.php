<?php
/***********************************************************
 *     FileName: array_diff.php
 *         Desc: 计算数组的差集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-10 17:23:30
 *      History:
 ***********************************************************/

# 语法：array array_diff ( array $array1 , array $array2 [, array $... ] )
# 说明：可以多个数组一起求差集，不仅仅限于两个

# 示例：
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
/*
Array
(
    [1] => blue
)
*/

