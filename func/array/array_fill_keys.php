<?php
/***********************************************************
 *     FileName: array_fill_keys.php
 *         Desc: 使用指定的键和值填充数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-03 15:50:16
 *      History:
 ***********************************************************/

# 语法：array array_fill_keys ( array $keys , mixed $value )

# 示例：
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);
/*
Array
(
    [foo] => banana
    [5] => banana
    [10] => banana
    [bar] => banana
)
*/


