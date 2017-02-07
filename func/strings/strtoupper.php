<?php
/***********************************************************
 *     FileName: strtoupper.php
 *         Desc: 将字符串转化为大写
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 03:56:36
 *      History:
 ***********************************************************/

# string strtoupper ( string $string )

# 示例
$foo = 'hello world!';
$foo = strtoupper($foo);
echo $foo . PHP_EOL; //HELLO WORLD!

$bar = 'HELLO WORLD!';
$bar = strtoupper($bar);
echo $bar . PHP_EOL; //HELLO WORLD!

