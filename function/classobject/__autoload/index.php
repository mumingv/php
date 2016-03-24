<?php
/***********************************************************
 *     FileName: index.php
 *         Desc: 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 20:16:13
 *      History:
 ***********************************************************/

function __autoload($classname) {
    $filename = "./". $classname .".php";
    echo $filename . PHP_EOL; //打印：./myClass.php
    include_once($filename);
}

// 这里myClass未包含，会自动调用__autoload("myClass")函数，将对应的类定义加载进来
$obj = new myClass();

