<?php
/***********************************************************
 *     FileName: vfprintf.php
 *         Desc: 将格式化字符串写入流
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 04:29:49
 *      History:
 ***********************************************************/

# 语法：int vfprintf ( resource $handle , string $format , array $args )
# 说明：作用与 fprintf() 函数类似，但是接收一个数组参数，而不是一系列可变数量的参数。

# 示例
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}
vfprintf($fp, "%04d-%02d-%02d", array("2017", "02", "08"));

