<?php
/***********************************************************
 *     FileName: arsort.php
 *         Desc: 对数组进行逆向排序并保持索引关系
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 15:57:12
 *      History:
 ***********************************************************/

# 语法：bool arsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )

# 示例：数组逆向排序
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/*
a = orange
d = lemon
b = banana
c = apple
*/





