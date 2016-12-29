<?php
/* =============================================================================
#     FileName: filesystem_file_put_contents.php
#         Desc: 将字符串写入文件
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-23 10:40:18
#      History:
============================================================================= */

# 语法：int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )
# 说明：
# 1. 该函数和依次调用 fopen()，fwrite() 以及 fclose() 功能一样; 
# 2. 如果$filename不存在，则会自动创建文件。

# 参数$flags可以由下面三种取值：
# 1. FILE_USE_INCLUDE_PATH  在include目录里搜索filename, 如果没有找到则在当前目录下创建
# 2. FILE_APPEND            追加数据而不是覆盖
# 3. LOCK_EX                在写入时获得一个独占锁

/**
 * 示例：覆盖方式写
 */
$file = "test.txt";
$data = "filesystem_file_put_contents overwrite\n";
file_put_contents($file, $data);

/**
 * 示例：追加方式写
 */
$data = "filesystem_file_put_contents append\n";
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

