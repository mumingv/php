<?php
/***********************************************************
 *     FileName: bitcount.php
 *         Desc: string类型，位操作，计算value中值为1的bit个数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 17:39:51
 *      History:
 ***********************************************************/

# 语法：long bitcount($key)
# 返回值：value中值为1的bit个数

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
$ret = $redis->set("foo", "**");  // '*' = 0x2A = 00101010
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}
// 设置bit(第1个字符)
$num = $redis->bitcount("foo");
var_dump($num);  // int(6)
