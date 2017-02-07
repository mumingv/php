<?php
/***********************************************************
 *     FileName: strncasecmp.php
 *         Desc: 二进制安全比较字符串开头的若干个字符（不区分大小写）
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 02:59:15
 *      History:
 ***********************************************************/

# 语法：int strncasecmp ( string $str1 , string $str2 , int $len )

# 示例：
echo strncasecmp("Hello1", "hello2", 5);  // 0

