<?php
/***********************************************************
 *     FileName: zcount.php
 *         Desc: sorted set类型，zcount方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-17 16:00:38
 *      History:
 ***********************************************************/

# 语法：long zcount(string $key, string $start, string $stop)
# 返回值：成功返回value的数量，失败返回

# 示例：根据key获取value
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 清除已有的key
if ($redis->exists("foo")) {
    $redis->del("foo");
    echo "del 'foo' key successfully.\n";
}

// 设置

$ret = $redis->zadd("foo", 1, "bar1");
if ($ret == false) {
    echo "zadd return fail 1.\n";
    exit;
}
$ret = $redis->zadd("foo", 0, "bar0");
if ($ret == false) {
    echo "zadd return fail 0.\n";
    exit;
}
$ret = $redis->zadd("foo", 5, "bar5");
if ($ret == false) {
    echo "zadd return fail 5.\n";
    exit;
}
$ret = $redis->zadd("foo", 0, "bar3");
if ($ret == false) {
    echo "zadd return fail 3.\n";
    exit;
}

// 获取某个score范围内的value个数
$ret = $redis->zcount("foo", 0, 3);
print_r($ret);  // 3

// 获取所有value个数
$ret = $redis->zcount("foo", '-inf', '+inf');
print_r($ret);  // 4

