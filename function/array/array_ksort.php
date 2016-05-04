<?php
/***********************************************************
 *     FileName: array_ksort.php
 *         Desc: 对数组按照键名排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 10:37:32
 *      History:
 ***********************************************************/

# 语法：bool ksort ( array &$array [, int $sort_flags = SORT_REGULAR ] )
# 参数sort_flags的取值：SORT_REGULAR, SORT_NUMERIC, SORT_STRING, SORT_LOCALE_STRING, SORT_NATURAL, SORT_FLAG_CASE 

# 示例：
$fruits = array("d" => "lemon", "c" => "orange", "b" => "banana", "a" => "apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/*
fruits[a] = apple
fruits[b] = banana
fruits[c] = orange
fruits[d] = lemon
 */

