<?php
/***********************************************************
 *     FileName: string_strspn.php
 *         Desc: 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-12 11:57:39
 *      History:
 ***********************************************************/

# 语法：int strspn ( string $subject , string $mask [, int $start [, int $length ]] )
# 说明：如果指定了$start/$length，则函数等同于strspn(substr($subject, $start, $length), $mask)

# 示例: 

$var = strspn("42 is the answer to the 128th question.", "1234567890");
echo $var, PHP_EOL; //2

// 从首字符开始计算
$var = strspn("r42 is the answer to the 128th question.", "1234567890");
echo $var, PHP_EOL; //0

$var = strspn("r424232r53259 is the answer to the 42 question.", "1234567890", 1);
echo $var, PHP_EOL; //6

