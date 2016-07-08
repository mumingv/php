<?php
/***********************************************************
 *     FileName: test_operation.php
 *         Desc: 整数和字符串的混合运算
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-07-08 15:20:07
 *      History:
 ***********************************************************/

# 结论：整数和字符串求和，会将操作数转换为整数再求和(普通字符串的话就转换为0)，结果为整数

$result = 111 + '222';  // 整数 和 可转换为整数的字符串 求和结果为整数
var_dump($result);  // int(333)

$result = '111' + '333';  // 两个可转换为整数的字符串 求和结果为整数
var_dump($result);  // int(444)


$result = 'abc' + 'def';  // 两个普通字符串 求和结果为0
var_dump($result);  // int(0)


$result = '111' + 'def';  // 可转换为整数的字符串 和 普通字符串 求和结果为可转换为整数的字符串对应的整数
var_dump($result);  // int(111)

