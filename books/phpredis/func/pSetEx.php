<?php
/***********************************************************
 *     FileName: pSetEx.php
 *         Desc: string类型，pSetEx方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 11:47:26
 *      History:
 ***********************************************************/

# 说明：该函数有bug，调用成功后有时会返回"+OK"，而不是true。

# 语法：bool pSetEx(string $key, int $ttl, string $value)
# 参数：
# $ttl 超时时间，单位：s，默认值：0(不超时)
# 返回值：成功true

# 示例：设置key/value，ttl为30秒
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
$ret = $redis->pSetEx("foo", 30000, "bar");
var_dump($ret);
if ($ret !== true) {
    echo "pSetEx() return fail.\n";
    exit;
} else {
    echo "pSetEx() return successfully.\n";
}

/*
connect() return successfully.
string(3) "+OK"
pSetEx() return fail.
*/
