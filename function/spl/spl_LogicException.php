<?php
/***********************************************************
 *     FileName: spl_LogicException.php
 *         Desc: 逻辑异常类
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 16:02:45
 *      History:
 ***********************************************************/

# 语法：bool spl_autoload_register ([ callable $autoload_function [, bool $throw = true [, bool $prepend = false ]]] )

# 示例：

if (1) {
    throw new LogicException("Raise exception!"); //抛出异常并终止程序
}
echo "Not be printed!"; //不会打印

/*
在php-error.log日志中打印如下异常信息，并终止程序
[14-Apr-2016 16:06:13 PRC] PHP Fatal error:  Uncaught exception 'LogicException' with message 'Raise exception!' in /home/users/yinjie05/git/php/function/spl/spl_LogicException.php:18
Stack trace:
#0 {main}
#  thrown in /home/users/yinjie05/git/php/function/spl/spl_LogicException.php on line 18
*/
