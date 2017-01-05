<?php
/***********************************************************
 *     FileName: array_product.php
 *         Desc: 计算数组中所有值的乘积
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 13:42:20
 *      History:
 ***********************************************************/

# 语法：number array_product ( array $array )

# 示例：计算数组所有元素的乘积
$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
/*
product(a) = 384
*/

# 示例：对空数组计算乘积
$a = array();
echo "product(a) = " . array_product($a) . "\n";
/*
product(a) = 1
*/ 




