<?php
/***********************************************************
 *     FileName: misc_defined.php
 *         Desc: 检查某个名称的常量是否存在
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 22:13:24
 *      History:
 ***********************************************************/

# 语法：bool defined ( string $name )

# 相关函数：
# isset() 检查变量是否存在
# function_exists() 检查函数是否存在

# 示例
if (defined("TEST")) {
    echo "TEST is defined" . PHP_EOL;
} else {
    echo "TEST is not defined" . PHP_EOL; //TEST is not defined
}

if (defined("PATH_SEPARATOR")) {
    echo "PATH_SEPARATOR is defined" . PHP_EOL; //PATH_SEPARATOR is defined
} else {
    echo "PATH_SEPARATOR is not defined" . PHP_EOL;
}

