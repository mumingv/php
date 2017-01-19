<?php
/***********************************************************
 *     FileName: parse_str.php
 *         Desc: 将字符串解析成多个变量
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-20 00:20:52
 *      History:
 ***********************************************************/

# 语法：void parse_str ( string $str [, array &$arr ] )

# 示例：
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first."\n";  // value
echo $arr[0]."\n"; // foo bar
echo $arr[1]."\n"; // baz

parse_str($str, $output);
echo $output['first']."\n";  // value
echo $output['arr'][0]."\n"; // foo bar
echo $output['arr'][1]."\n"; // baz

