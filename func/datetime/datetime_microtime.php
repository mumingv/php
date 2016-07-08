<?php
/***********************************************************
 *     FileName: datetime_microtime.php
 *         Desc: 返回当前 Unix 时间戳和微秒数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 15:15:54
 *      History:
 ***********************************************************/

# 语法：mixed microtime ([ bool $get_as_float ] )
# 参数：$get_as_float的默认值是false
# 说明：
# 1. microtime不带参数返回的是时间字符串(格式: msec sec);</br>
# 2. microtime带参数true返回的是时间浮点数(单位: sec);</br>

# 示例：不带参数
$time = microtime();
echo "micortime(): ";
var_dump($time);  //输出：string(21) "0.86640500 1458803948"
echo PHP_EOL;

# 示例：带参数true
$time = microtime(true);
echo "micortime(true): ";
var_dump($time);  //输出：float(1458803948.8665)
echo PHP_EOL;

