<?php
/***********************************************************
 *     FileName: strip_tags.php
 *         Desc: 从字符串中去除 HTML 和 PHP 标记
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-08 23:51:31
 *      History:
 ***********************************************************/

# string strip_tags ( string $str [, string $allowable_tags ] )

# 示例：去除所有HTML标记
$text = 'This is <b>bold</b> and this is <i>italic</i>. What about this <a href="http://www.php.net/">link</a>?';
echo strip_tags($text).PHP_EOL;

# 示例：去除部分HTML标记
$text = 'This is <b>bold</b> and this is <i>italic</i>. What about this <a href="http://www.php.net/">link</a>?';
echo strip_tags($text, '<b><i>').PHP_EOL;


