<?php
/***********************************************************
 *     FileName: page022_polymorphism.php
 *         Desc: 多态
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 16:54:05
 *      History:
 ***********************************************************/

// 接口:
// 1. 必须使用interface关键字；
// 2. 函数只有声明，没有函数体；
interface employee {
    public function working();
}

// 3. 使用接口时，使用inplements关键字；
class teacher implements employee {
    public function working() {
        echo "Teaching.\n";
    }
}

class coder implements employee {
    public function working() {
        echo "Coding.\n";
    }
}

function doprint(employee $obj) {
    $obj->working();
}

doprint(new teacher());
doprint(new coder());

