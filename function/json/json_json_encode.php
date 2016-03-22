<?php
/* =============================================================================
#     FileName: json_json_encode.php
#         Desc: 对变量(通常为数组)进行JSON编码
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-22 14:22:07
#      History:
============================================================================= */

# 语法：string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )

/**
 * 示例: 将数组转化成JSON字符串
 */
$arr = array(
    "id" => 1173,
    "collegeName" => "北京大学",
    "majorName" => "法学",
);
$json_str = json_encode($arr);
print_r("json_str is: \n");
print_r($json_str);


