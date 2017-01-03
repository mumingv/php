<?php
/***********************************************************
 *     FileName: array_filter.php
 *         Desc: 用回调函数过滤数组中的单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-03 16:10:36
 *      History:
 ***********************************************************/

# 语法：array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )

# 示例：过滤数组中基数值或偶数值
function odd($var)
{
    return($var & 1);
}

function even($var)
{
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));
/*
Odd :
Array
(
    [a] => 1
    [c] => 3
    [e] => 5
)
Even:
Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12
)
*/


# 示例：过滤数组，不使用callback函数(值为FALSE的项将被去除)
$array1 = array("apple" => 5, "banana" => 0, "pear" => 6);
print_r(array_filter($array1));
/*
Array
(
    [apple] => 5
    [pear] => 6
)
*/





