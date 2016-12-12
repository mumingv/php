<?php
/***********************************************************
 *     FileName: demo_string_split.php
 *         Desc: 使用GET接口获取带播放的新闻数据并拆分每句话
 *               依赖服务: .../php/myprojects/demo/get_json_data.php
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-12 12:09:52
 *      History:
 ***********************************************************/
/** 
* Send a GET requst using cURL 
* @param string $url to request 
* @param array $get values to send 
* @param array $options for cURL 
* @return string 
*/ 
function curl_get($url, array $get = array(), array $options = array()) 
{    
    $defaults = array( 
        CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get), 
        CURLOPT_HEADER => 0, 
        CURLOPT_RETURNTRANSFER => TRUE, 
        CURLOPT_TIMEOUT => 4 
    ); 
    
    $ch = curl_init(); 
    curl_setopt_array($ch, ($options + $defaults)); 
    if (! $result = curl_exec($ch)) 
    { 
        trigger_error(curl_error($ch)); 
    } 
    curl_close($ch); 
    return $result; 
} 

/**
 *  
 */
$url = 'http://123.56.21.232:8254/myprojects/demo/get_json_data.php';
$data = curl_get($url);
$data = json_decode($data, true);
echo "---->获取的数据：\n";
print_r($data);


