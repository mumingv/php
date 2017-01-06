<?php
/***********************************************************
 *     FileName: key.php
 *         Desc: 从关联数组中取得键名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 17:07:58
 *      History:
 ***********************************************************/

# 语法：mixed key ( array &$array )
# 说明：
# 1. key和current都不会移动数组指针；
# 2. key返回当前数组指针的key，current返回当前数组指针的value；

# 示例：
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple',
);
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array)."\n";
    }
    next($array);
}
/*
fruit1
fruit4
fruit5
*/


