<?php
/***********************************************************
 *     FileName: demo.php
 *         Desc: 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-24 21:29:17
 *      History:
 ***********************************************************/

ini_set("display_errors", "on");
require_once('CurlMulti.php');

$urls = [  
    'urla' => array(
        'http://123.56.21.232:8254/myprojects/demo/get_json_data.php?a=1',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data.php?a=2',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data.php?a=3',  
     ),
    'urlb' => array(
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php?a=4',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php?a=5',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php?a=6',  
    ),
];

// url支持字符串和数据混用的形式
/*
$urls = [  
    'urla' => 'http://123.56.21.232:8254/myprojects/demo/get_json_data.php',
    'urlb' => array(
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',  
        'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',  
    ),
];
*/
  
$opts = [  
    CURLOPT_HEADER => false,  
    CURLOPT_RETURNTRANSFER => true,  
    CURLOPT_TIMEOUT_MS => 1500,  // 执行脚本超时  
    CURLOPT_NOSIGNAL => true,   // 使用毫秒超时必须设置
];
  
$obj = new CurlMulti();
$start = intval(microtime(true) * 1000);
$result = $obj->execute($urls, $opts);
$end = intval(microtime(true) * 1000);
$time = $end - $start;

var_dump($result);
var_dump($time);
