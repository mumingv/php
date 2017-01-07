<?php
/***********************************************************
 *     FileName: keys.php
 *         Desc: 获取keys
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 01:25:16
 *      History:
 ***********************************************************/

// 连接本地的 Redis 服务
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully.\n";

// 获取数据并输出
$array = $redis->keys("*");
echo "Stored keys in redis:\n";
print_r($array);

/*
Connection to server sucessfully.
Stored keys in redis:
Array
(
    [0] => list
    [1] => name
    [2] => tutorial-name
)
*/


