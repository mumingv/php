<?php
/***********************************************************
 *     FileName: array_fill.php
 *         Desc: 用给定的值填充数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-03 15:56:14
 *      History:
 ***********************************************************/

# 语法：array array_fill ( int $start_index , int $num , mixed $value )
# 说明：如果第一个参数为负值，则数组的第一个元素的key为该值，第二个元素的key则从0开始。

# 示例：
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
/*
Array
(
    [5] => banana
    [6] => banana
    [7] => banana
    [8] => banana
    [9] => banana
    [10] => banana
)
Array
(
    [-2] => pear
    [0] => pear
    [1] => pear
    [2] => pear
)
*/



