<?php
/***********************************************************
 *     FileName: array_current.php
 *         Desc: 返回数组中的当前单元
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-18 14:08:33
 *      History:
 ***********************************************************/

# 语法：mixed current ( array &$array )
# 说明：
# 1.该函数返回FALSE或者是等同于FALSE的数值，比较需要使用全等号"==="
# 2.每个数组中都有一个指向元素的指针，和该指针相关的函数有：
#   current / next / prev / end
#   reset
#   each

# 示例：
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport);
echo $mode . PHP_EOL; //foot

$mode = next($transport);
echo $mode . PHP_EOL; //bike

$mode = current($transport);
echo $mode . PHP_EOL; //bike

$mode = prev($transport);
echo $mode . PHP_EOL; //foot

$mode = end($transport);
echo $mode . PHP_EOL; //plane

$mode = current($transport);
echo $mode . PHP_EOL; //plane

$mode = reset($transport);
echo $mode . PHP_EOL; //foot

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }

