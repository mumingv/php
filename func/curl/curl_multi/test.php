<?php
include 'curl.class.php';  

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
    'feedsearch' => array(  
        'url' => 'http://123.56.21.232:8254/myprojects/demo/get_json_data2.php',
        'method' => 'GET',  
        'post_data' => '',  
        'header' => null,  
        'options' => array(  
            CURLOPT_REFERER => "http://niu.xunlei.com/entergame/?gameNo=qmr&fenQuNum=3",  
        )  
    ),  
    /*
    'feed' => array(  
        'url' => 'http://feed.baidu.com/feed/api/search/feedlist?query=%E7%99%BE%E5%BA%A6&pd=dumi&pagenum=1&reqnum=10',
        'method' => 'GET',  
        'post_data' => '',  
        'header' => null,  
        'options' => array(  
            CURLOPT_REFERER => "http://niu.xunlei.com/entergame/?gameNo=sq&fenQuNum=41",  
        )  
    ),
    */
);

$curl = new Curl($requests);  
$results = $curl->execute();
print_r($results);
