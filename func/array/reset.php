<?php
/***********************************************************
 *     FileName: reset.php
 *         Desc: 将数组的内部指针指向第一个单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 20:50:19
 *      History:
 ***********************************************************/

# 语法：mixed reset ( array &$array )

# 示例：
$array = array('step one', 'step two', 'step three', 'step four');
next($array);
next($array);
reset($array);
echo current($array)."\n";
/*
step one
*/


