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

$poor = new family();
$poor->name = 'Tom';
$poor->gender = 'female';
$poor->age = '25';
$poor->say();
$poor->cry();

