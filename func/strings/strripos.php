<?php
/* =============================================================================
#     FileName: strripos.php
#         Desc: 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 03:25:19
#      History:
============================================================================= */

# 语法：int strripos ( string $haystack , string $needle [, int $offset = 0 ] )

# 示例
$haystack = 'ababcd';
$needle   = 'aB';
$pos      = strripos($haystack, $needle);
if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
/*
Congratulations!
We found the last (aB) in (ababcd) at position (2)
*/

