<?php
/***********************************************************
 *     FileName: setex.php
 *         Desc: string类型，setex方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 11:31:42
 *      History:
 ***********************************************************/

# 语法：bool setex($key, $ttl, $value)
# 参数：
# $ttl 超时时间，单位：s，默认值：0(不超时)
# 返回值：成功true

# 示例：设置key/value，ttl为3秒
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
$ret = $redis->setex("foo", 3, "bar");
if ($ret !== true) {
    echo "setex() return fail.\n";
    exit;
} else {
    echo "setex() return successfully.\n";
}


