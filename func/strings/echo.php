<?php
/* =============================================================================
#     FileName: echo.php
#         Desc: 输出一个或多个字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 12:20:10
#      History:
============================================================================= */

# 语法：void echo ( string $arg1 [, string $... ] )

# 示例：单个参数，使不使用括号都可以
echo("Hello world\n");
echo "Hello world\n";
/*
Hello world
Hello world
*/

# 示例：多个参数，不能使用括号
echo "Hello world. ", "I'm coming!\n";
/*
Hello world. I'm coming!
*/

