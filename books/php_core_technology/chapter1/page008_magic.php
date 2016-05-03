<?php
/***********************************************************
 *     FileName: page8_magic.php
 *         Desc: 魔术方法__get, __set
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-03 11:49:30
 *      History:
 ***********************************************************/

class Account {
    private $user = 'Tom';
    private $pwd = 2;
    public $name;

    public function __get($name) {
        echo "__get($name) is called.\n";
        if (!isset($this->$name)) {
            echo "$name is not set\n";
            $this->$name = "default";
        }
        return $this->$name;
    }

    public function __set($name, $value) {
        echo "__set($name, $value) is called.\n";
        $this->$name = $value;
    }
}

$a = new Account();
echo $a->user . PHP_EOL; //自动调用__get函数, 输出：Tom
$a->pwd = 3; //自动调用__set函数
echo $a->pwd . PHP_EOL; //输出：3
echo $a->big . PHP_EOL; //default
$a->name = 'Jay'; //public属性，不会触发__get或__set操作
echo $a->name . PHP_EOL;

