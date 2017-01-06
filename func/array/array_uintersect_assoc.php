<?php
/***********************************************************
 *     FileName: array_uintersect_assoc.php
 *         Desc: 带索引检查计算数组的交集，用回调函数比较数据
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:13:27
 *      History:
 ***********************************************************/

# 语法：array array_uintersect_assoc ( array $array1 , array $array2 [, array $ ... ], callable $data_compare_func )

# 示例：计算数组的交集
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));
/*
Array
(
    [a] => green
)
*/


