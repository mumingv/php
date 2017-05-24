<?php
/***********************************************************
 *     FileName: save_page_to_file.php
 *         Desc: 读取页面内容并保存到文件中
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-24 16:47:05
 *      History:
 ***********************************************************/

$ch = curl_init('http://123.56.21.232:8254/myprojects/demo/get_json_data.php');
$fp = fopen('curl_result.txt', 'w');

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
