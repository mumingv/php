<?php
/***********************************************************
 *     FileName: array_array_chunk.php
 *         Desc: 将一个数组分割成多个
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 22:41:00
 *      History:
 ***********************************************************/

# 语法：array array_chunk ( array $input , int $size [, bool $preserve_keys = false ] )

# 示例：
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
/*
Array
(
    [0] => Array
    (
        [0] => a
        [1] => b
    )

    [1] => Array
    (
        [0] => c
        [1] => d
    )

    [2] => Array
    (
        [0] => e
    )
)
 */

print_r(array_chunk($input_array, 2, true));
/*
Array
(
    [0] => Array
    (
        [0] => a
        [1] => b
    )

    [1] => Array
    (
        [2] => c
        [3] => d
    )

    [2] => Array
    (
        [4] => e
    )
)
 */

