<?php
/* =============================================================================
#     FileName: addslashes.php
#         Desc: 使用反斜线引用字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-12 14:52:35
#      History:
============================================================================= */

# 语法：string addslashes ( string $str )
# 说明：转义的字符：单引号（'）、双引号（"）、反斜线（\）与 NUL（NULL 字符）。

# 示例：
echo addslashes("Is your name\ O'reilly?");
/*
Is your name\\ O\'reilly?
*/
