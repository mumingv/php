<?php
/* =============================================================================
#     FileName: strchr.php
#         Desc: 查找字符串的首次出现(是strstr函数的别名)
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:46:20
#      History:
============================================================================= */

# 语法：string strchr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

# 示例：
$email  = 'name@example.com';
$domain = strchr($email, '@');
echo $domain;
/*
@example.com
*/

