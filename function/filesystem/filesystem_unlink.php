<?php
/* =============================================================================
#     FileName: filesystem_unlink.php
#         Desc: 删除文件
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-23 11:53:27
#      History:
============================================================================= */

# 语法：bool unlink ( string $filename [, resource $context ] )

/**
 * 示例：覆盖方式写
 */
$file = "test.txt";
$data = "filesystem_file_put_contents overwrite\n";
file_put_contents($file, $data);
$ret = unlink($file);
echo "1) unlink return value is: ";
var_dump($ret);  // bool(true)

$ret = unlink($file);  // unlink一个不存在的文件，返回false
echo "2) unlink return value is: ";
var_dump($ret);  // bool(false)

