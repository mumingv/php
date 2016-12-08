<?php
/***********************************************************
 *     FileName: printf.php
 *         Desc: 输出格式化字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-07-29 23:10:39
 *      History:
 ***********************************************************/

# 语法：int printf ( string $format [, mixed $args [, mixed $... ]] )

# 示例: 整数字符串后面加一位小数，如：'2' -> '2.0'
$num = '2';
$num = printf("%.1f", $num);  // 2.0 (直接打印到屏幕)
var_dump($num);  // int(3) (字符串长度)

