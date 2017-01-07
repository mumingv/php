<?php
/***********************************************************
 *     FileName: list.php
 *         Desc: Redis列表操作
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 01:21:35
 *      History:
 ***********************************************************/

// 连接本地的 Redis 服务
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully.\n";

// 存储数据到列表中
$redis->lpush("list", "Redis");
$redis->lpush("list", "Mongodb");
$redis->lpush("list", "Mysql");

// 获取存储的数据并输出
$array = $redis->lrange("list", 0 ,5);
echo "Stored string in redis:\n";
print_r($array);


