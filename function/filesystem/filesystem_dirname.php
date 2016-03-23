<?php
/***********************************************************
 *     FileName: filesystem_dirname.php
 *         Desc: 返回路径中的目录部分
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-23 10:20:00
 *      History:
 ***********************************************************/

# 语法：string dirname ( string $path )
# 注意：返回的目录路径末尾没有"/"

echo "1) " . __FILE__ . PHP_EOL;  // /home/users/yinjie05/git/php/function/filesystem_dirname.php
echo "2) " . dirname(__FILE__) . PHP_EOL;  // /home/users/yinjie05/git/php/function
echo "3) " . dirname("/home/users/yinjie05/git/php/function/filesystem_dirname.php") . PHP_EOL;  // /home/users/yinjie05/git/php/function
echo "4) " . dirname("/home/users/yinjie05/git/php/function/") . PHP_EOL;  // /home/users/yinjie05/git/php
echo "5) " . dirname("/") . PHP_EOL;  // /
echo "6) " . dirname("filename") . PHP_EOL;  // .

