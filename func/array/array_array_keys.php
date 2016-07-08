<?php
/***********************************************************
 *     FileName: array_array_keys.php
 *         Desc: 返回数组中部分的或所有的键名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 16:34:24
 *      History:
 ***********************************************************/

# 语法：array array_keys ( array $array [, mixed $search_value [, bool $strict = false ]] )
# 说明：返回值为一个数组，该数组包含了希望查询的键名

# 示例：
## 返回所有键名
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
/*
Array
(
    [0] => 0
    [1] => color
)
 */

## 返回指定的键名
print_r(array_keys($array, "red"));
/*
Array
(
    [0] => color
)
 */

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
/*
Array
(
    [0] => 0
    [1] => 3
    [2] => 4
)
 */

$array = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);
print_r(array_keys($array));
/*
Array
(
    [0] => color
    [1] => size
)
 */

