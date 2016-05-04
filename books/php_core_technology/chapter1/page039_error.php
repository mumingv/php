<?php
/***********************************************************
 *     FileName: page039_error.php
 *         Desc: 错误级别
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 14:56:42
 *      History:
 ***********************************************************/

# E_DEPRECATED级别的错误默认是关闭的，要打开的话需要修改成如下配置
# /etc/php.ini
# error_reporting = E_ALL | E_STRICT

// 屏蔽所有错误信息
//error_reporting(0);
$date = "2012-12-20";
if (ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $date, $regs)) { //PHP Deprecated:  Function ereg() is deprecated
    echo "$regs[3].$regs[2].$regs[1]", PHP_EOL; //20.12.2012
} else {
    echo "Invalid date format: $date";
}

if ($i > 5) { //PHP Notice:  Undefined variable: i
    echo '$i没有初始化！', PHP_EOL;
}

$a = array('o' => 2, 4, 6, 8);
echo $a[o]; //PHP Notice:  Use of undefined constant o - assumed 'o'
echo PHP_EOL;
$result = array_sum($a, 3); //PHP Warning:  array_sum() expects exactly 1 parameter, 2 given
echo fun(); //PHP Fatal error:  Call to undefined function fun()
// 屏蔽函数执行过程中的错误信息
echo @fun();
echo '致命错误后面还会执行吗？';
//echo '最高级别错误', $55; //PHP Parse error:  syntax error, unexpected '55' (T_LNUMBER), expecting variable (T_VARIABLE) or '$'

