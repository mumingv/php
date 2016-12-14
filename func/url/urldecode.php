<?php
/***********************************************************
 *     FileName: urldecode.php
 *         Desc: 解码已编码的 URL 字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-14 14:29:29
 *      History:
 ***********************************************************/

# 语法：string urldecode ( string $str )

# 说明：解码给出的已编码字符串中的任何 %##。 加号（'+'）被解码成一个空格字符。

# 示例：字母、数字和 -_. 这三个字符不会编码
$userinput = 'abc-def_ghi.123';
$useroutput = urlencode($userinput);
echo urldecode($useroutput).PHP_EOL;  // abc-def_ghi.123

# 示例：其他会编码的英文字符，如：空格、#、!等等
$userinput = 'abc def#123!';
$useroutput = urlencode($userinput);
echo urldecode($useroutput).PHP_EOL;  // abc def#123!

# 示例：中文字符编码
$userinput = '大王派我来巡山！';
$useroutput = urlencode($userinput);
echo urldecode($useroutput).PHP_EOL;  // 大王派我来巡山！

