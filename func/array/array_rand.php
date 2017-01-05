<?php
/***********************************************************
 *     FileName: array_rand.php
 *         Desc: 从数组中随机取出一个或多个单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 13:58:06
 *      History:
 ***********************************************************/

# 语法：mixed array_rand ( array $input [, int $num_req = 1 ] )

# 示例：随机获取一个元素的键名
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_key = array_rand($input);
print_r($rand_key);  // 4
echo "\n";


# 示例：随机获取两个元素的键名
$rand_keys = array_rand($input, 2);
print_r($rand_keys);
/*
Array
(
    [0] => 0
    [1] => 2
)
*/

