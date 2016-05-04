<?php
/***********************************************************
 *     FileName: array_sum.php
 *         Desc: 计算数组中所有值的和
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 15:18:05
 *      History:
 ***********************************************************/

# 语法：number array_sum ( array $array )

# 示例：
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n"; //sum(a) = 20

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n"; //sum(b) = 6.9

