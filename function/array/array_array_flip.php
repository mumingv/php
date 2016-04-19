<?php
/***********************************************************
 *     FileName: array_array_flip.php
 *         Desc: 交换数组中的键和值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 16:50:03
 *      History:
 ***********************************************************/

# 语法：array array_flip ( array $trans )

# 示例：
$trans = array("a" => 1, "b" => 2, "c" => 3);
$trans = array_flip($trans);
print_r($trans);
/*
Array
(
    [1] => a
    [2] => b
    [3] => c
)
 */

$trans = array("a" => 1, "b" => 2, "c" => 2);
$trans = array_flip($trans);
print_r($trans);
/*
Array
(
    [1] => a
    [2] => c
)
 */

