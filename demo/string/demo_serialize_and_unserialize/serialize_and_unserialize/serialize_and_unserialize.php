<?php

$arr = array('a' => 'Apple' ,'b' => 'Banana' , 'c' => 'Coconut');  
  
//序列化数组  
$s = serialize($arr);
echo $s.PHP_EOL;  // 输出结果：a:3:{s:1:"a";s:5:"Apple";s:1:"b";s:6:"banana";s:1:"c";s:7:"Coconut";}  
  
//反序列化  
$o = unserialize($s);  
print_r($o);  
