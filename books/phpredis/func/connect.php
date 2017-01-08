<?php
/***********************************************************
 *     FileName: connect.php
 *         Desc: 连接redis服务器
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 14:35:31
 *      History:
 ***********************************************************/

# 语法：bool connect($host, [$port = 6379, [float $timeout = 0, [$reserved, [int $retry_interval]]]])
# 参数：
# $timeout 超时时间，单位：s，默认值：0
# $reserved 一般设置为NULL
# $retry_interval 重试间隔，单位：ms

# 示例：一个参数
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}


# 示例：一个参数
$redis = new Redis();
if (!$redis->connect('localhost')) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}


# 示例：二个参数
$redis = new Redis();
if (!$redis->connect('127.0.0.1', 6379)) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}


# 示例：三个参数
$redis = new Redis();
if (!$redis->connect('127.0.0.1', 6379, 2.5)) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}


# 示例：五个参数
$redis = new Redis();
if (!$redis->connect('127.0.0.1', 6379, 2.5, NULL, 100)) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}
