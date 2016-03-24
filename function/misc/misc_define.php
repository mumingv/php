<?php
/***********************************************************
 *     FileName: misc_define.php
 *         Desc: 在运行脚本的时候，定义一个常量
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 15:01:44
 *      History:
 ***********************************************************/

# 语法：bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
# 说明：
# 1. 对于常量的值, 仅允许标量和null, 标量的类型是integer，float，string或者boolean；
# 2. 大小写不敏感的常量以小写的方式存储；默认是大小写敏感的；

// 示例：大小写敏感
define("CONSTANT", "Hello world.");
echo CONSTANT . PHP_EOL;  //输出：Hello World
echo Constant . PHP_EOL;  //输出：Constant

// 示例：大小写不敏感
define("GREETING", "How are you?", true);
echo GREETING . PHP_EOL;  //输出：How are you?
echo Greeting . PHP_EOL;  //输出：How are you?

