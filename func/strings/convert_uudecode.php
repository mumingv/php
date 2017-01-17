<?php
/* =============================================================================
#     FileName: convert_uudecode.php
#         Desc: 解码一个 uuencode 编码的字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 11:24:52
#      History:
============================================================================= */

# 语法：string convert_uudecode ( string $data )

# 示例：解码使用uuencode算法进行编码的字符串
$some_string = "test\ntext text\r\n";
echo convert_uuencode($some_string);
/*
0=&5S=`IT97AT('1E>'0-"@``
`
*/
echo convert_uudecode("0=&5S=`IT97AT('1E>'0-\"@``\n`");
/*
test
text text
*/

