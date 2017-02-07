<?php
/***********************************************************
 *     FileName: strpos.php
 *         Desc: 查找字符串首次出现的位置
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 03:19:43
 *      History:
 ***********************************************************/

# 语法：mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
# 说明：返回 needle 在 haystack 中首次出现的数字位置
# 注意：如果没有找到会返回false，需要使用===进行判断，因为也可能返回正常值0

# 示例
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
// 注意这里使用的是 ===。简单的 == 不能像我们期待的那样工作，
// 因为 'a' 是第 0 位置上的（第一个）字符。
if ($pos == false) { //两个等号，只会判断值是否相等, 不会判断类型是否相同
    echo "The string '$findme' was not found in the string '$mystring'" . PHP_EOL;
    //输出：The string 'a' was not found in the string 'abc'
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
if ($pos === false) { //三个等号，不仅会判断值是否相等, 也会判断类型是否相同
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'"; // 单引号中的变量也会被扩展变量值
    echo " and exists at position $pos" . PHP_EOL;
    // 输出：The string 'a' was found in the string 'abc' and exists at position 0
}

