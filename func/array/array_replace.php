<?php
/***********************************************************
 *     FileName: array_replace.php
 *         Desc: 使用传递的数组替换第一个数组的元素
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 15:05:31
 *      History:
 ***********************************************************/

# 语法：array array_replace ( array $array1 , array $array2 [, array $... ] )

# 示例：使用一个数组作为替换数组
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
/*
Array
(
    [0] => grape
    [1] => banana
    [2] => apple
    [3] => raspberry
    [4] => cherry
)
*/






