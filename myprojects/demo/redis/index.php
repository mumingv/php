<?php
/***********************************************************
 *     FileName: index.php
 *         Desc: Redis数据可视化
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 11:39:43
 *      History:
 ***********************************************************/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Template Page</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                color: #665544;
            }
            a {
                /* 这里的颜色是点击前或点击后显示的颜色，如果不被:visited颜色属性的话 */
                color: #0088dd;
                text-decoration: none;
            }
            a:hover {
                color: #111111;  
            }
        </style>
    </head>
    <body>
<?php
showRedisData();
?>
    </body>
</html>

<?php

function showRedisData() {
    // 连接本地的Redis
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    // 查询Redis中所有的key
    $array = $redis->keys("*");
    echo "<b>redis data:<br/></b>";
    
    // 读取字符串数据
    foreach ($array as $redisKey) {
        $data = getRedisDataByKey($redis, $redisKey);
        echo "$redisKey : ".$data."<br/>";
    }
}

function getRedisDataByKey($redis, $redisKey) {
    $type = $redis->type("$redisKey");
    switch ($type) {
        case Redis::REDIS_STRING:
            return $redis->get("$redisKey")."<br/>";
        default:
            return "Not support key type";
    }
}

?>
