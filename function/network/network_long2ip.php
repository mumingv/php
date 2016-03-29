<?php
/***********************************************************
 *     FileName: network_long2ip.php
 *         Desc: 将32位整数转化成IPv4点分十进制表示法字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-29 14:49:15
 *      History:
 ***********************************************************/

# 语法：string long2ip ( string $proper_address )

# 示例
echo long2ip(4294967295) . PHP_EOL; //255.255.255.255
echo long2ip(2130706433) . PHP_EOL; //127.0.0.1
echo long2ip('2130706433') . PHP_EOL; //127.0.0.1

