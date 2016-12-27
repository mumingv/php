<?php
/***********************************************************
 *     FileName: vsprintf.php
 *         Desc: 输出格式化字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-27 16:36:34
 *      History:
 ***********************************************************/

# 语法：string vsprintf ( string $format , array $args )

# 说明：vsprintf和sprintf的区别在于，参数是个数组。

# 示例
print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));  // 1988-08-01
echo "\n";

# 示例
$arr = array('1988', '8', '1');
print vsprintf("%04s-%02s-%02s", $arr);  // 1988-08-01
echo "\n";


