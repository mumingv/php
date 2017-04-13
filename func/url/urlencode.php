<?php
/***********************************************************
 *     FileName: urlencode.php
 *         Desc: 编码 URL 字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-14 11:58:24
 *      History:
 ***********************************************************/

# 语法：string urlencode ( string $str )

# 说明：返回字符串，此字符串中除了 -_. 之外的所有非字母数字字符都将被替换成百分号（%）后跟两位十六进制数，空格则编码为加号（+）。

# 示例：字母、数字和 -_. 这三个字符不会编码
$userinput = 'abc-def_ghi.123';
echo '<a href="mycgi?foo=', urlencode($userinput), '">', "\n";  // <a href="mycgi?foo=abc-def_ghi.123">

# 示例：其他会编码的英文字符，如：空格、#、!等等
$userinput = 'abc def#123!';
echo '<a href="mycgi?foo=', urlencode($userinput), '">', "\n";  // <a href="mycgi?foo=abc+def%23123%21">

# 示例：中文字符编码
$userinput = '大王派我来巡山！';
echo '<a href="mycgi?foo=', urlencode($userinput), '">', "\n";
echo '<a href="mycgi?foo=', urlencode(urlencode($userinput)), '">', "\n";

# 示例：带空格的query
$userinput = 'iphone7 plus发布新闻';
echo urlencode($userinput), "\n";

