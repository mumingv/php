<?php
/***********************************************************
 *     FileName: array_array_push.php
 *         Desc: 将一个或多个单元压入数组的末尾（入栈）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-18 13:49:34
 *      History:
 ***********************************************************/

# 语法：int array_push ( array &$array , mixed $var [, mixed $... ] )
# 说明：
# 1. 该函数和语句 "$array[] = $var" 功能相同
# 2. 返回值为元素插入后，数组中元素的总个数

# 示例
$stack = array("orange", "banana");
$number = array_push($stack, "apple", "raspberry");
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
print_r($number); //4

