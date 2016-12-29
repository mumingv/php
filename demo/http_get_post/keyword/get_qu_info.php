<?php
/***********************************************************
 *     FileName: get_qu_info.php
 *         Desc: 从QU结果中提取信息
 *       Author: Jie Yin
 *      Version: 0.0.1
 *   LastChange: 2016-12-29 16:04:01
 *      History:
 ***********************************************************/

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

function changeAssoc($arr, $key) {
    $data = array();
    foreach ($arr as $row) {
        if (isset($row[$key])) {
            $data[$row[$key]] = $row;
        }
    }
    return $data;
}

$sort_type_set = array("最热", "最新");
$category_set = array("国际" ,"国内" ,"体育" ,"娱乐" ,"社会" ,"财经" ,"互联网" ,"科技" ,"房产" ,"汽车" ,"教育" ,"时尚" ,"游戏" ,"军事" ,"旅游" ,"生活" ,"人文" ,"创意" ,"搞笑" ,"女人");

$query_str = file_get_contents("./input_query.txt");
$query_arr = explode("\n", $query_str);
file_put_contents("./output.txt", "");

foreach ($query_arr as $key => $query) {
    if (empty($query)) continue;
    $url = 'http://nj03-rp-m22nlp156.nj03.baidu.com:8184/admin/datest?query='.$query.'&otype=json';
    $data = curl_get($url);
    $data = json_decode($data, true);
    $output = $query."\t-\t-\t-\n";
    if (!isset($data['data']['data']['da_query_info']) || empty($data['data']['data']['da_query_info'])) {
        echo $output;
        file_put_contents("./output.txt", $output, FILE_APPEND);
        continue;
    }

    $da_query_info = changeAssoc($data['data']['data']['da_query_info'], 'type');
    if (!isset($da_query_info['audio.news']['result_list'][0]['result_list'][0]['result_list'])
        || empty($da_query_info['audio.news']['result_list'][0]['result_list'][0]['result_list'])) {
        echo $output;
        file_put_contents("./output.txt", $output, FILE_APPEND);
        continue;
    }

    $result_list = $da_query_info['audio.news']['result_list'][0]['result_list'][0]['result_list'];
    $result_list = changeAssoc($result_list, 'key');

    $sort_type = $result_list['sort_type']['value'][0]['value'];
    if (!empty($sort_type) && !in_array($sort_type, $sort_type_set)) {
        $sort_type = $sort_type."???";
    }
    $sort_type = empty($sort_type) ? "-" : $sort_type;

    $keyword = $result_list['keyword']['value'][0]['value'];
    $keyword = empty($keyword) ? "-" : $keyword;

    $category = $result_list['category']['value'][0]['value'];
    if (!empty($category) && !in_array($category, $category_set)) {
        $category = $category."???"; 
    }
    $category = empty($category) ? "-" : $category;

    $output = $query."\t".$sort_type."\t".$keyword."\t".$category."\n";
    echo $output;
    file_put_contents("./output.txt", $output, FILE_APPEND);

    exec("cat output.txt | cut -f 3 | grep -v '-' | sort | uniq > ./keyword_list.txt");
}
