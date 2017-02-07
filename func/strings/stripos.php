<?php
/***********************************************************
 *     FileName: stripos.php
 *         Desc: 查找字符串首次出现的位置（不区分大小写）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-07 16:14:32
 *      History:
 ***********************************************************/

# 语法：int stripos ( string $haystack , string $needle [, int $offset = 0 ] )

# 示例: 

$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// 'a' 当然不在 'xyz' 中
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'\n";
}

// 注意这里使用的是 ===。简单的 == 不能像我们期望的那样工作，
// 因为 'a' 的位置是 0（第一个字符）。
if ($pos2 !== false) {
    echo "We found '$findme' in '$mystring2' at position $pos2\n";
}

/*
The string 'a' was not found in the string 'xyz'
We found 'a' in 'ABC' at position 0
*/

