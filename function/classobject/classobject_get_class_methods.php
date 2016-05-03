<?php
/***********************************************************
 *     FileName: classobject_get_class_methods.php
 *         Desc: 返回由类的方法名组成的数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 18:13:45
 *      History:
 ***********************************************************/

# 语法：array get_class_methods ( mixed $class_name )
# 说明：参数是类名或者对象都可以

# 示例
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

// 获取类的方法
print_r(get_class_methods('person'));
print_r(get_class_methods($student));
/*
Array
(
    [0] => say
    [1] => __set
    [2] => __get
)
*/

