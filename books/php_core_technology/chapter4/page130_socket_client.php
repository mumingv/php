<?php
/***********************************************************
 *     FileName: page130_socket_client.php
 *         Desc: 简单的socket客户端
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-10 12:07:00
 *      History:
 ***********************************************************/

# 示例：socket客户端

$socket = fsockopen("127.0.0.1", 5160, $errno, $errstr, 1);
if (!$socket) {
    echo "$errstr ($errno)\n";
    die("fsockopen() return fail!\n");
}
fwrite($socket, "send data...");
echo fread($socket, 128);
fclose($socket);

