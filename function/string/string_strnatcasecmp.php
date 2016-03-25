<?php
/***********************************************************
 *     FileName: string_strnatcasecmp.php
 *         Desc: 使用自然排序算法比较字符串(不区分大小写)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 15:13:15
 *      History:
 ***********************************************************/

# 语法：int strnatcasecmp ( string $str1 , string $str2 )

# 示例：标准字符串比较函数与自然排序算法字符串比较函数的比较
$arr1 = $arr2 = array("img12.png", "img10.png", "IMG2.png", "img1.png");
echo "strnatcmp\n";
usort($arr2, "strnatcmp");
var_export($arr2);
/*
array (
  0 => 'IMG2.png',
  1 => 'img1.png',
  2 => 'img10.png',
  3 => 'img12.png',
)
*/

echo "strnatcasecmp\n";
usort($arr2, "strnatcasecmp");
var_export($arr2);
/*
array (
  0 => 'img1.png',
  1 => 'IMG2.png',
  2 => 'img10.png',
  3 => 'img12.png',
)
*/

