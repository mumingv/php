<?php
/***********************************************************
 *     FileName: directory_readdir.php
 *         Desc: 从目录句柄中读取条目
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 20:37:07
 *      History: 示例未通过
 ***********************************************************/

# 语法：string readdir ([ resource $dir_handle ] )
# 说明：返回目录中下一个文件的文件名。文件名以在文件系统中的排序返回。

# 示例: 列出目录中的所有文件
if ($handle = opendir('.')) {
    echo "Directory handle: $handle\n";
    echo "Files:\n";

    /* 这是正确地遍历目录方法 */
    while (false !== ($file = readdir($handle))) {
        echo "$file\n";
    }
    /*
    .
    ..
    directory_CONSTANTS.php
    Directory
    directory_readdir.php
     */

    /* 这是错误地遍历目录的方法 */
    /*
    while ($file = readdir($handle)) {
        echo "$file\n";
    }
     */
    closedir($handle);
}

# 示例: 列出目录中的所有文件并去掉.和..
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "$file\n";
        }
    }
    closedir($handle);
}
/*
directory_CONSTANTS.php
Directory
directory_readdir.php
 */

