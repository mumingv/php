<?php
/***********************************************************
 *     FileName: array_array_merge.php
 *         Desc: 合并一个或多个数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 17:25:51
 *      History:
 ***********************************************************/

# 语法：array array_merge ( array $array1 [, array $... ] )

# 示例：
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
/*
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)
 */

