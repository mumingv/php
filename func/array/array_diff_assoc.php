<?php
/***********************************************************
 *     FileName: array_diff_assoc.php
 *         Desc: 带索引检查计算数组的差集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-10 17:26:34
 *      History:
 ***********************************************************/

# 语法：array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )
# 说明：
# 1. 可以多个数组一起求差集，不仅仅限于两个;
# 2. 和array_diff相比，不仅会比较值是否相同，也会比较键是否相同;
# 3. 键或值比较的时候，都是统一转换成字符串进行比较;

# 示例：
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);
/*
Array
(
    [b] => brown
    [c] => blue
    [0] => red
)
*/


# 示例：多个数组的差集
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$array3 = array("a" => "green", "b" => "brown");
$result = array_diff_assoc($array1, $array2, $array3);
print_r($result);
/*
Array
(
    [c] => blue
    [0] => red
)
*/


# 示例：
$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
print_r($result);
/*
Array
(
    [0] => 0
    [1] => 1
)
*/

