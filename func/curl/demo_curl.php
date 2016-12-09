<?php
function get_data($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;  
} 

$url = 'http://123.56.21.232:8254/myprojects/demo/get_json_data.php';
$data = get_data($url);
$data = json_decode($data, true);
print_r($data);
