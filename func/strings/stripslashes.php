<?php
/***********************************************************
 *     FileName: stripslashes.php
 *         Desc: 反引用一个引用字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-07 16:17:40
 *      History:
 ***********************************************************/

# 语法：string stripslashes ( string $str )

# 示例: 
$str = "Is your name O\'reilly?";
echo $str."\n";
echo stripslashes($str)."\n";
/*
Is your name O\'reilly?
Is your name O'reilly?
*/

