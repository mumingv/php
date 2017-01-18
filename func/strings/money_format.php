<?php
/***********************************************************
 *     FileName: money_format.php
 *         Desc: 将数字格式化成货币字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-18 23:55:34
 *      History:
 ***********************************************************/

# 语法：string money_format ( string $format , float $number )

# 示例：根据发音创建的metaphone键
$number = 1234.56;
// 国际化格式
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";
/*
USD 1,234.56
*/
// 中国的货币格式，带两位浮点小数
setlocale(LC_MONETARY, 'zh_CN');
echo money_format('%i', $number) . "\n";
/*
CNY1,234.56
*/

