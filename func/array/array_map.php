<?php
/***********************************************************
 *     FileName: array_array_map.php
 *         Desc: 将回调函数作用到给定数组的单元上
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 23:40:58
 *      History:
 ***********************************************************/

# 语法：array array_map ( callable $callback , array $arr1 [, array $... ] )

# 示例: 一个数组参数
function cube($n)
{
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
/*
 * Array
 * (
 *     [0] => 1
 *     [1] => 8
 *     [2] => 27
 *     [3] => 64
 *     [4] => 125
 * )
 */

# 示例: 两个数组参数
function add($m, $n)
{
    return($m + $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array(1, 2, 3, 4, 5);
$c = array_map("add", $a, $b);
print_r($c);
/*
 * Array
 * (
 *     [0] => 2
 *     [1] => 4
 *     [2] => 6 
 *     [3] => 8
 *     [4] => 10
 * )
 */

