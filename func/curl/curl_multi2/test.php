<?php
include 'CurlMulti.php';  

use \Vega\Profiler\Profiler;
/** 
 * merge并发检索 
 */
$requests = array(  
    'bigsearch' => array(  
        'url' => 'http://www.baidu.com/ns?tn=json_webapp&ie=utf-8&rn=15&pn=1&word=',
        'method' => 'GET',  
        'post_data' => '',  
        'header' => null,  
        'options' => array(  
            CURLOPT_REFERER => "http://www.baidu.com",  
        )   
    ),  
    'feedsearch2' => array(  
        'url' => 'http://feed.baidu.com/feed/api/search/feedlist?pd=dumi&pagenum=1&reqnum=10&query=',
        'method' => 'GET',  
        'post_data' => '', 
        'header' => array(
            'Host: feed.baidu.com',
        ),  
        'options' => array(  
            CURLOPT_REFERER => "http://feed.baidu.com",
        )   
    ),  
);  


Profiler::start('total');
foreach ($requests as $key => $request) {
    $requests[$key]['url'] .= '王宝强';
}  

$curl = new Common_CurlMulti($requests);  
$results = $curl->execute();
Profiler::end('total');
//print_r($results);
$totalTime = Profiler::getAllTime();
var_dump($totalTime);
