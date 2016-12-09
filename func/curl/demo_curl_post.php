<?php
/**
* Send a POST requst using cURL 
* @param string $url to request 
* @param array $post values to send 
* @param array $options for cURL 
* @return string 
*/ 
function curl_post($url, array $post = array(), array $options = array()) 
{ 
    $defaults = array( 
        CURLOPT_POST => 1, 
        CURLOPT_HEADER => 0, 
        CURLOPT_URL => $url, 
        CURLOPT_FRESH_CONNECT => 1, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_FORBID_REUSE => 1, 
        CURLOPT_TIMEOUT => 4, 
        CURLOPT_POSTFIELDS => http_build_query($post) 
    ); 

    $ch = curl_init(); 
    curl_setopt_array($ch, ($options + $defaults)); 
    if( ! $result = curl_exec($ch)) 
    { 
        trigger_error(curl_error($ch)); 
    } 
    curl_close($ch); 
    return $result; 
} 

$url = 'http://123.56.21.232:8254/myprojects/demo/get_json_data.php';
$data = curl_post($url);
$data = json_decode($data, true);
print_r($data);
