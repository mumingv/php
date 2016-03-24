<?php
/***********************************************************
 *     FileName: test.php
 *         Desc: include语句示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 14:22:28
 *      History:
 ***********************************************************/

# 说明：如果 include 出现于调用文件中的一个函数里，则被调用的文件中所包含的所有代码将表现得如同它们是在该函数内部定义的一样。所以它将遵循该函数的变量范围。

function foo() {
    // 将局部变量$color申明全局变量，使其在函数外部使用；
    // 该申明必须写在函数内部，写在函数外部是无效的；
    global $color;
    include "vars.php";  //vars.php中的变量作用域在本函数
    echo "A $color $fruit\n";  //打印：A green apple
}

foo();
echo "A $color $fruit\n";  //打印：A green

