<?php
/***********************************************************
 *     FileName: preg_match.php
 *         Desc: 正则表达式匹配
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


# PCRE子组(子模式)
preg_match("/((red|white) (king|queen))/", "the red king", $matches);
var_dump($matches);
/*
array(4) {
  [0]=>
  string(8) "red king"  // 整个模式匹配的结果
  [1]=>
  string(8) "red king"  // 第1个子组匹配的结果 ((red|white) (king|queen))
  [2]=>
  string(3) "red"  // 第2个子组匹配的结果 (red|white)
  [3]=>
  string(4) "king"  // 第3个子组匹配的结果 (king|queen)
}
*/


// 分组开头的 ?: 表示不捕获该分组
preg_match("/((?:red|white) (king|queen))/", "the red king", $matches);
var_dump($matches);
/*
array(3) {
  [0]=>
  string(8) "red king"
  [1]=>
  string(8) "red king"
  [2]=>
  string(4) "king"
}
*/


# 获取URL中的域名
// 从URL中获取主机名称
// 说明：这里的 @ 表示模式字符串的起止字符；[^/]+ 表示接下来的字符串一直到'/'截止。
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
var_dump($matches);

// 获取主机名称的后面两部分
// 说明：[^.]+ 示接下来的字符串一直到'.'截止，'.'在方括号中表示字面意义；
$host = $matches[1];
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
var_dump($matches);


