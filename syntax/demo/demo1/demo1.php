<?php
/***********************************************************
 *     FileName: demo1.php
 *         Desc: 使用[]包含两个数组[$arr1, $arr2]
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-06-01 20:07:15
 *      History:
 ***********************************************************/

# 示例

$arr1 = array(
    'zhangsan' => 21,
    'lisi' => 22,
);
$arr2 = array(
    'tom' => 31,
    'jerry' => 32,
);
$var1 = 40;

print_r([$arr1, $arr2, $var1]);


