<?php
/***********************************************************
 *     FileName: serialize_and_unserialize_problem.php
 *         Desc: base64编码会增加字符串的长度，在编码前先进行压缩
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-13 22:48:58
 *      History:
 ***********************************************************/

$arr = array('a' => 'Apple:1' ,'b' => 'Banana"2' , 'c' => 'Coconut\'3');  
  
//序列化数组  
$s = base64_encode(gzcompress(serialize($arr)));
echo $s.PHP_EOL;  // 输出结果：a:3:{s:1:"a";s:5:"Apple";s:1:"b";s:6:"banana";s:1:"c";s:7:"Coconut";}  

//反序列化  
$o = unserialize(gzuncompress(base64_decode($s)));  
print_r($o);  
