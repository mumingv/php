<?php
/* =============================================================================
#     FileName: substr_count.php
#         Desc: 计算字串出现的次数
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 04:00:59
#      History:
============================================================================= */

# 语法：int substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )

# 示例：
$text = 'This is a test';
echo substr_count($text, 'is'); // 2

