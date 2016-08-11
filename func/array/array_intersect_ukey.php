<?php
/***********************************************************
 *     FileName: array_intersect_ukey.php
 *         Desc: 用回调函数比较键名来计算数组的交集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-11 14:50:49
 *      History:
 ***********************************************************/

# 语法：array array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )
# 说明：可以多个数组一起求交集; 不仅仅限于两个; 返回的数据是第一个数组的;

# 示例：
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
print_r(array_intersect_ukey($array1, $array2, 'key_compare_func'));
/*
Array
(
    [blue] => 1
    [green] => 3
)
*/

