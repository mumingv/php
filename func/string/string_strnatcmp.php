<?php
/***********************************************************
 *     FileName: string_strnatcmp.php
 *         Desc: 使用自然排序算法比较字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 15:06:44
 *      History:
 ***********************************************************/

# 语法：int strnatcmp ( string $str1 , string $str2 )
# 说明：strnatcmp = string natural cpmpare

# 示例：标准字符串比较函数与自然排序算法字符串比较函数的比较
$arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");
echo "Standard string comparison\n";
usort($arr1, "strcmp");
var_export($arr1);
/*
array (
  0 => 'img1.png',
  1 => 'img10.png',
  2 => 'img12.png',
  3 => 'img2.png',
)
*/

echo "\nNatural order string comparison\n";
usort($arr2, "strnatcmp");
var_export($arr2);
echo PHP_EOL;
/*
array (
  0 => 'img1.png',
  1 => 'img2.png',
  2 => 'img10.png',
  3 => 'img12.png',
)
*/


# 示例：比较两个字符串的大小
echo strnatcmp("img2", "img1") . PHP_EOL; //1
echo strnatcmp("5.4.41", "5.4.0") . PHP_EOL; //1

