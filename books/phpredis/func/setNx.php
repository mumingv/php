<?php
/***********************************************************
 *     FileName: setNx.php
 *         Desc: string类型，设置key/value，key不存在则设置，key存在则不设置
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 15:52:41
 *      History:
 ***********************************************************/

# 语法：bool setNx(string $key, string $value)
# 返回值：成功true, key已存在/失败false

# 示例：设置key/value
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置
$ret = $redis->setNx("foo", "bar");
if ($ret !== true) {
    echo "setNx() return fail.\n";
    exit;
} else {
    echo "setNx() return successfully.\n";
}
