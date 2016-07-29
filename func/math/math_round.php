<?php
/***********************************************************
 *     FileName: math_round.php
 *         Desc: 对浮点数进行四舍五入
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 16:23:05
 *      History:
 ***********************************************************/

# 语法：float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )

# 示例: 获取时间毫秒数，小数点后保留1位
$time = microtime(true);
echo "time is: " . $time . PHP_EOL; //1460622618.2763
$tm = round($time * 1000, 1);
echo "tm is: " . $tm . PHP_EOL; //1460622618276.3
$tm = round($time, 4);
echo "tm is: " . $tm . PHP_EOL; //1460622618276.3

