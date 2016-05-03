<?php
/***********************************************************
 *     FileName: page029_get_method_and_prop.php
 *         Desc: 获取类/对象的属性/方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 18:00:47
 *      History:
 ***********************************************************/

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

// 获取对象的属性
var_dump(get_object_vars($student));

// 获取类的属性/对象所属类的属性
var_dump(get_class_vars('person'));
var_dump(get_class_vars(get_class($student)));

// 获取类的方法/对象所属类的方法
var_dump(get_class_methods('person'));
var_dump(get_class_methods(get_class($student)));

