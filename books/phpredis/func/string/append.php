<?php
/***********************************************************
 *     FileName: append.php
 *         Desc: string类型，将string附加到已有的string后面
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 16:01:15
 *      History:
 ***********************************************************/

# 语法：int append($key, $value)
# 返回值：新string的长度

# 示例：设置key/value
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
// 附加
$length = $redis->append("foo", "!");
var_dump($length);  // 4
