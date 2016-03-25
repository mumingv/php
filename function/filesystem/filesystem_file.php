<?php
/***********************************************************
 *     FileName: filesystem_file.php
 *         Desc: 把整个文件读入一个数组中
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 23:56:15
 *      History:
 ***********************************************************/

# 语法：array file ( string $filename [, int $flags = 0 [, resource $context ]] )
# 参数：$flags的取值:
# 1. FILE_USE_INCLUDE_PATH
# 2. FILE_IGNORE_NEW_LINES
# 3. FILE_SKIP_EMPTY_LINES

# 示例：直接读不带参数, 换行符也会被读到数组中去
$arr = file("../../data/data.csv");
var_export($arr);
/*
array (
    0 => '1,mumingv
    ',
    1 => '2,henry
    ',
)
*/

# 示例：直接读带参数, 去除换行符
$arr2 = file("../../data/data.csv", FILE_IGNORE_NEW_LINES);
var_export($arr2);
/*
array (
    0 => '1,muming',
    1 => '2,henry',
)
*/

