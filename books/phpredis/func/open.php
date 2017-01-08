<?php
/***********************************************************
 *     FileName: open.php
 *         Desc: 连接redis服务器
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 14:35:31
 *      History:
 ***********************************************************/

# 说明：open函数是connect的别名。

# 语法：bool open($host, [$port = 6379, [float $timeout = 0, [$reserved, [int $retry_interval]]]])
# 参数：
# $timeout 超时时间，单位：s，默认值：0
# $reserved 一般设置为NULL
# $retry_interval 重试间隔，单位：ms

# 示例：一个参数
$redis = new Redis();
if (!$redis->open('127.0.0.1')) {
    echo "open() return fail.\n";
} else {
    echo "open() return successfully.\n";
}


# 示例：一个参数
$redis = new Redis();
if (!$redis->open('localhost')) {
    echo "open() return fail.\n";
} else {
    echo "open() return successfully.\n";
}


# 示例：二个参数
$redis = new Redis();
if (!$redis->open('127.0.0.1', 6379)) {
    echo "open() return fail.\n";
} else {
    echo "open() return successfully.\n";
}


# 示例：三个参数
$redis = new Redis();
if (!$redis->open('127.0.0.1', 6379, 2.5)) {
    echo "open() return fail.\n";
} else {
    echo "open() return successfully.\n";
}


# 示例：五个参数
$redis = new Redis();
if (!$redis->open('127.0.0.1', 6379, 2.5, NULL, 100)) {
    echo "open() return fail.\n";
} else {
    echo "open() return successfully.\n";
}
