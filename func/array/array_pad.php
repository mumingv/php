<?php
/***********************************************************
 *     FileName: array_pad.php
 *         Desc: 用值将数组填补到指定长度
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 13:20:48
 *      History:
 ***********************************************************/

# 语法：array array_pad ( array $input , int $pad_size , mixed $pad_value )

# 示例
$input = array(12, 10, 9);
$result1 = array_pad($input, 5, 0);
$result2 = array_pad($input, -7, -1);
$result3 = array_pad($input, 2, "noop");
print_r($result1);
print_r($result2);
print_r($result3);
/*
Array
(
    [0] => 12
    [1] => 10
    [2] => 9
    [3] => 0
    [4] => 0
)
Array
(
    [0] => -1
    [1] => -1
    [2] => -1
    [3] => -1
    [4] => 12
    [5] => 10
    [6] => 9
)
Array
(
    [0] => 12
    [1] => 10
    [2] => 9
)
*/

