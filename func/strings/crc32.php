<?php
/* =============================================================================
#     FileName: crc32.php
#         Desc: 计算一个字符串的 crc32 多项式
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 11:54:29
#      History:
============================================================================= */

# 语法：int crc32 ( string $str )

# 示例：计算校验码
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum);
/*
2191738434
*/

