<?php
/* =============================================================================
#     FileName: strrpos.php
#         Desc: 计算指定字符串在目标字符串中最后一次出现的位置 (区分大小写)
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 03:39:43
#      History:
============================================================================= */

# 语法：int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )

# 示例
$foo = "0123456789a123456789b123456789c";
var_dump(strrpos($foo, '7'));
var_dump(strrpos($foo, 'A'));
/*
int(27)
bool(false)
*/

