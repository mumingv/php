<?php
/* =============================================================================
#     FileName: fprintf.php
#         Desc: 将格式化后的字符串写入到流
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 13:31:46
#      History:
============================================================================= */

# 语法：int fprintf ( resource $handle , string $format [, mixed $args [, mixed $... ]] )

# 示例：格式化字符串并将其写入文件当中
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}
$year = "2017";
$month = "01";
$day = "17";
fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);
/*
2017-01-17
*/

