<?php
/***********************************************************
 *     FileName: network_ip2long.php
 *         Desc: 将IPv4点分十进制字符串转换成32为整数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-29 14:55:03
 *      History:
 ***********************************************************/

# 语法：int ip2long ( string $ip_address )

# 示例
//echo ip2long(127.0.0.1) . PHP_EOL; //语法错误，参数必须为字符串
echo ip2long('127.0.0.1') . PHP_EOL; //2130706433
echo ip2long('255.255.255.255') . PHP_EOL; //4294967295

