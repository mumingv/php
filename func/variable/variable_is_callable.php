<?php
/***********************************************************
 *     FileName: variable_is_callable.php
 *         Desc: 检测参数是否为合法的可调用函数名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 19:34:46
 *      History:
 ***********************************************************/

# 语法：bool is_callable ( callable $name [, bool $syntax_only = false [, string &$callable_name ]] )

# 示例
function someFunction() {
}
$functionVariable = 'someFunction';
var_dump(is_callable($functionVariable, false, $callable_name));  // bool(true)
echo $callable_name, "\n";  // someFunction

//  Array containing a method
class someClass {
    function someMethod() {
    }
}
$anObject = new someClass();
$methodVariable = array($anObject, 'someMethod');
var_dump(is_callable($methodVariable, true, $callable_name));  //  bool(true)
echo $callable_name, "\n";  //  someClass::someMethod
var_dump(is_callable($methodVariable, false, $callable_name));  //  bool(true)
echo $callable_name, "\n";  //  someClass::someMethod

