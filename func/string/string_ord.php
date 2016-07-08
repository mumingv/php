<?php
/***********************************************************
 *     FileName: string_ord.php
 *         Desc: 返回字符的 ASCII 码值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 19:57:30
 *      History:
 ***********************************************************/

# 语法：int ord ( string $string )
# 说明：返回字符串 string 第一个字符的 ASCII 码值。

# 示例：入参是一个字符
$str = "A";
echo ord($str) . PHP_EOL; //65

# 示例：入参是一个字符串
$str2 = "ABC";
echo ord($str2) . PHP_EOL; //65

