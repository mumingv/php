<?php
/***********************************************************
 *     FileName: array_unshift.php
 *         Desc: 在数组开头插入一个或多个单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:43:27
 *      History:
 ***********************************************************/

# 语法：int array_unshift ( array &$array , mixed $var [, mixed $... ] )

# 示例
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);
/*
Array
(
    [0] => apple
    [1] => raspberry
    [2] => orange
    [3] => banana
)
 */

