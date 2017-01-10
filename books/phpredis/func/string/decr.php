<?php
/***********************************************************
 *     FileName: decr.php
 *         Desc: string类型，位操作，将value的值减去1
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 22:41:57
 *      History:
 ***********************************************************/

# 语法：int decr($key)
# 返回值：value的新长度

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
