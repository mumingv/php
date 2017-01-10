<?php
/***********************************************************
 *     FileName: mset.php
 *         Desc: string类型，同时设置多个string
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:17:37
 *      History:
 ***********************************************************/

# 语法：bool mset(array(key => value, ...))
# 返回值：成功true，失败false

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$ret = $redis->mset(array("foo1" => "bar1", "foo2" => "bar2"));
var_dump($ret);  // bool(true)
