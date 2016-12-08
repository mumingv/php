<?php
/***********************************************************
 *     FileName: wordwrap.php
 *         Desc: 打断字符串为指定数量的字串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-09 00:21:17
 *      History:
 ***********************************************************/

# string wordwrap ( string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = false ]]] )

# 示例：使用默认列宽和break字符
$string = "This is a long sentence that will be cut at seventy-five characters automatically. Don't worry, no words will be broken up.";
echo wordwrap($string).PHP_EOL;


# 示例：使用指定列宽和break字符
$string = "This is a long sentence that will be cut at sixty characters automatically. Don't worry, no words will be broken up.";
echo wordwrap($string, 60, '<br />').PHP_EOL;


