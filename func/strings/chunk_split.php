<?php
/* =============================================================================
#     FileName: chunk_split.php
#         Desc: 将字符串分割成小块
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 11:11:17
#      History:
============================================================================= */

# 说明：将整数ascii码转换成对应的字符。

# 语法：string chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] )

# 示例：将一个字符串拆分成多行
$string = '1234'; 
echo chunk_split($string, 2);
/*
12
34
 */

# 示例：将一个字符串拆分成多行
$string = '1234'; 
echo chunk_split($string, 2, ':');
/*
12:34:
 */
