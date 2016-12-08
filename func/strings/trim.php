<?php
/* =============================================================================
#     FileName: string_trim.php
#         Desc: 去除字符串首尾的空白字符（或者其他字符）
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-22 09:58:51
#      History:
============================================================================= */

// 语法：string trim ( string $str [, string $charlist = " \t\n\r\0\x0B" ] )

// 去除首尾空格
$string1 = "  Hello world!   ";
print_r("Before trim --> string1: [" . $string1 . "]\n");
print_r("After trim --> string1: [" . trim($string1) . "]\n");

// 去除首尾tab键
$string2 = "\tHello world!\t";
print_r("Before trim --> string2: [" . $string2 . "]\n");
print_r("After trim --> string2: [" . trim($string2) . "]\n");

// 去除指定字符(本例中，END是三个单独的字符，不是一个字符串整体)
$string3 = "ENDHello world!NDE";
print_r("Before trim --> string3: [" . $string3 . "]\n");
print_r("After trim --> string3: [" . trim($string3, "END") . "]\n");

