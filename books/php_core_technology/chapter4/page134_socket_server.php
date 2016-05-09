<?php
/***********************************************************
 *     FileName: page134_socket_server.php
 *         Desc: 简单的socket服务器
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-09 22:28:05
 *      History:
 ***********************************************************/

# 示例：socket服务器
# 七个步骤：cbl-a-rwc

// 基本参数设置
//$host = "123.56.21.232"; //不能绑定外网IP
$host = "127.0.0.1";
$port = 5160;
//set_time_limit(0);

// 创建socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Fail to create socket!\n");

// 绑定socket到指定地址和端口
socket_bind($socket, $host, $port) or die("Fail to bind socket!\n");

// 监听socket
socket_listen($socket, 3) or die("Fail to listen socket!\n");

// 接收请求, 并调用子socket处理该请求
$spawn = socket_accept($socket) or die("Fail to accept client's connection!\n");

// 读取数据
$input_data = socket_read($spawn, 1024) or die("Fail to read data!\n");
$input_data = trim($input_data);

// 处理数据并返回
$output_data = strrev($input_data) . "\n";
socket_write($spawn, $output_data, strlen($output_data)) or die("Fail to write data!\n");

// 关闭socket
socket_close($spawn);
socket_close($socket);

