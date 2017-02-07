<?php
/***********************************************************
 *     FileName: str_word_count.php
 *         Desc: 返回字符串中单词的使用情况
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-07 15:26:26
 *      History:
 ***********************************************************/

# 语法：mixed str_word_count ( string $string [, int $format = 0 [, string $charlist ]] )

# 示例: 
$str = "Hello friend, you're looking good today!";
print_r(str_word_count($str));
print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
/*
6
Array
(
    [0] => Hello
    [1] => friend
    [2] => you're
    [3] => looking
    [4] => good
    [5] => today
)
Array
(
    [0] => Hello
    [6] => friend
    [14] => you're
    [21] => looking
    [29] => good
    [34] => today
)
*/

