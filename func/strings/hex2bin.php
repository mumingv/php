<?php
/***********************************************************
 *     FileName: hex2bin.php
 *         Desc: 转换十六进制字符串为二进制字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-17 15:16:45
 *      History:
 ***********************************************************/

# 说明：该函数将字符串中的ASCII码16进制表示逐个转换成对应的字符。

# 语法：string hex2bin ( string $data )

# 示例
$hex = hex2bin("6578616d706c65206865782064617461");
var_dump($hex);
/*
string(16) "example hex data"
*/

