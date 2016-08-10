<?php
/***********************************************************
 *     FileName: strcasecmp.php
 *         Desc: 二进制安全比较字符串（不区分大小写）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-08-10 17:58:43
 *      History:
 ***********************************************************/

# 语法：int strcasecmp ( string $str1 , string $str2 )

# 示例：
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';  // 运行会打印这句话
}

