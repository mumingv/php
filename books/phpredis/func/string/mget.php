<?php
/***********************************************************
 *     FileName: mset.php
 *         Desc: string类型，同时获取多个string
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 23:17:37
 *      History:
 ***********************************************************/

# 语法：array mset(array(key1, key2, key3, ...))
# 返回值：所有key对应value的数组，如果没有某个key，则其对应的value为false

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$redis->set('key1', 'value1');
$redis->set('key2', 'value2');
$redis->set('key3', 'value3');
$values = $redis->mGet(array('key1', 'key2', 'key3')); // array('value1', 'value2', 'value3');
var_dump($values);
$values = $redis->mGet(array('key0', 'key1', 'key5')); // array(`FALSE`, 'value1', `FALSE`);
var_dump($values);
