<?php
/***********************************************************
 *     FileName: preg_match_all.php
 *         Desc: 全局正则表达式匹配
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-04-21 08:26:58
 *      History:
 ***********************************************************/

# int preg_match_all ( string $pattern , string $subject [, array &$matches [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]] )
# 返回值：正常返回匹配次数(0、1...)；异常返回false。

# 示例: 查找文本字符串
if (preg_match_all("/php/i", "PHP is the web scripting language of choice. PHP is the best language.", $matches)) {
    echo "A match was found.\n";
} else {
    echo "A match was not found.\n";
}
var_dump($matches);
/*
A match was found.
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(3) "PHP"
    [1]=>
    string(3) "PHP"
  }
}
*/


# 示例：查找匹配的HTML标签（贪婪）

// 说明：\\2是一个后向引用的示例. 这会告诉pcre它必须匹配正则表达式中第二个圆括号(这里是([\w]+))，匹配到的结果. 这里使用两个反斜线是因为这里使用了双引号.
$html = "<b>bold text</b><a href=howdy.html>click me</a>";
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches);
var_dump($matches);
/*
array(5) {
  [0]=>
  array(2) {
    [0]=>
    string(16) "<b>bold text</b>"
    [1]=>
    string(31) "<a href=howdy.html>click me</a>"
  }
  [1]=>
  array(2) {
    [0]=>
    string(3) "<b>"
    [1]=>
    string(19) "<a href=howdy.html>"
  }
  [2]=>
  array(2) {
    [0]=>
    string(1) "b"
    [1]=>
    string(1) "a"
  }
  [3]=>
  array(2) {
    [0]=>
    string(9) "bold text"
    [1]=>
    string(8) "click me"
  }
  [4]=>
  array(2) {
    [0]=>
    string(4) "</b>"
    [1]=>
    string(4) "</a>"
  }
}
*/

$html = "<b>bold text</b><a href=howdy.html>click me</a>";
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
var_dump($matches);
/*
array(2) {
  [0]=>
  array(5) {
    [0]=>
    string(16) "<b>bold text</b>"
    [1]=>
    string(3) "<b>"
    [2]=>
    string(1) "b"
    [3]=>
    string(9) "bold text"
    [4]=>
    string(4) "</b>"
  }
  [1]=>
  array(5) {
    [0]=>
    string(31) "<a href=howdy.html>click me</a>"
    [1]=>
    string(19) "<a href=howdy.html>"
    [2]=>
    string(1) "a"
    [3]=>
    string(8) "click me"
    [4]=>
    string(4) "</a>"
  }
}
*/


