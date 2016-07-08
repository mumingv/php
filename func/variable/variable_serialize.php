<?php
/***********************************************************
 *     FileName: variable_serialize.php
 *         Desc: 产生一个可存储的值的表示(将对象保存为字符串)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 11:09:12
 *      History:
 ***********************************************************/

# 语法：string serialize ( mixed $value )

class person {
    public $name;
    public $gender;
    public function say() {
        echo $this->name, ' is ', $this->gender, "\n";
    }
}

$student = new person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say(); //Tom is male

// 对象的序列化
$str = serialize($student);
echo $str . PHP_EOL; //O:6:"person":2:{s:4:"name";s:3:"Tom";s:6:"gender";s:4:"male";}
file_put_contents('variable_serialize.txt', $str);

// 对象的反序列化
$str = file_get_contents('variable_serialize.txt');
$student_test = unserialize($str);
$student_test->say(); //Tom is male

