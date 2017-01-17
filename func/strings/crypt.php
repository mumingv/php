<?php
/* =============================================================================
#     FileName: crypt.php
#         Desc: 单向字符串散列
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 12:10:00
#      History:
============================================================================= */

# 语法：string crypt ( string $str [, string $salt ] ) 

# 示例：获取散列值，使用自动盐值
$password = 'mypassword';
$hash = crypt($password, 'mm');
echo $hash."\n";
/*
mmqunkvQ77kH2
*/

