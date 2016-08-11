<?php
/***********************************************************
 *     FileName: datetime_strtotime.php
 *         Desc: 将任何英文文本的日期时间描述解析为 Unix 时间戳
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-06-01 15:23:33
 *      History:
 ***********************************************************/

# 语法：int strtotime ( string $time [, int $now = time() ] )

# 示例：
//date_default_timezone_set('UTC');
$time = time();
echo "time(): ";
echo($time);  // 1466241556
echo PHP_EOL;

$nowTime = strtotime('now');
echo "strtotime(now): ";
echo($nowTime);  // 1466241556
echo PHP_EOL;

$str = '2016-06-01 07:27:13';
echo "strtotime('2016-06-01 07:27:13'): ";
$ret = strtotime($str);
echo($ret);  // 1464737233
echo PHP_EOL;

