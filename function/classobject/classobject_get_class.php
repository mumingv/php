<?php
/***********************************************************
 *     FileName: classobject_get_class.php
 *         Desc: 返回对象的类名
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 15:59:44
 *      History:
 ***********************************************************/

# 语法：string get_class ([ object $obj ] )

# 示例：
class Foo {
    function foo()
    {
        // implements some logic
    }

    function name()
    {
        echo "My name is " , get_class($this) , "\n"; //My name is Foo
    }
}

// create an object
$bar = new Foo();

// external call
echo "Its name is " , get_class($bar) , "\n"; //Its name is Foo

// internal call
$bar->name();

