<?php
/***********************************************************
 *     FileName: array_walk.php
 *         Desc: 使用用户自定义函数对数组中的每个元素做回调处理
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 13:59:49
 *      History:
 ***********************************************************/

# 语法：bool array_walk ( array &$array , callable $callback [, mixed $userdata = NULL ] )

# 示例：针对数组中的每个成员作用用户自定义函数
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}
function test_print($item2, $key)
{
    echo "$key. $item2\n";
}
echo "Before ...:\n";
array_walk($fruits, 'test_print');
array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";
array_walk($fruits, 'test_print');
/*
Before ...:
d. lemon
a. orange
b. banana
c. apple
... and after:
d. fruit: lemon
a. fruit: orange
b. fruit: banana
c. fruit: apple
*/


