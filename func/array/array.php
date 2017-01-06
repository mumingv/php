<?php
/***********************************************************
 *     FileName: array.php
 *         Desc: 新建一个数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 15:49:57
 *      History:
 ***********************************************************/

# 语法：array array ([ mixed $... ] )

# 示例：创建一个数组
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
print_r($fruits);
/*
Array
(
    [fruits] => Array
        (
            [a] => orange
            [b] => banana
            [c] => apple
        )

    [numbers] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
            [5] => 6
        )

    [holes] => Array
        (
            [0] => first
            [5] => second
            [6] => third
        )

)
*/


# 示例：访问双引号内的数组
$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
/*
Hello baz!
*/


