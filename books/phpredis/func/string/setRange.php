<?php
/***********************************************************
 *     FileName: setRange.php
 *         Desc: string类型，覆写value中的子串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 15:59:38
 *      History:
 ***********************************************************/

# 语法：bool setRange(string $key, int $offset, string $value)
# 参数：$offset 偏移量，字符串中的字母从0开始编号
# 返回值：新value的长度

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置: "Hello world!"
$ret = $redis->set("foo", "Hello world!");
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}
// setRange: "Hello redis!"
$length = $redis->setRange("foo", 6, "redis");
var_dump($length);  // 12
