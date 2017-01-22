<?php
/***********************************************************
 *     FileName: string_str_getcsv.php
 *         Desc: 解析 CSV 字符串为一个数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 23:30:57
 *      History:
 ***********************************************************/

# 语法：array str_getcsv ( string $input [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]] )

# 示例
print_r(str_getcsv("1,mumingv\n2,henry", "\n"));
/*
Array
(
    [0] => 1,mumingv
    [1] => 2,henry
)
*/

# 示例
$csv = array_map('str_getcsv', file('../../data/data.csv'));
print_r($csv);
/*
array (
  0 => 
  array (
    0 => '1',
    1 => 'mumingv',
  ),
  1 => 
  array (
    0 => '2',
    1 => 'henry',
  ),
)
*/

