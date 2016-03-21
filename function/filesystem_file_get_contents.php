<?php
/* =============================================================================
#     FileName: filesystem_file_get_contents.php
#         Desc: 将整个文件读入作为一个字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-21 19:43:31
#      History:
============================================================================= */

# 语法：string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] )

/**
 * 示例：读入文件并按行转换成数组, 然后再从数组元素中提取数据转换成json字符串
 */
// 读取文件内容，存放到字符串中
$data_str = file_get_contents("data/school_special.txt");

// 字符串按换行符分割，形成数组，文件的每一行对应数组的一个元素
$data_arr = explode("\n", $data_str);

// 去除首行标题
if (count($data_arr) > 0) {
    // 使用unset删除数组元素后，数组ID就不连续了
    unset($data_arr[0]);
    // 重建索引
    $data_arr = array_values($data_arr); 
}

// 去除最后一个空元素(explode函数导致的)
if ($data_arr[count($data_arr) - 1] == '') {
    unset($data_arr[count($data_arr)- 1]);
}

// 按行处理, 提取需要的信息
foreach ($data_arr as $key => $value) {
    // 将行字符串按“\t”分割，形成新的数组
    $value_arr = explode("\t", $value);
    // 构造输出数据
    $content = array(
        'id' => $value_arr[0],
        'collegeName' => $value_arr[1],
        'majorName' => $value_arr[2],
    );
    // 将输出数据转换成json字符串进行输出
    $line = json_encode($content, JSON_UNESCAPED_UNICODE) . "\n";
    file_put_contents('./data/school_special.output', $line, FILE_APPEND);
}

