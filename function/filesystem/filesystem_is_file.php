<?php
/***********************************************************
 *     FileName: filesystem_is_file.php
 *         Desc: 判断是否是一个文件
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-23 11:32:44
 *      History:
 ***********************************************************/

# 语法：bool is_file ( string $filename )
# 注意：返回的目录路径末尾没有"/"
# 注意：bool类型需要使用var_dump打印, 才能显示类型和bool值

echo "1) " . __FILE__ . PHP_EOL;  // /home/users/yinjie05/git/php/function/filesystem/filesystem_is_file.php
echo "2) ";
var_dump(is_file(__FILE__));  // bool(true)
echo "3) ";
var_dump(is_file("/home/users/yinjie05/git/php/function/filesystem/filesystem_is_file.php"));  // bool(true)
echo "4) ";
var_dump(is_file("/home/users/yinjie05/git/php/function/"));  // bool(false)
echo "5) ";
var_dump(is_file("/"));  // bool(false)
echo "6) ";
var_dump(is_file("filename"));  // bool(false)
echo "7) ";
var_dump(is_file("."));  // bool(false)

