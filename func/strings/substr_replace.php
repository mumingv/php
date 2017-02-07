<?php
/* =============================================================================
#     FileName: substr_replace.php
#         Desc: 替换字符串的子串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 04:03:06
#      History:
============================================================================= */

# 语法：mixed substr_replace ( mixed $string , mixed $replacement , mixed $start [, mixed $length ] )

# 示例：
$var = 'ABCDEFGH:/MNRPQR/';
echo substr_replace($var, 'bob', 10, -1);
/*
ABCDEFGH:/bob/
*/

