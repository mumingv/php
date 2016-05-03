<?php
/***********************************************************
 *     FileName: page2_object.php
 *         Desc: 1.1.1 对象的"形"
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 10:16:29
 *      History:
 ***********************************************************/

# 类是由属性和方法组成，对象是由属性组成；

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
$student->say();

// 打印对象时，只会打印出对象中的属性, 因为对象只包含属性
print_r((array)$student);
var_dump($student);

// 对象的序列化
$str = serialize($student);
echo $str . PHP_EOL; //O:6:"person":2:{s:4:"name";s:3:"Tom";s:6:"gender";s:4:"male";}
file_put_contents('page2_output.txt', $str);

// 对象的反序列化
$str = file_get_contents('page2_output.txt');
$student_test = unserialize($str);
$student_test->say();

