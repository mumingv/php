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
 * 通过GET接口获取数据 
 */
$url = 'http://testsidewear.baidu.com/voicesearch?word=娱乐新闻&product=news&uuid=2556452&pn=2';
$data = curl_get($url);
$data = json_decode($data, true);
echo "---->获取的数据：\n";
print_r($data);


/**
 * 使用标点符号分割文本，返回分割后的字符串数组
 */
/*
function mbStringSplit($string) {
    mb_regex_encoding('UTF-8');
    mb_internal_encoding("UTF-8"); 
    $result = mb_split('。|！|？', $string); 
    if ((count($result) > 0) && (strlen(end($result)) == 0)) {
        array_pop($result);
    }
    return $result;
}
foreach ($data['result'] as $id => $news) {
    foreach ($news as $key => $string) {
        $data['result'][$id][$key] = mbStringSplit($string); 
    }
}
echo "---->分割的数据：\n";
print_r($data);
 */



