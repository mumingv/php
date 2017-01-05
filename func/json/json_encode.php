<?php
/* =============================================================================
#     FileName: json_json_encode.php
#         Desc: 对变量(通常为数组)进行JSON编码, 生成一个JSON字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-22 14:22:07
#      History:
============================================================================= */

# 语法：string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )

# 示例：将数组转换成JSON字符串(无中文字符)
$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr);
/*
{"a":1,"b":2,"c":3,"d":4,"e":5}
*/


# 示例: 将数组转换成JSON字符串(含中文字符)
$arr = array(
    "id" => 1173,
    "collegeName" => "北京大学",
    "majorName" => "法学",
);
$json_str = json_encode($arr, JSON_UNESCAPED_UNICODE);
print_r("json_str is: \n");
print_r($json_str);
echo "\n";
/*
{"id":1173,"collegeName":"北京大学","majorName":"法学"}
*/


