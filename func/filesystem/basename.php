<?php
/***********************************************************
 *     FileName: filesystem_basename.php
 *         Desc: 返回路径中的文件名部分
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-23 10:34:32
 *      History:
 ***********************************************************/

# 语法：string basename ( string $path [, string $suffix ] )
# 注意：返回的目录路径末尾没有"/"

echo "1) " . __FILE__ . PHP_EOL;  // /home/users/yinjie05/git/php/function/filesystem_basename.php
echo "2) " . basename(__FILE__) . PHP_EOL;  // filesystem_basename.php
echo "3) " . basename("/home/users/yinjie05/git/php/function/filesystem_basename.php") . PHP_EOL;  // filesystem_basename.php
echo "4) " . basename("/home/users/yinjie05/git/php/function/") . PHP_EOL;  // function
echo "5) " . basename("/") . PHP_EOL;  // <NULL>
echo "6) " . basename("filename") . PHP_EOL;  // filename

