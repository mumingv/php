<?php
/***********************************************************
 *     FileName: page020_polymorphism.php
 *         Desc: 多态
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 15:49:16
 *      History:
 ***********************************************************/

class employee {
    protected function working() {
        echo "Can't run this function, need overload.\n";
    }
}

class teacher extends employee {
    public function working() {
        echo "Teaching.\n";
    }
}

class coder extends employee {
    public function working() {
        echo "Coding.\n";
    }
}

function doprint($obj) {
    if (get_class($obj) == 'employee') {
        echo "Error\n";
    } else {
        $obj->working();
    }
}

doprint(new teacher()); //Teaching.
doprint(new coder()); //Coding.
doprint(new employee()); //Error

