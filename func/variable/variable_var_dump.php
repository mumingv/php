<?php
/***********************************************************
 *     FileName: variable_var_dump.php
 *         Desc: 打印变量的相关信息
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 11:55:31
 *      History:
 ***********************************************************/

# 语法：mixed var_export ( mixed $expression [, bool $return ] )
# var_dump会自动在末尾加一个换行符，而var_export不会

$a = array(1, 2, array ("a", "b", "c"));
var_dump($a);
echo PHP_EOL;
/*
输出：
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}
*/

$b = 3.1;
$v = var_dump($b);
echo $v; //float(3.1)

