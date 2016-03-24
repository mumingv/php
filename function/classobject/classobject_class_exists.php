<?php
/***********************************************************
 *     FileName: classobject_class_exists.php
 *         Desc: 检查类是否已定义
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 21:37:28
 *      History:
 ***********************************************************/

# 语法：bool class_exists ( string $class_name [, bool $autoload = true ] )

# 示例：基本用法
if (class_exists("MyClass")) {
    $object = new MyClass();
    echo "MyClass exists" . PHP_EOL;
} else {
    echo "MyClass not exists" . PHP_EOL; //MyClass not exists
}

