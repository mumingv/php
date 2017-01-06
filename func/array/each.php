<?php
/***********************************************************
 *     FileName: each.php
 *         Desc: 返回数组中当前的键／值对并将数组指针向前移动一步
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 16:36:26
 *      History:
 ***********************************************************/

# 语法：mixed each ( array &$array )

# 示例：
$transport = array('foot', 'bike', 'car', 'plane');
$return = each($transport);
print_r($return);
/*
Array
(
    [1] => foot
    [value] => foot
    [0] => 0
    [key] => 0
)
 */

$return = each($transport);
print_r($return);
/*
Array
(
    [1] => bike
    [value] => bike
    [0] => 1
    [key] => 1
)
 */


# 示例：遍历数组
$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}
/*
a => apple
b => banana
c => cranberry
*/





