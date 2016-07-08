<?php
/***********************************************************
 *     FileName: array_array_change_key_case.php
 *         Desc: 返回字符串键名全为小写或大写的数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 21:51:14
 *      History:
 ***********************************************************/

# 语法：array array_change_key_case ( array $input [, int $case = CASE_LOWER ] )
# 第二个参数的取值：CASE_UPPER 或 CASE_LOWER

# 示例：

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array));
/*
Array
(
    [first] => 1
    [second] => 4
)
 */

print_r(array_change_key_case($input_array, CASE_UPPER));
/*
Array
(
    [FIRST] => 1
    [SECOND] => 4
)
 */

