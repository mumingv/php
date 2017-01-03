<?php
/***********************************************************
 *     FileName: array_diff_uassoc.php
 *         Desc: 用用户提供的回调函数做索引检查来计算数组的差集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-03 09:53:03
 *      History:
 ***********************************************************/

# 语法：array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )
# 用户自定义函数原型：int callback ( mixed $a, mixed $b )
# 说明：
# 1. 可以多个数组一起求差集，不仅仅限于两个;
# 2. 和array_diff相比，不仅会比较值是否相同，也会比较键是否相同;
# 3. 键或值比较的时候，都是统一转换成字符串进行比较;
# 4. 和 array_diff_assoc() 不同的是使用了用户自定义的回调函数，而不是内置的函数。

# 示例：
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return (($a > $b) ? 1 : -1);
}
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);
/*
Array
(
    [b] => brown
    [c] => blue
    [0] => red
)
*/








