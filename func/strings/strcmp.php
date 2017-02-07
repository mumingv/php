<?php
/* =============================================================================
#     FileName: strcmp.php
#         Desc: 二进制安全字符串比较
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:47:25
#      History:
============================================================================= */

# 语法：int strcmp ( string $str1 , string $str2 )

# 示例：
$var1 = "Hello";
$var2 = "hello";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}
/*
$var1 is not equal to $var2 in a case sensitive string comparison
*/

