<?php
/* =============================================================================
#     FileName: substr_compare.php
#         Desc: 二进制安全比较字符串（从偏移位置比较指定长度）
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 03:58:26
#      History:
============================================================================= */

# 语法：int substr_compare ( string $main_str , string $str , int $offset [, int $length [, bool $case_insensitivity = false ]] )

# 示例：
echo substr_compare("abcde", "bc", 1, 2); // 0
echo substr_compare("abcde", "de", -2, 2); // 0
echo substr_compare("abcde", "bcg", 1, 2); // 0

