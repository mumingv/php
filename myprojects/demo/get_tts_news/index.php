<?php
/***********************************************************
 *     FileName: index.php
 *         Desc: 返回TTS新闻JSON字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-27 23:36:14
 *      History:
 ***********************************************************/

// 获取JSON字符串
$json_str = file_get_contents('input_file');
// 转成数组
$arr = json_decode($json_str, true);
// 返回JSON字符串
echo json_encode($arr, JSON_UNESCAPED_UNICODE);
