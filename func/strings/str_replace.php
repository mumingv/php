<?php
/* =============================================================================
#     FileName: str_replace.php
#         Desc: 子字符串替换
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-07 15:09:13
#      History:
============================================================================= */

# 语法：mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

# 示例: 所有参数均为字符串，不是数组
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
var_dump($bodytag);
/*
string(19) "<body text='black'>"
*/

# 示例：去除字符串中的元音字母，第一个参数是数组，其他参数为字符串
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
var_dump($vowels);
/*
array(10) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "e"
  [2]=>
  string(1) "i"
  [3]=>
  string(1) "o"
  [4]=>
  string(1) "u"
  [5]=>
  string(1) "A"
  [6]=>
  string(1) "E"
  [7]=>
  string(1) "I"
  [8]=>
  string(1) "O"
  [9]=>
  string(1) "U"
}
*/


