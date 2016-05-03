<?php
/***********************************************************
 *     FileName: test_array.php
 *         Desc: 数组的打印
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 10:43:09
 *      History:
 ***********************************************************/

$student = array(
    'name' => 'Tom',
    'gender' => 'male',
);

//echo($student);
//print($student);
print_r($student);
var_dump($student);
var_export($student);

