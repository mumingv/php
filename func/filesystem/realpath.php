<?php
/***********************************************************
 *     FileName: filesystem_realpath.php
 *         Desc: 返回规范化的绝对路径名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 15:51:32
 *      History:
 ***********************************************************/

# 语法：string realpath ( string $path )
# 说明：该函数去除文件路径中的 /./ 和 /../

# 示例
echo realpath("/home/users/yinjie05/git/php/function/filesystem/../../../php/function/filesystem/filesystem_realpath.php") . PHP_EOL;
# 输出：/home/users/yinjie05/git/php/function/filesystem/filesystem_realpath.php

echo realpath("/home/users/yinjie05/git/php/function/filesystem/../../../php/function/") . PHP_EOL;
# 输出：/home/users/yinjie05/git/php/function

