<?php

$query_str = file_get_contents("./input_query.txt");
$query_arr = explode("\n", $query_str);
file_put_contents("./output.txt", "");

foreach ($query_arr as $key => $query) {
    if (empty($query)) continue;
    $post_request = 'curl -d \'{"sample_name":"bear_brain_wireless","isNewUser":"0","request_type":"20","longitude":"116.280523","request_uid":"E60A0298D473929BA4538CBD40471C95|0","app_ver":"1.4.0","service_id":"5","query_type":"0","from_client":"sdk","request_query":"'.$query.'","cuid":"E60A0298D473929BA4538CBD40471C95|0","operation_system":"android","latitude":"40.051242","request_from":"0","appid":"dmFDBDC045E33741A1","appkey":"6D569B3891034156ACBA08D1FF3443CD","sdk_ui":"no"}\' http://xiaodu.baidu.com/saiya/ws';
    $data = exec($post_request);
    $data_arr = json_decode($data, true);

    $output = $query."\t-\n";
    if (!isset($data_arr['result_list'][0]['source_type']) || empty($data_arr['result_list'][0]['source_type'])) {
        file_put_contents("./output.txt", $output, FILE_APPEND);
    }
    
    $source_type = $data_arr['result_list'][0]['source_type'];
    $output = $query."\t".$source_type."\n";
    file_put_contents("./output.txt", $output, FILE_APPEND);
}
