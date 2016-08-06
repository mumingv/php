<?php
/***********************************************************
 *     FileName: array_array_slice.php
 *         Desc: 从数组中取出一段
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-18 13:27:53
 *      History:
 ***********************************************************/

# 语法：array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )

# 示例：
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 2);      // returns "c", "d", and "e"
var_export($output);
/*
array (
    0 => 'c',
    1 => 'd',
    2 => 'e',
)
 */

$output = array_slice($input, -2, 1);  // returns "d"
var_export($output);
/*
array (
    0 => 'd',
)
 */

$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
var_export($output);
/*
array (
    0 => 'a',
    1 => 'b',
    2 => 'c',
)
 */

print_r(array_slice($input, 2, -1));
/*
Array
(
    [0] => c
    [1] => d
)
 */

print_r(array_slice($input, 2, -1, true));
/*
Array
(
    [2] => c
    [3] => d
)
 */

