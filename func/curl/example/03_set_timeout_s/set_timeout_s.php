<?php
/***********************************************************
 *     FileName: set_timeout_s.php
 *         Desc: 设置秒级别超时
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-24 18:27:19
 *      History:
 ***********************************************************/

ini_set("display_errors", "on");
$ch = curl_init('http://123.56.21.232:8254/myprojects/demo/get_json_data.php');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);

$ret = curl_exec($ch);
if ($ret === false) {
    echo 'curl_exec return fail: '.curl_error($ch)."\n";    
}
curl_close($ch);
