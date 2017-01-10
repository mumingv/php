<?php
/***********************************************************
 *     FileName: bitop.php
 *         Desc: string类型，位操作，计算value中值为1的bit个数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 22:26:02
 *      History:
 ***********************************************************/

# 语法：long bitop($operation, $dest_key, $key1, $key2, ...)
# 参数：
# $operation 操作符，取值："AND", "OR", "NOT", "XOR"
# $dest_key 存放运算结果的key
# $key1 参与运算的key1
# $key2 参与运算的key2
# 返回值：$dest_key的长度

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置
$redis->set("foo1", "*");  // '*' = 0x2A = 00101010
$redis->set("foo2", "+");  // '+' = 0x2B = 00101011
$ret = $redis->bitop("AND", "foo", "foo1", "foo2");
var_dump($ret);  // int(1)
