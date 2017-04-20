<?php
/***********************************************************
 *     FileName: curl_getinfo.php
 *         Desc: 获取一个cURL连接资源句柄的信息
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-04-20 14:33:43
 *      History:
 ***********************************************************/

// 创建一个cURL句柄
$ch = curl_init('http://123.56.21.232:8254/myprojects/demo/get_json_data.php');

// 执行
curl_exec($ch);

// 检查是否有错误发生
if(!curl_errno($ch))
{
    $info = curl_getinfo($ch);
    var_dump($info);
    echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
}

// Close handle
curl_close($ch);
