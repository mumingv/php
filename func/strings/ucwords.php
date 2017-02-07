<?php
/***********************************************************
 *     FileName: ucwords.php
 *         Desc: 将字符串中每个单词的首字母转换为大写
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 04:27:28
 *      History:
 ***********************************************************/

# string ucwords ( string $str )

# 示例
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!
echo $foo."\n";

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!
echo $foo."\n";

