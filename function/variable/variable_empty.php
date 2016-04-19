<?php
/***********************************************************
 *     FileName: variable_empty.php
 *         Desc: 检查一个变量是否为空
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 17:13:07
 *      History:
 ***********************************************************/

# 语法：bool empty ( mixed $var )
# 说明：
# 1. empty() 本质上与 !isset($var) || $var == false 等价;
# 2. 当var存在，并且是一个非空非零的值时返回 FALSE 否则返回 TRUE;

# 示例
$var = 0;

// Evaluates to true because $var is empty
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all' . PHP_EOL; //$var is either 0, empty, or not set at all
}

// Evaluates as true because $var is set
if (isset($var)) {
    echo '$var is set even though it is empty' . PHP_EOL; //$var is set even though it is empty
}

