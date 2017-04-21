<?php
/***********************************************************
 *     FileName: preg_replace.php
 *         Desc: 正则表达式搜索和替换
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-04-21 10:41:28
 *      History:
 ***********************************************************/

# mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )
# 返回值：根据$subject而定，如果是数组则返回数组；如果是其他类型则返回字符串。

# 示例：日期格式调整
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '\\1,${3}2';
$result = preg_replace($pattern, $replacement, $string);
var_dump($result);
// string(11) "April,20032"


# 示例：去除空白字符
$str = 'foo   o';
$str = preg_replace('/\s\s+/', ' ', $str);
var_dump($str);
// string(5) "foo o"



