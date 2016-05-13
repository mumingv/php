<?php
/***********************************************************
 *     FileName: string_bin2hex.php
 *         Desc: 函数把ASCII字符的字符串转换为十六进制值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-13 19:05:55
 *      History:
 ***********************************************************/

# 语法：string bin2hex ( string $str )

# 示例
$binary = "11111001";
$hex = bin2hex($binary);
echo $hex, PHP_EOL; //3131313131303031
$hex = dechex(bindec($binary));
echo $hex, PHP_EOL; //f9

$str = "ABC";
$result_str = bin2hex($str);
echo $result_str, PHP_EOL; //414243

