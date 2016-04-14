<?php
/***********************************************************
 *     FileName: array_array_count_values.php
 *         Desc: 统计数组中所有的值出现的次数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 22:55:03
 *      History:
 ***********************************************************/

# 语法：array array_count_values ( array $input )

# 示例：
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
/*
Array
(
    [1] => 2
    [hello] => 2
    [world] => 1
)
 */

