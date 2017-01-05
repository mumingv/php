<?php
/***********************************************************
 *     FileName: get_defined_constants.php
 *         Desc: 返回所有常量的关联数组，键是常量名，值是常量值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 22:56:51
 *      History:
 ***********************************************************/

# 语法：array get_defined_constants ([ bool $categorize = false ] )

# 示例
define("MY_CONSTANT", 1);
print_r(get_defined_constants(true));
/*
Array
(
    [Core] => Array
        (
            [E_ERROR] => 1
            [E_RECOVERABLE_ERROR] => 4096
            [E_WARNING] => 2
            [E_PARSE] => 4
            ...
        )
    [user] => Array
        (
            [MY_CONSTANT] => 1
        )
)
*/


