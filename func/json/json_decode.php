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


# 示例：常用用法，将JSON字符串转换成一个PHP数组
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
print_r(json_decode($json, true));
/*
Array
(
    [a] => 1
    [b] => 2
    [c] => 3
    [d] => 4
    [e] => 5
)
*/


# 示例：非常用用法，将JSON字符串转换成一个PHP对象
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5,"foo-bar":6}';
$obj = json_decode($json);
print_r($obj);
print_r($obj->c);  // 访问对象的元素
echo "\n";
print_r($obj->{'foo-bar'});  // 访问对象的元素
echo "\n";
/*
stdClass Object
(
    [a] => 1
    [b] => 2
    [c] => 3
    [d] => 4
    [e] => 5
)
3
6
*/


# 超大整数的处理
$json = '{"number": 12345678901234567890}';
var_dump(json_decode($json));
var_dump(json_decode($json, false, 512, JSON_BIGINT_AS_STRING));
/*
object(stdClass)#2 (1) {
  ["number"]=>
  float(1.2345678901235E+19)
}
object(stdClass)#2 (1) {
  ["number"]=>
  string(20) "12345678901234567890"
}
*/


# 深度错误
$json = json_encode(
    array(
        1 => array(
            'English' => array(
                'One',
                'January'
            ),
            'French' => array(
                'Une',
                'Janvier'
            )
        )
    )
);
// 获取JSON相关的错误常量数组(key为常量值，value为常量名称)
$constants = get_defined_constants(true);
$json_errors = array();
foreach ($constants["json"] as $name => $value) {
    if (!strncmp($name, "JSON_ERROR_", 11)) {
        $json_errors[$value] = $name;
    }
}
foreach (range(4, 3, -1) as $depth) {
    var_dump(json_decode($json, true, $depth));
    echo 'Last error: ', $json_errors[json_last_error()], PHP_EOL, PHP_EOL;
}
/*
array(1) {
  [1]=>
  array(2) {
    ["English"]=>
    array(2) {
      [0]=>
      string(3) "One"
      [1]=>
      string(7) "January"
    }
    ["French"]=>
    array(2) {
      [0]=>
      string(3) "Une"
      [1]=>
      string(7) "Janvier"
    }
  }
}
Last error: JSON_ERROR_NONE

NULL
Last error: JSON_ERROR_DEPTH
*/




