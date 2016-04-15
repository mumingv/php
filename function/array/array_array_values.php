<?php
/***********************************************************
 *     FileName: array_array_values.php
 *         Desc: 返回数组中所有的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-15 14:56:23
 *      History:
 ***********************************************************/

# 语法：array array_values ( array $input )

# 示例：
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));
/*
Array
(
    [0] => XL
    [1] => gold
)
 */

