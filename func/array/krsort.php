<?php
/***********************************************************
 *     FileName: krsort.php
 *         Desc: 对数组按照键名逆向排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 17:20:03
 *      History:
 ***********************************************************/

# 语法：bool krsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )

# 示例：
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/*
d = lemon
c = apple
b = banana
a = orange
*/


