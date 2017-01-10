<?php
/***********************************************************
 *     FileName: strlen.php
 *         Desc: string类型，获取string的长度
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 15:58:49
 *      History:
 ***********************************************************/

# 语法：int strlen(string $key)

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置: "Hello world!"
$ret = $redis->set("foo", "Hello world!");
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}
// setRange: "Hello redis!"
$length = $redis->strlen("foo");
var_dump($length);  // 12
