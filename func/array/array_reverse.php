G<?php
/***********************************************************
 *     FileName: array_array_reverse.php
 *         Desc: 返回一个单元顺序相反的数组 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 16:55:07
 *      History:
 ***********************************************************/

# 语法：array array_reverse ( array $array [, bool $preserve_keys = false ] )

# 示例：
$input  = array("php", 4.0, array("green", "red"));
$result = array_reverse($input);
$result_keyed = array_reverse($input, true);
print_r($result);
/*
Array
(
    [0] => Array
    (
        [0] => green
        [1] => red
    )

    [1] => 4
    [2] => php
)
 */
print_r($result_keyed);
/*
Array
(
    [2] => Array
    (
        [0] => green
        [1] => red
    )

    [1] => 4
    [0] => php
)
 */

