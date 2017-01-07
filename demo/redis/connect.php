<?php
/***********************************************************
 *     FileName: connect.php
 *         Desc: 链接redis
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 00:15:07
 *      History:
 ***********************************************************/

// 连接本地的Redis
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully\n";

// 设置&读取字符串数据
$redis->set("name", "Jay");
echo "Stored string in redis:: ".$redis->get("name")."\n";


