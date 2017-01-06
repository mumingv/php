<?php
/***********************************************************
 *     FileName: array_values.php
 *         Desc: 返回数组中所有的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:46:20
 *      History:
 ***********************************************************/

# 语法：array array_values ( array $input )

# 示例：
$array = array("size" => "XL", "color" => "gold");
echo(json_encode(array_values($array))."\n");  // ["XL","gold"]
print_r(array_values($array));
/*
Array
(
    [0] => XL
    [1] => gold
)
 */

