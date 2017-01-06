<?php
/***********************************************************
 *     FileName: in_array.php
 *         Desc: 检查数组中是否存在某个值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 16:57:47
 *      History:
 ***********************************************************/

# 语法：bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )

# 示例：
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix" . PHP_EOL; //Got Irix
}

// 字符串是区分大小写的
if (in_array("mac", $os)) {
    echo "Got mac";
} else {
    echo "Can't got mac" . PHP_EOL; //Can't got mac
}

// 数值型数据
if (in_array(1, array(0, 1))) {
    echo "1 is in array(0, 1)", PHP_EOL;
} else {
    echo "1 is not in array(0, 1)", PHP_EOL;
}

