<?php
/***********************************************************
 *     FileName: str_ireplace.php
 *         Desc: 子字符串替换(忽略大小写)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-22 10:31:44
 *      History:
 ***********************************************************/

# 语法：mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
# 返回值：替换后的字符串或者数组


# 示例

// 赋值: <body text='black'>
$bodytag = str_ireplace("%Body%", "black", "<body text='%body%'>");
echo $bodytag . PHP_EOL; //<body text='black'>

// 赋值: Hll Wrld f PHP
$vowels = array("A", "E", "I", "O", "U");
$onlyconsonants = str_ireplace($vowels, "", "Hello World of PHP");
echo $onlyconsonants . PHP_EOL; //Hll Wrld f PHP

// 赋值: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_ireplace($healthy, $yummy, $phrase);
echo $newphrase . PHP_EOL; //You should eat pizza, beer, and ice cream every day.

// 赋值: 2
$str = str_ireplace("LL", "", "good golly miss molly!", $count);
echo $count . PHP_EOL; //2

