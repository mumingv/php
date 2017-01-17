<?php
/* =============================================================================
#     FileName: md5_file.php
#         Desc: 计算指定文件的 MD5 散列值
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-18 06:02:20
#      History:
============================================================================= */

# 语法：string md5_file ( string $filename [, bool $raw_output = false ] )

# 示例：删除字符串开头的空白字符
echo md5_file("echo.php")."\n";  // 32211c00eb56055e8bbe528ce31fc1b5 (32字符的十六进制数字)
echo md5_file("echo.php", true)."\n";  // 2!.............. (16位二进制)

