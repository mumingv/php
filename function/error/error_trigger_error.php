<?php
/***********************************************************
 *     FileName: error_trigger_error.php
 *         Desc: 产生一个用户级别的 error/warning/notice 信息
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 17:21:32
 *      History:
 ***********************************************************/

# 语法：bool trigger_error ( string $error_msg [, int $error_type = E_USER_NOTICE ] )

# 示例

// 用户自定义的错误处理函数必须有下面这样的四个参数
function customError($errno, $errstr, $errfile, $errline) {
    echo "errno: {$errno}\n", "errstr: {$errstr}\n", "errfile: {$errfile}\n", "errline: {$errline}\n";
    echo "PHP version: ", PHP_VERSION, PHP_EOL;
    echo "PHP os: ", PHP_OS, PHP_EOL;
}

// 注册错误处理函数(接管PHP内置的错误处理)
set_error_handler("customError", E_ALL | E_STRICT);

// 除0判断，触发用户级别的错误
$divisor = 0;
if ($divisor == 0) {
    trigger_error("Can't divide by zero.", E_USER_ERROR);
}
echo "continue...\n";

/*
errno: 256
errstr: Can't divide by zero.
errfile: /root/git/php/function/error/error_trigger_error.php
errline: 30
PHP version: 5.4.16
PHP os: Linux
continue...
 */

