<?php
/***********************************************************
 *     FileName: zadd.php
 *         Desc: sorted set类型，zadd方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-17 14:15:52
 *      History:
 ***********************************************************/

# 语法：bool zadd(string $key, double $score, string $value)
# 返回值：成功返回value，($score, $value)配对已经存在返回false，失败返回false

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
/*
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
*/
foreach (range(20, 10) as $value) {
    $ret = $redis->zadd("foo", $value, "bar".$value);
    if ($ret == false) {
        echo "zadd return fail {$value}.\n";
        exit;
    }
}

// 获取所有value 
$ret = $redis->zrange("foo", 0, -1, true);
if ($ret !== false) {
    echo "get() return successfully. value: \n";
    print_r($ret);
} else {
    echo "get() return fail.\n";
    exit;
}
/*
Array
(
    [0] => bar0
    [1] => bar1
    [2] => bar5
)
*/
/*
Array
(
    [0] => bar0
    [1] => bar1
    [2] => bar2
    [3] => bar3
    [4] => bar4
    [5] => bar5
    [6] => bar6
    [7] => bar7
    [8] => bar8
    [9] => bar9
    [10] => bar10
)
*/

