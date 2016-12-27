<?php
/***********************************************************
 *     FileName: sprintf.php
 *         Desc: 输出格式化字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-07-29 23:15:29
 *      History:
 ***********************************************************/

# 语法：string sprintf ( string $format [, mixed $args [, mixed $... ]] )

# 示例: 整数字符串后面加一位小数，如：'2' -> '2.0'
$num = '2';
$num = sprintf('%.1f', $num);  // 返回格式化后的字符串
var_dump($num);  // string(3) "2.0"
$num = sprintf('%.1f', $num);  // 返回格式化后的字符串
var_dump($num);  // string(3) "2.0"


# 示例
$num = 5;
$location = 'tree';
$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location)."\n";  // There are 5 monkeys in the tree



