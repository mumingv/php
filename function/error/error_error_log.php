<?php
/***********************************************************
 *     FileName: error_error_log.php
 *         Desc: 发送错误信息到某个地方
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 12:04:23
 *      History:
 ***********************************************************/

# 语法：bool error_log ( string $message [, int $message_type = 0 [, string $destination [, string $extra_headers ]]] )

# 示例：打印到php-error.log, 位于：/home/users/yinjie05/bdp/log/php
$a = array(1, 2, array ("a", "b", "c"));
error_log(var_export($a, true));
$b = 3.1;
error_log(var_export($b, true));

# 示例：打印到指定文件，文件路径必须是全路径，HOME目录不能使用"~"表示
error_log(var_export($a, true), 3, "/home/users/yinjie05/var/log/php.test.log");

