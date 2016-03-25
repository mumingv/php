<?php
/***********************************************************
 *     FileName: array_pop.php
 *         Desc: 将数组最后一个单元弹出（出栈）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 16:40:10
 *      History:
 ***********************************************************/

# mixed array_pop ( array &$array )

# 示例
$stack = array("orange", "banana", "apple", "raspberry");
print_r($stack);
/*
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
    [3] => raspberry
)
*/

$fruit = array_pop($stack);
print_r($stack);
/*
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
)
*/

