<?php
/***********************************************************
 *     FileName: mb_strtolower.php
 *         Desc: 使字符串小写(所有字符都小写)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-12 14:49:22
 *      History:
 ***********************************************************/

# 语法：mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )

# 示例
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = mb_strtolower($str);
echo $str . PHP_EOL; //输出： mary had a little lamb and she loved it so

$str = "字符串小写";
$str = mb_strtolower($str);
echo $str . PHP_EOL; // 输出 字符串小写

$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str = mb_strtolower($str, 'UTF-8');
echo $str . PHP_EOL; // 输出 τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός

