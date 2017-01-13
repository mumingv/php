<?php
/* =============================================================================
#     FileName: addcslashes.php
#         Desc: 以 C 语言风格使用反斜线转义字符串中的字符
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-12 14:30:56
#      History:
============================================================================= */

# 语法：string addcslashes ( string $str , string $charlist )
# 说明：$charlist可以使用表示范围的字符列表，如：'a..z'。

# 示例：转义a到z之间所有的字符
echo addcslashes('foo[ ]', 'a..z')."\n";
/*
\f\o\o[ ]
*/
# 示例：转义A到z之间所有的字符
echo addcslashes('foo[ ]', 'A..z')."\n";
/*
\f\o\o\[ \]
*/
