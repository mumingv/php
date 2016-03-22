<?php
/* =============================================================================
#     FileName: syntax_basic.php
#         Desc: 基础语法
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-22 10:09:21
#      History:
============================================================================= */

/**
 * 变量
 */ 

// 变量定义示例
$var1 = "Hello world!";
echo($var1);
echo PHP_EOL;


/**
 * 循环
 */

// 数组遍历
$WORK_PATH = dirname(__FILE__);
require_once($WORK_PATH . "/../data/college_major.php");
$college_major = CollegeMajorData::$COLLEGE_MAJOR;
foreach ($college_major as $key => $value) {
    print_r("key is: " . $key);
    print_r(PHP_EOL);
    print_r("value is: ");
    print_r($value);
}


