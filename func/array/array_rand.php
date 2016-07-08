<?php
/***********************************************************
 *     FileName: array_rand.php
 *         Desc: 从数组中随机取出一个或多个单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-06-29 16:36:38
 *      History:
 ***********************************************************/

# 语法：number array_sum ( array $array )

# 示例：
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

$rand_key = array_rand($input);
print_r($rand_key);

