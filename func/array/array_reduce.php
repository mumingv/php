<?php
/***********************************************************
 *     FileName: array_reduce.php
 *         Desc: 用回调函数迭代地将数组简化为单一的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 14:08:01
 *      History:
 ***********************************************************/

# 语法：mixed array_reduce ( array $input , callable $function [, mixed $initial = NULL ] )
# 回调函数：mixed callback ( mixed &$result , mixed $item )

# 示例：简化数组，计算数组中所有元素的和
function rsum($v, $w)
{
    $v += $w;
    return $v;
}
$a = array(1, 2, 3, 4, 5);
$b = array_reduce($a, "rsum");
print_r($b);  // 15
echo "\n";


# 示例：简化数组，计算数组中所有元素的积
function rmul($v, $w)
{
    $v *= $w;
    return $v;
}
$a = array(1, 2, 3, 4, 5);
$c = array_reduce($a, "rmul", 10);
print_r($c);  // 1200
echo "\n";


# 示例：简化数组，计算数组中所有元素的积
function rsum2($v, $w)
{
    $v += $w;
    return $v;
}
$x = array();
$d = array_reduce($x, "rsum2", "No data to reduce");
print_r($d);  // No data to reduce
echo "\n";










