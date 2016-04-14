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
/*
[14-Apr-2016 17:35:10 PRC] array (
    0 => 1,
    1 => 2,
    2 => 
    array (
        0 => 'a',
        1 => 'b',
        2 => 'c',
    ),
)
 */

$b = 3.1;
error_log(var_export($b, true));
/*
[14-Apr-2016 17:35:10 PRC] 3.100000000000000088817841970012523233890533447265625
 */

// 使用定界符字符串，<<<HTML HTML为定界符，其中:
// 1. 定界符随意指定，如：ABC, TTT等
// 2. 结束标志的HTML必须顶格写
$province = "江苏";
$city = "扬州";
$html = <<<HHHH
所在省份：$province
所在城市：$city
HHHH;
error_log($html);
/*
[14-Apr-2016 17:44:24 PRC] 所在省份：江苏
所在城市：扬州
 */

# 示例：打印到指定文件，文件路径必须是全路径，HOME目录不能使用"~"表示
error_log(var_export($a, true), 3, "/home/users/yinjie05/var/log/php.test.log");

