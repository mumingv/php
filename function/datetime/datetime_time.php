<?php
/***********************************************************
 *     FileName: datetime_time.php
 *         Desc: 返回当前的 Unix 时间戳（从1970.1.1 00:00:00至今的秒数）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-27 17:22:29
 *      History:
 ***********************************************************/

# 语法：int time ( void )

# 示例：
//date_default_timezone_set('UTC');
$time = time();
print_r($time); //1464341037
echo PHP_EOL;

