<?php
/***********************************************************
 *     FileName: index.php
 *         Desc: spl_autoload_register函数示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 20:16:13
 *      History:
 ***********************************************************/

// 自定义一个自动加载函数，不使用系统默认的 __autoload 函数
function my_autoload($classname) {
    $filename = "./". $classname .".php";
    echo $filename . PHP_EOL; //打印：./myClass.php
    include_once($filename);
}
// 将my_autoload函数注册到SPL的__autoload函数队列尾部
//spl_autoload_register(my_autoload); //不加引号也是可以的
spl_autoload_register("my_autoload");

// 这里myClass未包含，会自动调用__autoload("myClass")函数，将对应的类定义加载进来
$obj = new myClass();

