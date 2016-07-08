<?php
/* =============================================================================
#     FileName: number_format.php
#         Desc: 以千位分隔符方式格式化一个数字
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-06-29 17:13:20
#      History:
============================================================================= */

// 语法：string number_format ( float $number [, int $decimals = 0 ] )
// 语法：string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )

// 示例

$number = 1234.56;
$english_format_number = number_format($number);
echo $english_format_number.PHP_EOL;  // 1,235

$nombre_format_francais = number_format($number, 2, ',', ' ');
echo $nombre_format_francais.PHP_EOL;  // 1 234,56

// 一般使用这个方式
$number = 1234.5678;
$english_format_number = number_format($number, 2, '.', '');
echo $english_format_number.PHP_EOL;  // 1234.57

$english_format_number = number_format($number, 1, '.', '');
echo $english_format_number.PHP_EOL;  // 1234.6

