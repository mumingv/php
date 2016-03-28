<?php
/***********************************************************
 *     FileName: string_md5.php
 *         Desc: 计算字符串的 MD5 散列值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 18:21:34
 *      History:
 ***********************************************************/

# 语法：string md5 ( string $str [, bool $raw_output = false ] )
# 说明：返回值是一个32个十六进制数字形式的字符串

# 示例

// 非空字符串
$str = 'apple';
echo md5($str) . PHP_EOL; //1f3870be274f6c49b3e31a0c6728957f

// 空字符串
echo md5("") . PHP_EOL; //d41d8cd98f00b204e9800998ecf8427e

// 第二个参数为true, 打印结果中16个字符对应的ASCII码
$bin = md5($str, true);  
for ($i = 0; $i < strlen($bin); $i++){  
    echo ord($bin[$i]) . ','; //31,56,112,190,39,79,108,73,179,227,26,12,103,40,149,127,
}
echo PHP_EOL;

