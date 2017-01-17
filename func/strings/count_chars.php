<?php
/* =============================================================================
#     FileName: count_chars.php
#         Desc: 返回字符串所用字符的信息
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 11:28:06
#      History:
============================================================================= */

# 语法：mixed count_chars ( string $string [, int $mode = 0 ] )

# 示例：统计字符传中各字符出现的次数, $mode为1表示只显示次数大于0的字符。返回的数组中，key为字母的ascii值。
$data = "Two Ts and one F.";
print_r(count_chars($data, 1));
/*
Array
(
    [32] => 4
    [46] => 1
    [70] => 1
    [84] => 2
    [97] => 1
    [100] => 1
    [101] => 1
    [110] => 2
    [111] => 2
    [115] => 1
    [119] => 1
)
*/

$data = "Two Ts and one F.";
foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
/*
There were 4 instance(s) of " " in the string.
There were 1 instance(s) of "." in the string.
There were 1 instance(s) of "F" in the string.
There were 2 instance(s) of "T" in the string.
There were 1 instance(s) of "a" in the string.
There were 1 instance(s) of "d" in the string.
There were 1 instance(s) of "e" in the string.
There were 2 instance(s) of "n" in the string.
There were 2 instance(s) of "o" in the string.
There were 1 instance(s) of "s" in the string.
There were 1 instance(s) of "w" in the string.
*/

