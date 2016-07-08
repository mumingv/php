<?php
/***********************************************************
 *     FileName: error_set_error_handler2.php
 *         Desc: 设置一个用户定义的错误处理函数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 16:34:52
 *      History:
 ***********************************************************/

# 语法：mixed set_error_handler ( callable $error_handler [, int $error_types = E_ALL | E_STRICT ] )
# 说明：错误处理函数的格式如下：
# handler ( int $errno , string $errstr [, string $errfile [, int $errline [, array $errcontext ]]] )
# 重要：使用自定义的错误处理函数之后，系统默认的错误处理函数就会被覆盖

# 示例

// 用户自定义的错误处理函数必须有下面这样的四个参数
function customError($errno, $errstr, $errfile, $errline) {
    echo "errno: {$errno}\n", "errstr: {$errstr}\n", "errfile: {$errfile}\n", "errline: {$errline}\n";
    echo "PHP version: ", PHP_VERSION, PHP_EOL;
    echo "PHP os: ", PHP_OS, PHP_EOL;
}

// 注册错误处理函数(接管PHP内置的错误处理)
set_error_handler("customError", E_ALL | E_STRICT);

$a = array('o' => 2, 'p' => 4, 6, 8);
echo $a[o], PHP_EOL; //不再出现：PHP Notice:  Use of undefined constant o - assumed 'o'

/*
默认的错误提示：
PHP Notice:  Use of undefined constant o - assumed 'o' in /root/git/php/function/error/error_set_error_handler2.php on line 31
 */

/*
自定义函数的错误提示：
errno: 8
errstr: Use of undefined constant o - assumed 'o'
errfile: /root/git/php/function/error/error_set_error_handler2.php
errline: 29
PHP version: 5.4.16
PHP os: Linux
 */

// 取消错误处理函数(取消接管PHP内置的错误处理)
restore_error_handler();
echo $a[p], PHP_EOL; //出现：PHP Notice:  Use of undefined constant o - assumed 'o'

// 补充：错误级别定义
// 参考：http://php.net/manual/zh/errorfunc.constants.php
echo "E_ERROR: ", E_ERROR, "\n"; //1, fatal error
echo "E_WARNING: ", E_WARNING, "\n"; //2
echo "E_PARSE: ", E_PARSE, "\n"; //4, parse error
echo "E_NOTICE: ", E_NOTICE, "\n"; //8
echo "E_CORE_ERROR: ", E_CORE_ERROR, "\n"; //16
echo "E_CORE_WARNING: ", E_CORE_WARNING, "\n"; //32
echo "E_COMPILE_ERROR: ", E_COMPILE_ERROR, "\n"; //64
echo "E_COMPILE_WARNING: ", E_COMPILE_WARNING, "\n"; //2
echo "E_USER_ERROR: ", E_USER_ERROR, "\n"; //256
echo "E_USER_WARNING: ", E_USER_WARNING, "\n"; //512
echo "E_USER_NOTICE: ", E_USER_NOTICE, "\n"; //1024
echo "E_STRICT: ", E_STRICT, "\n"; //2048
echo "E_RECOVERABLE_ERROR: ", E_RECOVERABLE_ERROR, "\n"; //4096
echo "E_DEPRECATED: ", E_DEPRECATED, "\n"; //8192
echo "E_USER_DEPRECATED: ", E_USER_DEPRECATED, "\n"; //16384
echo "E_ALL: ", E_ALL, "\n"; //32767, 低15位全部为1

