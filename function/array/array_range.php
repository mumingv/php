<?php
/***********************************************************
 *     FileName: array_range.php
 *         Desc: 建立一个包含指定范围单元的数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 10:49:34
 *      History:
 ***********************************************************/

# 语法：array range ( mixed $start , mixed $limit [, number $step = 1 ] )
# 注意：生成的数组中，是包含$limit的；

# 示例：
foreach (range(0, 10, 1) as $number) {
    echo $number . " ";  // 0 1 2 3 4 5 6 7 8 9 10 
}
echo PHP_EOL;

