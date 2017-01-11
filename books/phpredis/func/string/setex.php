<?php
/***********************************************************
 *     FileName: setEx.php
 *         Desc: string类型，设置string，超时后自动删除
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 11:46:02
 *      History:
 ***********************************************************/

# 语法：bool setEx(string $key, int $ttl, string $value)
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
$ret = $redis->setEx("foo", 30, "bar");
if ($ret !== true) {
    echo "setEx() return fail.\n";
    exit;
} else {
    echo "setEx() return successfully.\n";
}


