<?php
/* =============================================================================
#     FileName: strcoll.php
#         Desc: 基于区域设置的字符串比较
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:49:40
#      History:
============================================================================= */

# 语法：int strcoll ( string $str1 , string $str2 )
# 说明：比较区分大小写，但不是二进制安全的。

# 示例：
$var1 = "Hello";
$var2 = "hello";
if (strcoll($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}
/*
$var1 is not equal to $var2 in a case sensitive string comparison
*/

