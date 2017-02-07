<?php
/* =============================================================================
#     FileName: stristr.php
#         Desc: 查找字符串的首次出现 (不区分大小写)
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 16:20:30
#      History:
============================================================================= */

# 语法：string stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

# 示例：
$email  = 'name@example.com';
$domain = stristr($email, 'E');
echo $domain;
/*
e@example.com
*/

