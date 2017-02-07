<?php
/***********************************************************
 *     FileName: vprintf.php
 *         Desc: 输出格式化字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 04:32:54
 *      History:
 ***********************************************************/

# 语法：int vprintf ( string $format , array $args )
# 说明：作用与 printf() 函数类似，但是接收一个数组参数，而不是一系列可变数量的参数。

# 示例
vprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));  // 1988-08-01

