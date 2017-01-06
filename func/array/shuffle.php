<?php
/***********************************************************
 *     FileName: shuffle.php
 *         Desc: 将数组打乱
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 20:58:58
 *      History:
 ***********************************************************/

# 语法：bool shuffle ( array &$array )

# 示例：
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
/*
12 19 18 3 2 14 13 15 10 9 17 7 1 5 20 16 4 11 6 8 
*/


