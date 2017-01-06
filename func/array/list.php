<?php
/***********************************************************
 *     FileName: list.php
 *         Desc: 把数组中的值赋给一些变量
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 17:28:21
 *      History:
 ***********************************************************/

# 语法：array list ( mixed $varname [, mixed $... ] )
# 说明：
# 1. 像array()一样，这不是真正的函数，而是语言结构; 
# 2. list()用一步操作给一组变量进行赋值;
# 3. 返回值为所有变量值组成的数组;

# 示例：一般用法
$info = array('coffee', 'brown', 'caffeine');

// 列出所有变量
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n"; //coffee is brown and caffeine makes it special.

// 列出部分变量
list($drink, , $power) = $info;
echo "$drink has $power.\n"; //coffee has caffeine.

// 列出部分变量
list( , , $power) = $info;
echo "I need $power!\n"; //I need caffeine!

// list()不能对字符串起作用
list($bar) = "abcde";
var_dump($bar); // NULL


# 示例：嵌套list
list($a, list($b, $c)) = array(1, array(2, 3));
var_dump($a, $b, $c); //int(1) int(2) int(3)


# 示例：返回值
$arr = list($a, list($b, $c)) = array(1, array(2, 3));
var_export($arr);
echo PHP_EOL;
/*
array (
  0 => 1,
  1 => 
  array (
      0 => 2,
      1 => 3,
  ),
)
*/

