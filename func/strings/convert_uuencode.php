<?php
/* =============================================================================
#     FileName: convert_uuencode.php
#         Desc: 使用 uuencode 编码一个字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 11:22:26
#      History:
============================================================================= */

# 语法：string convert_uuencode ( string $data )

# 示例：使用uuencode算法对字符串进行编码
$some_string = "test\ntext text\r\n";
echo convert_uuencode($some_string);
/*
0=&5S=`IT97AT('1E>'0-"@``
`
*/

