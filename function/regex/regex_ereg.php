<?php
/***********************************************************
 *     FileName: regex_ereg.php
 *         Desc: 正则表达式匹配
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 15:31:18
 *      History:
 ***********************************************************/

# 语法：int ereg ( string $pattern , string $string [, array &$regs ] )

$date = '2016-05-04';
if (ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $date, $regs)) {
       echo "$regs[3].$regs[2].$regs[1]", PHP_EOL; //04.05.2016
} else {
       echo "Invalid date format: $date", PHP_EOL;
} 

