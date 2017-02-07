<?php
/***********************************************************
 *     FileName: strpbrk.php
 *         Desc: 在字符串中查找一组字符的任何一个字符 (区分大小写)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 03:15:37
 *      History:
 ***********************************************************/

# 语法：string strpbrk ( string $haystack , string $char_list )

# 示例
$text = 'This is a Simple text.';
echo strpbrk($text, 'mi')."\n";
echo strpbrk($text, 'S')."\n";
/*
is is a Simple text.
Simple text.
*/

