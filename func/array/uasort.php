<?php
/***********************************************************
 *     FileName: uasort.php
 *         Desc: 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 21:06:07
 *      History:
 ***********************************************************/

# 语法：bool uasort ( array &$array , callable $cmp_function )

# 示例：
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
uasort($array, 'cmp');
print_r($array);
/*
Array
(
    [d] => -9
    [h] => -4
    [c] => -1
    [e] => 2
    [g] => 3
    [a] => 4
    [f] => 5
    [b] => 8
)
*/


