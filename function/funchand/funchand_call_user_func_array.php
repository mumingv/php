<?php
/***********************************************************
 *     FileName: funchand_call_user_func_array.php
 *         Desc: 调用回调函数，并把一个数组参数作为回调函数的参数
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 19:32:12
 *      History:
 ***********************************************************/

# 语法：mixed call_user_func_array ( callable $callback , array $param_arr )
# 说明：参数数组$param_arr需要是索引数组

# 示例: 调用全局函数和类成员函数
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}

// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two")); //foobar got one and two

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four")); //foo::bar got three and four


# 示例：
function func1($id) {
    echo __FUNCTION__, " process id is: ", $id;
}
call_user_func_array("func1", array(1, 2)); //func1 process id is: 1

