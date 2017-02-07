<?php
/* =============================================================================
#     FileName: strstr.php
#         Desc: 查找字符串的首次出现
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:44:05
#      History:
============================================================================= */

# 语法：string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

# 示例：
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain;
/*
@example.com
*/

