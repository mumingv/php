<?php
/***********************************************************
 *     FileName: array_array_combine.php
 *         Desc: 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 22:50:14
 *      History:
 ***********************************************************/

# 语法：array array_combine ( array $keys , array $values )

# 示例：
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
/*
Array
(
    [green] => avocado
    [red] => apple
    [yellow] => banana
)
 */

