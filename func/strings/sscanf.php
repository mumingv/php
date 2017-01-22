<?php
/***********************************************************
 *     FileName: sscanf.php
 *         Desc: 根据指定格式解析输入的字符
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-22 10:13:11
 *      History:
 ***********************************************************/

# 语法：mixed sscanf ( string $str , string $format [, mixed &$... ] )

# 示例: 
list($serial) = sscanf("SN/2350001", "SN/%d");
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";
/*
Item 2350001 was manufactured on: 2000-Jan-1
*/

