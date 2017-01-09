<?php
/***********************************************************
 *     FileName: set.php
 *         Desc: string类型，set方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-09 11:15:35
 *      History:
 ***********************************************************/

# 语法：bool set($key, $value, [$timeout | array $options])
# 参数：
# $timeout 超时时间，单位：s，默认值：0
# $options 
# 返回值：成功true

# 示例：设置key/value
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}
$ret = $redis->set("foo", "bar");
if ($ret !== true) {
    echo "set() return fail.\n";
    exit;
} else {
    echo "set() return successfully.\n";
}


