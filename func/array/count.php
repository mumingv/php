<?php
/***********************************************************
 *     FileName: count.php
 *         Desc: 计算数组中的单元数目或对象中的属性个数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 16:15:42
 *      History:
 ***********************************************************/

# 语法：int count ( mixed $var [, int $mode = COUNT_NORMAL ] )

# 示例：获取数组中的单元数目
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);
print_r($result);  // 3
echo "\n";
$result = count(null);
print_r($result);  // 0
echo "\n";
$result = count(false);
print_r($result);  // 1
echo "\n";


# 示例：获取数组中的单元数目(递归)
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));
echo count($food, COUNT_RECURSIVE);  // 8
echo "\n";
echo count($food);  // 2
echo "\n";


