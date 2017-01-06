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

# 示例：数组排序(asort)
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


# 示例：数组排序(sort)
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/*
0 = apple
1 = banana
2 = lemon
3 = orange
*/


# 示例：数组排序(ksort)
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/*
a = orange
b = banana
c = apple
d = lemon
*/


