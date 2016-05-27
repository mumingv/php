<?php
/***********************************************************
 *     FileName: datetime_date.php
 *         Desc: 格式化一个本地时间／日期
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-27 17:20:52
 *      History:
 ***********************************************************/

# 语法：string date ( string $format [, int $timestamp ] )

# 示例：
// 需要设置默认时区，否则会有PHP WARNING
date_default_timezone_set('UTC');
$date = date("Y-m-d H:i:s");
print_r($date); //2016-05-27 09:13:17
echo PHP_EOL;

$date = date("Y-m-d H:i:s", time());
print_r($date); //2016-05-27 09:13:17
echo PHP_EOL;

