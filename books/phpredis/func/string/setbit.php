<?php
/***********************************************************
 *     FileName: setbit.php
 *         Desc: string类型，位操作，将某一个bit设置为0或者1
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 16:30:26
 *      History:
 ***********************************************************/

# 语法：bool setbit($key, $offset, $value)
# 参数：
# $offset 偏移量
# $value 0/1
# 返回值：设置之前该bit的值0/1

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置
$ret = $redis->set("foo", "**");  // '*' = 0x2A = 00101010
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}
// 设置bit(第1个字符)
$bitvalue = $redis->setbit("foo", 5, 1);
var_dump($bitvalue);  // int(0)
$bitvalue = $redis->setbit("foo", 7, 1);  // '/' = 0x2F = 00101111
var_dump($bitvalue);  // int(0)  
var_dump($redis->get("foo"));  // string(1) "/*"
// 设置bit(第2个字符)
$bitvalue = $redis->setbit("foo", 13, 1);
$bitvalue = $redis->setbit("foo", 15, 1);
var_dump($redis->get("foo"));  // string(1) "//"
