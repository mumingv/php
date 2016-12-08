<?php
/***********************************************************
 *     FileName: string_implode.php
 *         Desc: 将一个一维数组的值转化为字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-29 15:16:43
 *      History:
 ***********************************************************/

# 语法：string implode ( string $glue , array $pieces )
# 语法：string implode ( array $pieces )

# 示例
$ip = array(127, 0, 0, 1);
echo implode($ip) . PHP_EOL; //127001
echo implode(".", $ip) . PHP_EOL; //127.0.0.1

