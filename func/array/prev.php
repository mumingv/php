<?php
/***********************************************************
 *     FileName: prev.php
 *         Desc: 将数组的内部指针倒回一位
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 20:36:15
 *      History:
 ***********************************************************/

# 语法：mixed prev ( array &$array )

# 示例：参考 array_current.php
$transport = array('foot', 'bike', 'car', 'plane');
echo current($transport)."\n";  // foot
echo next($transport)."\n";     // bike
echo next($transport)."\n";     // car
echo prev($transport)."\n";     // bike
echo end($transport)."\n";      // plane


