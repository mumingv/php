<?php
/***********************************************************
 *     FileName: test_object.php
 *         Desc: 打印对象
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 10:46:52
 *      History:
 ***********************************************************/

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

//echo($student);
print_r($student);
var_dump($student);
var_export($student);

