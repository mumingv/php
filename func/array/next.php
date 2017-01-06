<?php
/***********************************************************
 *     FileName: next.php
 *         Desc: 将数组中的内部指针向前移动一位
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 17:56:42
 *      History:
 ***********************************************************/

# 语法：mixed next ( array &$array )

# 示例：
$transport = array('foot', 'bike', 'car', 'plane');
echo current($transport)."\n";  // foot
echo next($transport)."\n";     // bike
echo next($transport)."\n";     // car
echo prev($transport)."\n";     // bike
echo end($transport)."\n";      // plane


