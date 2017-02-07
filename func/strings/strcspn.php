<?php
/* =============================================================================
#     FileName: strcspn.php
#         Desc: 获取不匹配遮罩的起始子字符串的长度
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:51:37
#      History:
============================================================================= */

// 语法：int strcspn ( string $str1 , string $str2 [, int $start [, int $length ]] )

# 示例
$a = strcspn('abcd',  'apple');
$b = strcspn('abcd',  'banana');
$c = strcspn('hello', 'l');
$d = strcspn('hello', 'world');
var_dump($a);  // 0
var_dump($b);  // 0
var_dump($c);  // 2
var_dump($d);  // 2

