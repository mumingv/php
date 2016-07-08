<?php
/***********************************************************
 *     FileName: variable_isset.php
 *         Desc: 检测变量是否设置
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 17:19:24
 *      History:
 ***********************************************************/

# 语法：bool isset ( mixed $var [, mixed $... ] )

# 示例
$var;
if (isset($var)) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL; //false
}

$var = 0;
if (isset($var)) {
    echo 'true' . PHP_EOL; //true
} else {
    echo 'false' . PHP_EOL;
}

unset($var);
if (isset($var)) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL; //false
}

$var = '';
if (isset($var)) {
    echo 'true' . PHP_EOL; //true
} else {
    echo 'false' . PHP_EOL;
}

