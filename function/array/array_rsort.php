<?php
/***********************************************************
 *     FileName: array_rsort.php
 *         Desc: 对数组逆向排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-16 13:33:41
 *      History:
 ***********************************************************/

# 语法：bool rsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )
# 参数sort_flags的取值：SORT_REGULAR, SORT_NUMERIC, SORT_STRING, SORT_LOCALE_STRING, SORT_NATURAL, SORT_FLAG_CASE 

# 示例：
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/*
fruits[0] = orange
fruits[1] = lemon
fruits[2] = banana
fruits[3] = apple
 */

# 示例：自然排序且不区分大小写
$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
rsort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/*
fruits[0] = orange20
fruits[1] = Orange3
fruits[2] = orange2
fruits[3] = Orange1
 */

