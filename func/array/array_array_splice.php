<?php
/***********************************************************
 *     FileName: array_array_splice.php
 *         Desc: 把数组中的一部分去掉并用其它值取代
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-18 13:36:32
 *      History:
 ***********************************************************/

# 语法：array array_splice ( array &$input , int $offset [, int $length = 0 [, mixed $replacement ]] )

# 示例：
// 删除元素
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_export($input);
/*
array (
    0 => 'red',
    1 => 'green',
)
 */

// 删除元素
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_export($input);
/*
array (
    0 => 'red',
    1 => 'yellow',
)
 */

// 替换元素(两个替换为一个)
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_export($input);
/*
array (
    0 => 'red',
    1 => 'orange',
)
 */

// 替换元素(一个替换为两个)
$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_export($input);
/*
array (
    0 => 'red',
    1 => 'green',
    2 => 'blue',
    3 => 'black',
    4 => 'maroon',
)
 */

// 插入元素
$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
var_export($input);
/*
array (
    0 => 'red',
    1 => 'green',
    2 => 'blue',
    3 => 'purple',
    4 => 'yellow',
)
 */

