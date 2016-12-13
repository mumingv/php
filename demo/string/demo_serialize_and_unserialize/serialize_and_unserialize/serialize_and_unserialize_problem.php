<?php
/***********************************************************
 *     FileName: serialize_and_unserialize_problem.php
 *         Desc: 数组字段的字符串中包含有冒号、引号等字符，实测没有问题 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-13 22:48:58
 *      History:
 ***********************************************************/

$arr = array('a' => 'Apple:1' ,'b' => 'Banana"2' , 'c' => 'Coconut\'3');  
  
//序列化数组  
$s = serialize($arr);
echo $s.PHP_EOL;  // 输出结果：a:3:{s:1:"a";s:5:"Apple";s:1:"b";s:6:"banana";s:1:"c";s:7:"Coconut";}  
  
//反序列化  
$o = unserialize($s);  
print_r($o);  
