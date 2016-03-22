<?php
/* =============================================================================
#     FileName: json_json_decode.php
#         Desc: 对JSON格式的字符串进行解码，转化成一个数组
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-22 13:41:19
#      History:
============================================================================= */

# 语法：mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] )
# 注意：如果想转换成数组的话，第二个参数$assoc必须设置为true, 否则将返回一个object对象

/**
 * 示例: 从文件中读取JSON格式的字符串，并将其转换为数组
 */
$WORK_DIR = dirname(__FILE__);
$file_str = file_get_contents($WORK_DIR . "/../../data/school_special.json");
// 将整个文件的字符串按行切分，保存在数组中
$file_line_arr = explode("\n", $file_str);
// 读取第一行JSON字符串
$json_str = (count($file_line_arr) > 0) ? $file_line_arr[0] : "{}";
print_r("json_str is: " . $json_str . "\n");
// 将JSON字符串转化为数组
$output = json_decode($json_str, true);
print_r("output is: \n");
print_r($output);

