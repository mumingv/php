<?php
/***********************************************************
 *     FileName: filter_filter_var.php
 *         Desc: 使用特定的过滤器过滤一个变量
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-29 15:40:26
 *      History:
 ***********************************************************/

# 语法：mixed filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] )
# 返回值：验证成功，返回$variable本身；验证失败，返回false

# 示例：验证一个整数
$int = 123;
var_dump(filter_var($int, FILTER_VALIDATE_INT));
if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo "Isn't a var\n";
} else {
    echo "Is a var\n";
}

# 示例：验证一个IP
$ip = "192.168.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP))
{
    echo "IP is not valid\n";
}
else
{
    echo "IP is valid\n";
}
$ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if(!filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6))
{
    echo "IPv6 is not valid\n";
}
else
{
    echo "IPv6 is valid\n";
}

# 示例：验证一个E-Mail
$email = "someone@example.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "E-mail is not valid\n";
}
else
{
    echo "E-mail is valid\n";
}

# 示例：验证一个URL
# 参考：http://www.w3school.com.cn/php/filter_validate_url.asp
$url = "http://www.example.com";
if (!filter_var($url, FILTER_VALIDATE_URL))
{
    echo "URL is not valid\n";
}
else
{
    echo "URL is valid\n";
}
// 第三个参数FILTER_FLAG_QUERY_REQUIRED, 表示要求URL中存在查询字符串
$url = "http://www.example.php?name=Peter&age=37";
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED))
{
    echo "URL is not valid\n";
}
else
{
    echo "URL is valid\n";
}

