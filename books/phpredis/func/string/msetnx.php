<?php
/***********************************************************
 *     FileName: msetnx.php
 *         Desc: string类型，设置多个key/value，key不存在则设置，key存在则不设置
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:22:30
 *      History:
 ***********************************************************/

# 语法：bool msetnx(array(key => value, ...))
# 返回值：所有key不存在被设置，返回true；已有key存在，返回false

# 示例：设置key/value
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$ret = $redis->msetnx(array("foo1" => "bar1", "foo2" => "bar2"));
var_dump($ret);
