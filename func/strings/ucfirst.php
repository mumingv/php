<?php
/***********************************************************
 *     FileName: ucfirst.php
 *         Desc: 将字符串的首字母转换为大写
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 04:27:04
 *      History:
 ***********************************************************/

# string ucfirst ( string $str )

# 示例
$foo = 'hello world!';
$foo = ucfirst($foo);
echo $foo . PHP_EOL; //Hello world!

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);
echo $bar . PHP_EOL; //HELLO WORLD!

