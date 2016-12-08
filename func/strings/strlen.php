<?php
/* =============================================================================
#     FileName: strlen.php
#         Desc: 获取字符串长度
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-08-15 11:40:28
#      History:
============================================================================= */

// 语法：int strlen ( string $string )

// 获取字符串长度
$str = 'abcdef';
echo strlen($str).PHP_EOL; // 6
$str = ' ab cd ';
echo strlen($str).PHP_EOL; // 7

