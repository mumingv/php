<?php
/***********************************************************
 *     FileName: set_multicurl_timeout_ms.php
 *         Desc: multicurl设置毫秒级别超时
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-24 19:51:19
 *      History:
 ***********************************************************/

ini_set("display_errors", "on");

function curlMultiRequest($urls, $options = array()) {  
    $ch= array();  
    $results = array();  
    $mh = curl_multi_init();  
    
    foreach ($urls as $key => $val) {  
        $ch[$key] = curl_init();  
        if ($options) {  
            curl_setopt_array($ch[$key], $options);  
        }  
        curl_setopt($ch[$key], CURLOPT_URL, $val);  
        curl_multi_add_handle($mh, $ch[$key]);  
    }  
    
    $running = null;  
    do {  
        curl_multi_exec($mh, $running);  
    } while ($running > 0);  
    
    // 获取内容并移除句柄
    foreach ($ch as $key => $val) {  
        $results[$key] = curl_multi_getcontent($val);  
        if ($results[$key] == '') {
            $results[$key] = curl_error($val);
        }
        curl_multi_remove_handle($mh, $val);  
    }
    curl_multi_close($mh);  
    
    return $results;  
}

$urls = [  
     'http://123.56.21.232:8254/myprojects/demo/get_json_data.php',  
     'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',  
];
  
$opts = [  
    CURLOPT_HEADER => false,  // 不将头文件的信息作为数据流输出, 作用于函数：curl_multi_getcontent
    CURLOPT_RETURNTRANSFER => true,  // 将获取的信息以字符串返回，而不是直接输出 
    CURLOPT_TIMEOUT_MS => 1500,  //执行脚本超时  
    CURLOPT_NOSIGNAL => true,  //这个是设定毫秒必须设定  
];
  
$result = curlMultiRequest($urls, $opts);  
var_dump($result);
