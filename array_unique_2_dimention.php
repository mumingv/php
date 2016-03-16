<?php 
/**
 * 二维数组去重
 */
$arr = array( 
    array('id' => 1,'name' => 'aaa'), 
    array('id' => 2,'name' => 'bbb'), 
    array('id' => 3,'name' => 'ccc'), 
    array('id' => 4,'name' => 'ddd'), 
    array('id' => 5,'name' => 'ccc'), 
    array('id' => 6,'name' => 'aaa'), 
    array('id' => 7,'name' => 'bbb'), 
); 
function array_unique_ex(&$arr, $key) 
{ 
    $rAr = array(); 
    for ($i = 0; $i < count($arr); $i++) 
    { 
        if (!isset($rAr[$arr[$i][$key]])) 
        { 
            $rAr[$arr[$i][$key]]=$arr[$i]; 
        } 
    } 
    $arr=array_values($rAr); 
} 
array_unique_ex(&$arr,'name'); 
print_r($arr); 

