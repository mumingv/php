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
 * 字符串 
 */
echo "\n\n---Begin of String---\n";

$str = "Hello World!";
echo($str.PHP_EOL);

$str = 'Hello World!';
echo($str.PHP_EOL);

$name = 'Jay';
echo('My name is $name!\n');
echo("My name is $name!\n");

$user = array(
    "name" => "Jay",
    "gender" => "male",
);
echo "My name is {$user['name']}, gender is {$user['gender']}.\n";
echo "My name is ".$user['name'].", gender is ".$user['gender'].".\n";

$str = "Hello World!";
$length = strlen($str);
for ($i = 0; $i < $length; $i++) {
    echo "{$str[$i]}\n";
}

echo "\n\n---End of String---\n";


/**
 * 数组 
 */
echo "\n\n---Begin of Array---\n";

$arr = ['Apple', 'Oragnge'];
print_r($arr);

echo "\n\n---End of Array---\n";


/**
 * 分支
 */
$i = 3;
switch ($i) {
    case 0:
        echo "i equals 0\n";
        break;
    case 1:
        echo "i equals 1\n";
        break;
    case 2:
        echo "i equals 2\n";
        break;
    default:
        echo "i is not equal to 0, 1 or 2\n";
}


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

// 循环内部控制


/**
 * 一些关键字
 */

// include
// 功能：包含并运行指定文件
// 示例：include '../inc/env.inc.php';


