<?php
/***********************************************************
 *     FileName: string_strtolower.php
 *         Desc: 将字符串转化为小写
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 15:26:54
 *      History:
 ***********************************************************/

# string strtolower ( string $string )

# 示例
$foo = 'hello world!';
$foo = strtolower($foo);
echo $foo . PHP_EOL; //hello world!

$bar = 'HELLO WORLD!';
$bar = strtolower($bar);
echo $bar . PHP_EOL; //hello world!

