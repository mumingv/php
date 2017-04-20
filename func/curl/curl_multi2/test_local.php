<?php
include 'CurlMulti.php';  

use \Vega\Profiler\Profiler;
$requests = array(  
    'bigsearch' => array(  
        'url' => 'http://123.56.21.232:8254/myprojects/demo/get_json_data.php',
        'method' => 'GET',  
        'post_data' => '',  
        'header' => null,  
        'options' => array(  
            CURLOPT_REFERER => "http://niu.xunlei.com/entergame/?gameNo=qmr&fenQuNum=3",  
        )  
    ),  
    /*
    'feedsearch' => array(  
        'url' => 'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',
        'method' => 'GET',  
        'post_data' => '',  
        'header' => null,  
        'options' => array(  
            CURLOPT_REFERER => "http://niu.xunlei.com/entergame/?gameNo=qmr&fenQuNum=3",  
        )  
    ),  
    */
);


Profiler::start('total');
$curl = new Common_CurlMulti($requests);  
$results = $curl->execute();
Profiler::end('total');
//print_r($results);
$totalTime = Profiler::getAllTime();
var_dump($totalTime);
