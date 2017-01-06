<?php
/***********************************************************
 *     FileName: asort.php
 *         Desc: 对数组进行排序并保持索引关系
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 16:04:42
 *      History:
 ***********************************************************/

# 语法：bool asort ( array &$array [, int $sort_flags = SORT_REGULAR ] )

# 示例：数组排序
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/*
c = apple
b = banana
d = lemon
a = orange
*/


