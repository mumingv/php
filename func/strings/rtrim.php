<?php
/* =============================================================================
#     FileName: string_rtrim.php
#         Desc: 删除字符串末端的空白字符（或者其他字符）
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-05-13 19:17:02
#      History:
============================================================================= */

// 语法：string rtrim ( string $str [, string $character_mask ] )

// 去除尾部空格
$string1 = "  Hello world!   ";
print_r("Before trim --> string1: [" . $string1 . "]\n");
print_r("After trim --> string1: [" . rtrim($string1) . "]\n");

// 去除尾部tab键
$string2 = "\tHello world!\t";
print_r("Before trim --> string2: [" . $string2 . "]\n");
print_r("After trim --> string2: [" . rtrim($string2) . "]\n");

// 去除尾部指定字符(本例中，END是三个单独的字符，不是一个字符串整体)
$string3 = "ENDHello world!NDE";
print_r("Before trim --> string3: [" . $string3 . "]\n");
print_r("After trim --> string3: [" . rtrim($string3, "END") . "]\n");

