<?php
/***********************************************************
 *     FileName: substr.php
 *         Desc: 返回字符串的子串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 04:24:30
 *      History:
 ***********************************************************/

# 语法：string substr ( string $string , int $start [, int $length ] )

# 示例: 基本用法
$rest = substr('abcdef', 1); //$length未指定，默认到字符串结束 
echo "11) " . $rest . PHP_EOL; //bcdef

$rest = substr('abcdef', 1, 3);  //$length指定了长度，则(尽量)获取该长度的子字符串
echo "12) " . $rest . PHP_EOL; //bcd

$rest = substr('abcdef', 0, 4);
echo "13) " . $rest . PHP_EOL; //abcd

$rest = substr('abcdef', 0, 8);
echo "14) " . $rest . PHP_EOL; //abcdef

$rest = substr('abcdef', -1, 1); //获取最后一个字符 
echo "15) " . $rest . PHP_EOL; //f

# 示例: $length为负数, 表示先将字符串末尾对应个数的字符去掉，然后再做子字符串的截取
$rest = substr("abcdef", 0, -1);  // 返回 "abcde"
echo "21) " . $rest . PHP_EOL;

$rest = substr("abcdef", 2, -1);  // 返回 "cde"
echo "22) " . $rest . PHP_EOL;

$rest = substr("abcdef", 4, -4);  // 返回 ""
echo "23) " . $rest . PHP_EOL;

$rest = substr("abcdef", -3, -1); // 返回 "de"
echo "24) " . $rest . PHP_EOL;

