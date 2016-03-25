<?php
/***********************************************************
 *     FileName: array_shift.php
 *         Desc: 将数组开头的单元移出数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 19:23:15
 *      History:
 ***********************************************************/

# 语法：array list ( mixed $varname [, mixed $... ] )
# 说明：
# 1. 被移出数组的单元作为返回值返回
# 2. 元素移出后，数组元素会重新编号

# 示例
$stack = array("orange", "banana", "apple", "raspberry");
var_export($stack);
/*
 * array (
 *   0 => 'orange',
 *   1 => 'banana',
 *   2 => 'apple',
 *   3 => 'raspberry',
 * )
 */

$fruit = array_shift($stack);
var_export($stack);
/*
 * array (
 *   0 => 'banana',
 *   1 => 'apple',
 *   2 => 'raspberry',
 * )
 */

