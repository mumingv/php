<?php
/***********************************************************
 *     FileName: filesystem_file_exists.php
 *         Desc: 检查文件或目录是否存在
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 10:40:53
 *      History:
 ***********************************************************/

# 语法：bool file_exists ( string $filename )

# 示例
if (file_exists("filesystem_unlink.php")) {
    echo "filesystem_unlink.php exists" . PHP_EOL; //filesystem_unlink.php exists
} else {
    echo "filesystem_unlink.php does not exist" . PHP_EOL;
}

