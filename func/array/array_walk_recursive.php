<?php
/***********************************************************
 *     FileName: array_walk_recursive.php
 *         Desc: 对数组中的每个成员递归地应用用户函数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:52:10
 *      History:
 ***********************************************************/

# 语法：bool array_walk_recursive ( array &$input , callable $funcname [, mixed $userdata = NULL ] )

# 示例：针对数组中的每个成员作用用户自定义函数
$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');
function test_print($item, $key)
{
    echo "$key holds $item\n";
}
array_walk_recursive($fruits, 'test_print');
/*
a holds apple
b holds banana
sour holds lemon
*/ 


