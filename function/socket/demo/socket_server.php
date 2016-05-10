<?php
/***********************************************************
 *     FileName: socket_socket_create.php
 *         Desc: 创建一个套接字（通讯节点）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-09 22:42:34
 *      History:
 ***********************************************************/

# 语法：resource socket_create ( int $domain , int $type , int $protocol )
# 第三个参数$protocol取值参考：/etc/protocols

# 参数取值
#
# Domain    描述
# AF_INET   IPv4 网络协议。TCP 和 UDP 都可使用此协议。
# AF_INET6  IPv6 网络协议。TCP 和 UDP 都可使用此协议。
# AF_UNIX   本地通讯协议。具有高性能和低成本的 IPC（进程间通讯）。
#
# 类型              描述
# SOCK_STREAM       提供一个顺序化的、可靠的、全双工的、基于连接的字节流。支持数据传送流量控制机制。TCP 协议即基于这种流式套接字。
# SOCK_DGRAM        提供数据报文的支持。(无连接，不可靠、固定最大长度).UDP协议即基于这种数据报文套接字。
# SOCK_SEQPACKET    提供一个顺序化的、可靠的、全双工的、面向连接的、固定最大长度的数据通信；数据端通过接收每一个数据段来读取整个数据包。
# SOCK_RAW          提供读取原始的网络协议。这种特殊的套接字可用于手工构建任意类型的协议。一般使用这个套接字来实现 ICMP 请求（例如 ping）。
# SOCK_RDM          提供一个可靠的数据层，但不保证到达顺序。一般的操作系统都未实现此功能。
# 
# 名称  描述
# icmp  Internet Control Message Protocol 主要用于网关和主机报告错误的数据通信。例如“ping”命令（在目前大部分的操作系统中）就是使用 ICMP 协议实现的。
# udp   User Datagram Protocol 是一个无连接的、不可靠的、具有固定最大长度的报文协议。由于这些特性，UDP 协议拥有最小的协议开销。对应宏定义：SOL_UDP。
# tcp   Transmission Control Protocol 是一个可靠的、基于连接的、面向数据流的全双工协议。TCP 能够保障所有的数据包是按照其发送顺序而接收的。如果任意数据包在通讯时丢失，TCP 将自动重发数据包直到目标主机应答已接收。因为可靠性和性能的原因，TCP 在数据传输层使用 8bit 字节边界。因此，TCP 应用程序必须允许传送部分报文的可能。对应宏定义：SOL_TCP。

# =======================================================================================
# Client-Server模型
# ---------------------------------------------------------------------------------------
# Client            Server          说明
# ---------------------------------------------------------------------------------------
# socket_create     socket_create   创建
# socket_bind       socket_bind     绑定
#                   socket_listen   监听
# socket_connect    socket_accept   连接/接收连接
# socket_write      socket_read     读/写
# socket_read       socket_write    写/读
# socket_close      socket_close    关闭
# =======================================================================================

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
echo "Finished!\n";
socket_close($spawn);
socket_close($socket);

