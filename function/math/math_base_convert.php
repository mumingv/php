<?php
/***********************************************************
 *     FileName: math_base_convert.php
 *         Desc: 在[2,36]进制之间转换数字
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 19:37:58
 *      History:
 ***********************************************************/

# 语法：string base_convert ( string $number , int $frombase , int $tobase )

# 示例：16进制转成2进制
$hexadecimal = 'A';
echo base_convert($hexadecimal, 16, 2) . PHP_EOL; //1010

# 示例：16进制MD5转换成32进制
$hexadecimal = '20';
echo base_convert($hexadecimal, 16, 32) . PHP_EOL; //10

$str = 'apple';
$md5_str =  md5($str); //1f3870be274f6c49b3e31a0c6728957f
echo base_convert($md5_str, 16, 32) . PHP_EOL; //v71obs9qfdg00000000000000
echo base_convert("1f", 16, 32) . PHP_EOL; //v71obs9qfdg00000000000000

