<?php
/***********************************************************
 *     FileName: preg_match.php
 *         Desc: 执行匹配正则表达式
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-04-12 20:30:10
 *      History:
 ***********************************************************/

# int preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )
# 返回值：0-不匹配；1-匹配

# 示例: 查找文本字符串
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.\n";
} else {
    echo "A match was not found.\n";
}
// A match was found.


# 示例：查找单词
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.\n";
} else {
    echo "A match was not found.\n";
}
// A match was found.

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "A match was found.\n";
} else {
    echo "A match was not found.\n";
}
// A match was not found.


# 获取URL中的域名
// 从URL中获取主机名称
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
var_dump($matches);exit;
$host = $matches[1];

// 获取主机名称的后面两部分
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";





