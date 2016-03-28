<?php
/***********************************************************
 *     FileName: string_md5_file.php
 *         Desc: 计算指定文件的 MD5 散列值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 18:27:36
 *      History:
 ***********************************************************/

# 语法：string md5_file ( string $filename [, bool $raw_output = false ] )
# 说明：返回值是一个32个十六进制数字形式的字符串

# 示例

// 存在的文件, 返回md5字符串
$file = "../../data/data.csv";
echo md5_file($file) . PHP_EOL; //f95c6687c9f1d598355965bced52144d

// 不存在的文件，返回false
$file2 = "../../data/not_exist.csv";
var_export(md5_file($file2)); //false
echo PHP_EOL;

