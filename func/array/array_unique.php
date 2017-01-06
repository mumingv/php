<?php
/***********************************************************
 *     FileName: array_unique.php
 *         Desc: 移除数组中重复的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:32:51
 *      History:
 ***********************************************************/

# 语法：array array_unique ( array $array [, int $sort_flags = SORT_STRING ] )

# 示例：去除数组中重复的值
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
/*
Array
(
    [a] => green
    [0] => red
    [1] => blue
)
*/


