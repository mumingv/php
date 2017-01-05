<?php
/***********************************************************
 *     FileName: array_replace_recursive.php
 *         Desc: 使用传递的数组递归替换第一个数组的元素
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 14:51:23
 *      History:
 ***********************************************************/

# 语法：array array_replace_recursive ( array $array1 , array $array2 [, array $... ] )

# 示例：使用一个数组作为替换数组
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
$basket = array_replace_recursive($base, $replacements);
print_r($basket);
/*
Array
(
    [citrus] => Array
        (
            [0] => pineapple
        )

    [berries] => Array
        (
            [0] => blueberry
            [1] => raspberry
        )

)
*/


# 示例：使用两个数组作为替换数组
$base = array('citrus' => array("orange") , 'berries' => array("blackberry", "raspberry"), 'others' => 'banana' );
$replacements = array('citrus' => 'pineapple', 'berries' => array('blueberry'), 'others' => array('litchis'));
$replacements2 = array('citrus' => array('pineapple'), 'berries' => array('blueberry'), 'others' => 'litchis');
$basket = array_replace_recursive($base, $replacements, $replacements2);
print_r($basket);
/*
Array
(
    [citrus] => Array
        (
            [0] => pineapple
        )

    [berries] => Array
        (
            [0] => blueberry
            [1] => raspberry
        )

    [others] => litchis
)
*/






