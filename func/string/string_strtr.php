<?php
/***********************************************************
 *     FileName: string_strtr.php
 *         Desc: 转换指定字符
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-12 11:44:53
 *      History:
 ***********************************************************/

# 语法：tring strtr ( string $str , string $from , string $to )
# 说明：该函数是字符替换，不是字符串替换; 
# 语法：tring strtr ( string $str , array $replace_pairs )
# 说明：该函数是字符串替换，不是字符替换; 

# 示例: 字符替换
$result_str = strtr("Hello Jack!", "ck", "yy");
echo $result_str, PHP_EOL; //Hello Jayy!

// from 与 to 长度不相等，那么多余的字符部分将被忽略
$result_str = strtr("Hello Jack!", "ck", "y"); 
echo $result_str, PHP_EOL; //Hello Jayk!

$result_str = strtr("Hello Jack!", "Ho", "Yp"); 
echo $result_str, PHP_EOL; //Yellp Jack!

# 示例: 字符串替换
$trans = array("Ho" => "Yp", "ck" => "yy");
$result_str = strtr("Hello Jack!", $trans); 
echo $result_str, PHP_EOL; //Hello Jayy!

