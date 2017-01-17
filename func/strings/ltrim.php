<?php
/* =============================================================================
#     FileName: ltrim.php
#         Desc: 删除字符串开头的空白字符（或其他字符）
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-18 05:58:34
#      History:
============================================================================= */

# 语法：string ltrim ( string $str [, string $character_mask ] )

# 示例：删除字符串开头的空白字符
$string = "    Hello world!";
echo $string."\n";
echo ltrim($string)."\n";
/*
    Hello world!
Hello world!
*/

