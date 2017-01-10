<?php
/***********************************************************
 *     FileName: incrbyfloat.php
 *         Desc: string类型，将value增加指定的浮点数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:13:13
 *      History:
 ***********************************************************/

# 语法：float incrbyfloat(string $key, float $value)
# 返回值：value的新值

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$redis->incrbyfloat("foo", 1.5);  // "1.5", 如果key不存在，则value的默认值为0
$redis->incrbyfloat("foo", 1.5);  // "3"
$redis->incrbyfloat("foo", -1.5);  // "1.5"
$redis->incrbyfloat("foo", 2.5);  // "4"
