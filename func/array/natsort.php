<?php
/***********************************************************
 *     FileName: natsort.php
 *         Desc: 用“自然排序”算法对数组排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 17:51:44
 *      History:
 ***********************************************************/

# 语法：bool natsort ( array &$array )

# 示例：“普通排序”和“自然排序”的对比
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n";
print_r($array1);

natsort($array2);
echo "\nNatural order sorting\n";
print_r($array2);

/*
Standard sorting
Array
(
    [3] => img1.png
    [1] => img10.png
    [0] => img12.png
    [2] => img2.png
)

Natural order sorting
Array
(
    [3] => img1.png
    [2] => img2.png
    [1] => img10.png
    [0] => img12.png
)
*/


