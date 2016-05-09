<?php
/***********************************************************
 *     FileName: stream_stream_get_meta_data.php
 *         Desc: 从封装协议文件指针中取得报头／元数据
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-09 15:15:06
 *      History:
 ***********************************************************/

# 语法：array stream_get_meta_data ( int $fp )

# 示例
$fp = fopen('http://www.baidu.com/', 'r');
print_r(stream_get_meta_data($fp));
fclose($fp);
/*
Array
(
    [wrapper_data] => Array
    (
        [0] => HTTP/1.1 200 OK
        [1] => Date: Mon, 09 May 2016 07:16:54 GMT
        [2] => Content-Type: text/html
        [3] => Content-Length: 14613
        [4] => Last-Modified: Wed, 03 Sep 2014 02:48:32 GMT
        [5] => Connection: Close
        [6] => Vary: Accept-Encoding
        [7] => Set-Cookie: BAIDUID=AD58C4378234B36DA010E119828C0897:FG=1; expires=Thu, 31-Dec-37 23:55:55 GMT; max-age=2147483647; path=/; domain=.baidu.com
        [8] => Set-Cookie: BIDUPSID=AD58C4378234B36DA010E119828C0897; expires=Thu, 31-Dec-37 23:55:55 GMT; max-age=2147483647; path=/; domain=.baidu.com
        [9] => Set-Cookie: PSTM=1462778214; expires=Thu, 31-Dec-37 23:55:55 GMT; max-age=2147483647; path=/; domain=.baidu.com
        [10] => P3P: CP=" OTI DSP COR IVA OUR IND COM "
        [11] => Server: BWS/1.1
        [12] => X-UA-Compatible: IE=Edge,chrome=1
        [13] => Pragma: no-cache
        [14] => Cache-control: no-cache
        [15] => Accept-Ranges: bytes
    )

    [wrapper_type] => http
    [stream_type] => tcp_socket/ssl
    [mode] => r
    [unread_bytes] => 0
    [seekable] => 
    [uri] => http://www.baidu.com/
    [timed_out] => 
    [blocked] => 1
    [eof] => 
)
*/

