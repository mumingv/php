<?php
/***********************************************************
 *     FileName: incrby.php
 *         Desc: string类型，位操作，将value增加指定的数值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:07:14
 *      History:
 ***********************************************************/

# 语法：int incrby(string $key, int $value)
# 返回值：value的新值

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$redis->incr("foo");  // "1", 如果key不存在，则value的默认值为0
$redis->incr("foo");  // "2"
$redis->incrby("foo", 10);  // "12"
