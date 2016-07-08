<?php
/***********************************************************
 *     FileName: classobject_get_class_vars.php
 *         Desc: 返回由类的默认属性组成的数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 18:11:40
 *      History:
 ***********************************************************/

# 语法：array get_class_vars ( string $class_name )

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

// 获取类的属性
print_r(get_class_vars('person'));
/*
Array
(
    [name] => 
    [gender] => 
)
*/

