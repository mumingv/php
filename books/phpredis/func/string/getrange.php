<?php
/***********************************************************
 *     FileName: getrange.php
 *         Desc: string类型，获取value中的子串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 16:07:52
 *      History:
 ***********************************************************/

# 语法：string getrange(string $key, int $start, int $end)
# 参数：
# $start 起始位置(包含)
# $end 结束为止(包含)
# 返回值：子字符串

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
$string = $redis->getrange("foo", 0, 4);
var_dump($string);  // string(5) "Hello"
$string = $redis->getrange("foo", -6, -2);
var_dump($string);  // string(5) "world"
