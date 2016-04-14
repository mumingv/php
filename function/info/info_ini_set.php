<?php
/***********************************************************
 *     FileName: info_ini_set.php
 *         Desc: 为一个配置选项设置值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 19:46:29
 *      History:
 ***********************************************************/

# 语法：string ini_set ( string $varname , string $newvalue )
# 说明：成功时返回旧的值，失败时返回 FALSE。

# 示例
echo ini_get('error_log') . PHP_EOL; ///home/users/yinjie05/bdp/log/php/php-error.log
echo ini_set('error_log', "/home/users/yinjie05/bdp/log/php/muming.log") . PHP_EOL; ///home/users/yinjie05/bdp/log/php/php-error.log
echo ini_get('error_log') . PHP_EOL; ///home/users/yinjie05/bdp/log/php/muming.log

