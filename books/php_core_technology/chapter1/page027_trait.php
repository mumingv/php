<?php
/***********************************************************
 *     FileName: page027_trait.php
 *         Desc: traits
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 17:23:20
 *      History:
 ***********************************************************/

// Traits:
// 1. 必须使用trait关键字；
// 2. 函数是一个完整的实现，这一点和接口不同；
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

// 3. 使用trait时，使用use关键字；
class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo "!\n";
    }
}

$obj = new MyHelloWorld();
$obj->sayHello();
$obj->sayWorld();
$obj->sayExclamationMark();
// 输出：Hello World!

//$obj_err = new Hello(); //PHP Fatal error:  Cannot instantiate trait Hello

