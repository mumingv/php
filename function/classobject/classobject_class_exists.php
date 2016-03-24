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
# 说明：$autoload默认值为true，表示当类不存在时，会自动调用__autoload进行加载

# 示例：基本用法
if (class_exists("MyClassName")) {
    $object = new MyClassName();
    echo "MyClassName exists" . PHP_EOL;
} else {
    echo "MyClassName not exists" . PHP_EOL; //MyClassName not exists
}

function __autoload($className) {
    include_once("__autoload/" . $className . ".php");
}
# 示例：不调用__autoload进行加载
if (class_exists("myClass", false)) {
    $object = new MyClass();
} else {
    echo "myClass not exists" . PHP_EOL; //myClass not exists
}

# 示例：默认情况下，myClass类不存在时会自动调用__autoload进行加载
if (class_exists("myClass")) {
    $object2 = new MyClass(); //myClass init successfuly!
} else {
    echo "myClass not exists" . PHP_EOL;
}

