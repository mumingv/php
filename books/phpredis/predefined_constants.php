<?php
/***********************************************************
 *     FileName: predefined_constants.php
 *         Desc: 各预定义常量的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 14:18:14
 *      History:
 ***********************************************************/

//$redis = new Redis();

echo "Redis::REDIS_NOT_FOUND: ".Redis::REDIS_NOT_FOUND."\n"; 
echo "Redis::REDIS_STRING : ".Redis::REDIS_STRING."\n"; 
echo "Redis::REDIS_SET : ".Redis::REDIS_SET."\n"; 
echo "Redis::REDIS_LIST : ".Redis::REDIS_LIST."\n"; 
echo "Redis::REDIS_ZSET : ".Redis::REDIS_ZSET."\n"; 
echo "Redis::REDIS_HASH : ".Redis::REDIS_HASH."\n"; 

/*
Redis::REDIS_NOT_FOUND: 0
Redis::REDIS_STRING : 1
Redis::REDIS_SET : 2
Redis::REDIS_LIST : 3
Redis::REDIS_ZSET : 4
Redis::REDIS_HASH : 5
*/
