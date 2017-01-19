<?php
/***********************************************************
 *     FileName: quotemeta.php
 *         Desc: 转义元字符集
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-20 00:40:44
 *      History:
 ***********************************************************/

# 语法：string quotemeta ( string $str )

# 示例：
$str = "Hello world. (can you hear me?)";
echo quotemeta($str);
/*
Hello world\. \(can you hear me\?\)
*/

