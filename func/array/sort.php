<?php
/***********************************************************
 *     FileName: sort.php
 *         Desc: 对数组排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 21:04:06
 *      History:
 ***********************************************************/

# 语法：bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )
# 参数sort_flags的取值：SORT_REGULAR, SORT_NUMERIC, SORT_STRING, SORT_LOCALE_STRING, SORT_NATURAL, SORT_FLAG_CASE 

# 示例：
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/*
fruits[0] = apple
fruits[1] = banana
fruits[2] = lemon
fruits[3] = orange
 */

# 示例：自然排序且不区分大小写
$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/*
fruits[0] = Orange1
fruits[1] = orange2
fruits[2] = Orange3
fruits[3] = orange20
 */

