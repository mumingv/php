<?php
/***********************************************************
 *     FileName: getbit.php
 *         Desc: string类型，get方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 22:51:14
 *      History:
 ***********************************************************/

# 语法：int getbit($key, $offset)
# 返回值：指定bit的值，0/1

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$ret = $redis->set("foo", "\x41");  // "A", 01000001
echo $redis->getbit("foo", 0);  // 0
echo $redis->getbit("foo", 1);  // 1
