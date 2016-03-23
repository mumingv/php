<?php
/***********************************************************
 *     FileName: filesystem_is_dir.php
 *         Desc: 判断是否是一个目录
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-23 11:13:38
 *      History:
 ***********************************************************/

# 语法：bool is_dir ( string $filename )
# 注意：返回的目录路径末尾没有"/"
# 注意：bool类型需要使用var_dump打印, 才能显示类型和bool值

echo "1) " . __FILE__ . PHP_EOL;  // /home/users/yinjie05/git/php/function/filesystem/filesystem_is_dir.php
echo "2) ";
var_dump(is_dir(__FILE__));  // bool(false)
echo "3) ";
var_dump(is_dir("/home/users/yinjie05/git/php/function/filesystem_is_dir.php"));  // bool(false)
echo "4) ";
var_dump(is_dir("/home/users/yinjie05/git/php/function/"));  // bool(true)
echo "5) ";
var_dump(is_dir("/"));  // bool(true)
echo "6) ";
var_dump(is_dir("filename"));  // bool(false)
echo "7) ";
var_dump(is_dir("."));  // bool(true)

