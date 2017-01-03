<?php
/***********************************************************
 *     FileName: array_diff_ukey.php
 *         Desc: 用回调函数对键名比较计算数组的差集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-03 10:07:09
 *      History:
 ***********************************************************/

# 语法：array array_diff_ukey ( array $array1 , array $array2 [, array $ ... ], callable $key_compare_func )
# 用于自定义比较函数原型：int callback ( mixed $a, mixed $b )

# 示例：两个数组的差集
function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
print_r(array_diff_ukey($array1, $array2, 'key_compare_func'));
/*
Array
(
    [red] => 2
    [purple] => 4
)
*/

