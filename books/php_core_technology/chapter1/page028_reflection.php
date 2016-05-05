<?php
/***********************************************************
 *     FileName: page028_reflection.php
 *         Desc: 反射
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 17:37:49
 *      History:
 ***********************************************************/

# 所谓反射，就是指根据对象获取对应类的对象和成员; 

class person {
    public $name;
    public $gender;
    public function say() {
        echo $this->name, ' is ', $this->gender, "\n";
    }
    public function __set($name, $value) {
        echo "__set($name, $value) is called.\n";
        $this->$name = $value;
    }
    public function __get($name) {
        echo "__get($name) is called.\n";
        if (!isset($this->$name)) {
            echo "$name is not set.\n";
            $this->$name = "default";
        }
        return $this->$name;
    }
}

// 创建对象
$student = new person();
$student->name = 'Tom';
$student->gender = 'male';
$student->age = '25';

// 获取对象的方法
$reflect = new ReflectionObject($student);
$props = $reflect->getProperties();
foreach($props as $prop) {
    print $prop->getName() . PHP_EOL;
}
/*
name
gender
age
 */

// 获取对象的属性
$methods = $reflect->getMethods();
foreach($methods as $method) {
    print $method->getName() . PHP_EOL;
}
/*
say
__set
__get
 */

