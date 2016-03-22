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

/**
 * 根据二维数组中的key名称进行去重
 */
function array_unique_ex(&$arr, $key) 
{ 
    $tempArr = array(); 
    for ($i = 0; $i < count($arr); $i++) 
    { 
        if (!isset($tempArr[$arr[$i][$key]])) 
        { 
            $tempArr[$arr[$i][$key]] = $arr[$i]; 
        } 
    } 
    // 将数组中的$value取出来组成一个新的索引数组
    $arr=array_values($tempArr); 
} 
print_r($arr);
array_unique_ex($arr, 'name'); 
print_r($arr); 

