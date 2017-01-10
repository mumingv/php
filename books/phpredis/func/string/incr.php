<?php
/***********************************************************
 *     FileName: incr.php
 *         Desc: string类型，位操作，将value的值增加1
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:06:07
 *      History:
 ***********************************************************/

# 语法：int incr($key)
# 返回值：value的新长度

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
