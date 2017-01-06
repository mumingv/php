<?php
/***********************************************************
 *     FileName: usort.php
 *         Desc: 使用用户自定义的比较函数对数组中的值进行排序 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 21:14:49
 *      History:
 ***********************************************************/

# 语法：bool usort ( array &$array , callable $cmp_function )

# 示例：
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
/*
0: 1
1: 2
2: 3
3: 5
4: 6
*/

