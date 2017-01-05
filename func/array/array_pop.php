<?php
/***********************************************************
 *     FileName: array_array_pop.pop
 *         Desc: 将数组最后一个单元弹出（出栈）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 11:51:05
 *      History:
 ***********************************************************/

# 语法：mixed array_pop ( array &$array )
# 说明：
# 0. 与array_shift函数功能相对
# 1. 被弹出数组的单元作为返回值返回

# 示例
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($fruit);
echo PHP_EOL;
print_r($stack);
/*
raspberry
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
)
*/

