<?php
/***********************************************************
 *     FileName: page112_http.php
 *         Desc: 简单的HTTP协议使用示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-06 16:55:21
 *      History:
 ***********************************************************/

$html = file_get_contents('http://www.baidu.com/');
print_r($http_response_header);

