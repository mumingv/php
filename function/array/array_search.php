<?php
/***********************************************************
 *     FileName: array_search.php
 *         Desc: 在数组中搜索给定的值，如果成功则返回相应的键名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-06-20 21:23:27
 *      History:
 ***********************************************************/

# 语法：mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )

# 示例：

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
echo($key."\n");
$key = array_search('red', $array);   // $key = 1;
echo($key."\n");


# 示例：需要某个value的下一个key对应的value
$array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
echo(json_encode($array)."\n");  // [0,1,2,3,4,5,6,7,8,9]
$key = array_search(0, $array);
echo($key."\n");  // 0
$key = array_search(3, $array);
echo($key."\n");  // 3
echo($array[$key+1]."\n");  // 4

