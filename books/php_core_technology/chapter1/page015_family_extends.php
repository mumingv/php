<?php
/***********************************************************
 *     FileName: page15_family_extends.php
 *         Desc: 继承
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 15:13:19
 *      History:
 ***********************************************************/

# 使用extents进行类的继承; 
# $this表示对象；parent表示父类；self表示当前类；

class person {
    public $name;
    public $gender;
    static $money = 10000;
    public function __construct() {
        echo "parent class person is called\n";
    }
    public function say() {
        echo $this->name, ' is ', $this->gender, "\n";
    }
}

class family extends person {
    public $name;
    public $gender;
    public $age;
    static $money = 20000;
    public function __construct() {
        parent::__construct();
        echo "sub class family is called\n";
    }
    public function say() {
        parent::say();
        echo $this->name, ' is ', $this->gender, ', and age is ', $this->age, "\n";
    }
    public function cry() {
        echo "parent's money: ", parent::$money, "\n";
        echo "self's money: ", self::$money, "\n";
    }
}

$poor = new family(); //parent class person is called
                      //sub class family is called
$poor->name = 'Tom';
$poor->gender = 'female';
$poor->age = '25';
$poor->say(); //Tom is female
              //Tom is female, and age is 25
$poor->cry(); //parent's money: 10000
              //self's money: 20000

