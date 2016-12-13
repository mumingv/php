<?php
/***********************************************************
 *     FileName: demo_array_to_json.php
 *         Desc: 从文件读取数组打印字符串，并将其转换为数组变量
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-13 19:42:47
 *      History:
 ***********************************************************/

$arr_str = file_get_contents('input');
eval('$arr ='.$arr_str.';');
//$arr['foo'] = 'bar';  // 测试：向数组中插入一个字段
file_put_contents('output', json_encode($arr, JSON_UNESCAPED_UNICODE));
