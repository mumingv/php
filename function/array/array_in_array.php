<?php
/***********************************************************
 *     FileName: array_in_array.php
 *         Desc: 检查数组中是否存在某个值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-15 11:35:36
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

