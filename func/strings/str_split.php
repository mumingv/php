<?php
/***********************************************************
 *     FileName: str_split.php
 *         Desc: 将字符串转换为数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-07 15:22:54
 *      History:
 ***********************************************************/

# 语法：array str_split ( string $string [, int $split_length = 1 ] )

# 示例：
$str = "Hello Friend";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
print_r($arr2);
/*
Array
(
    [0] => H
    [1] => e
    [2] => l
    [3] => l
    [4] => o
    [5] =>  
    [6] => F
    [7] => r
    [8] => i
    [9] => e
    [10] => n
    [11] => d
)
Array
(
    [0] => Hel
    [1] => lo 
    [2] => Fri
    [3] => end
)
*/

