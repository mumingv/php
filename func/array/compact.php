<?php
/***********************************************************
 *     FileName: compact.php
 *         Desc: 建立一个数组，包括变量名和它们的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-07-25 16:18:34
 *      History:
 ***********************************************************/

# 语法：array compact ( mixed $varname [, mixed $... ] )

# 示例：
$country = 'China';
$city  = "Beijing";
$company = 'Baidu';

$location = array('country', 'city');
$array = compact($location, 'company');
print_r($array);
/*
Array
(
    [country] => China
    [city] => Beijing
    [company] => Baidu
)
 */

