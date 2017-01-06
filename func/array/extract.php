<?php
/***********************************************************
 *     FileName: extract.php
 *         Desc: 从数组中将变量导入到当前的符号表
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 16:49:12
 *      History:
 ***********************************************************/

# 语法：int extract ( array &$var_array [, int $extract_type = EXTR_OVERWRITE [, string $prefix = NULL ]] )

# 示例：从数组中导入变量
$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");
echo "$color, $size, $shape, $wddx_size\n";
/*
blue, large, sphere, medium
*/


