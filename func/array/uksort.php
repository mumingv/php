<?php
/***********************************************************
 *     FileName: uksort.php
 *         Desc: 使用用户自定义的比较函数对数组中的键名进行排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 21:10:40
 *      History:
 ***********************************************************/

# 语法：bool uksort ( array &$array , callable $cmp_function )

# 示例：
function cmp($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}
$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
uksort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
/*
an apple: 3
a banana: 4
the Earth: 2
John: 1
*/

