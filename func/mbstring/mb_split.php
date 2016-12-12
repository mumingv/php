<?php
/***********************************************************
 *     FileName: mb_split.php
 *         Desc: 使用正则表达式分割多字节字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-12 14:48:50
 *      History:
 ***********************************************************/

# 语法：array mb_split ( string $pattern , string $string [, int $limit = -1 ] )

/**
 * 注意：正则表达式的写法，不需要用'/'包括起来 
 */
# Works. No slashes around the /pattern/
print_r( mb_split("\s", "hello world") );

# Doesn't work:
print_r( mb_split("/\s/", "hello world") );


/**
 * 将多字节字符串转换成由单个字符组成的数组 
 */
function mbStringToArray($string) { 
    $strlen = mb_strlen($string); 
    while ($strlen) { 
        $array[] = mb_substr($string,0,1,"UTF-8"); 
        $string = mb_substr($string,1,$strlen,"UTF-8"); 
        $strlen = mb_strlen($string); 
    } 
    return $array; 
}  
print_r(mbStringToArray("我爱北京天安门，哈哈！"));


/**
 * 将多字节字符串根据单个字符进行分割 
 */
mb_regex_encoding('UTF-8');
mb_internal_encoding("UTF-8"); 
$v = mb_split('、',"日、に、本、ほん、語、ご");
print_r($v);


/**
 * 将多字节字符串根据多个标点符号进行分割 
 */
mb_regex_encoding('UTF-8');
mb_internal_encoding("UTF-8"); 
$v = mb_split('，|。|？',"我，是一个好人。是吧？");
print_r($v);

