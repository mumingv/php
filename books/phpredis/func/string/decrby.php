<?php
/***********************************************************
 *     FileName: decrby.php
 *         Desc: string类型，位操作，将value减去指定的数值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 22:47:08
 *      History:
 ***********************************************************/

# 语法：int decrby(string $key, int $value)
# 返回值：value的新值

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$redis->decr("foo");  // "-1", 如果key不存在，则value的默认值为0
$redis->decr("foo");  // "-2"
$redis->decrby("foo", 10);  // "-12"
