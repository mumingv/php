<?php
/***********************************************************
 *     FileName: get.php
 *         Desc: string类型，get方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 15:44:33
 *      History:
 ***********************************************************/

# 语法：bool get($key)
# 返回值：成功返回value，失败返回false

# 示例：根据key获取value
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
// 设置
$ret = $redis->set("foo", "bar");
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}
// 获取 
$value = $redis->get("foo");
if ($value !== false) {
    echo "get() return successfully. value: $value\n";
} else {
    echo "get() return fail.\n";
    exit;
}
