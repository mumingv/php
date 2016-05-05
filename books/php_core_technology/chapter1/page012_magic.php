<?php
/***********************************************************
 *     FileName: page012_magic.php
 *         Desc: 魔术方法__toString
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 11:47:08
 *      History:
 ***********************************************************/

# 尝试将对象作为字符串处理时，会自动调用__toString函数; 如：echo $object;  

class Account {
    private $user = 'Tom';
    private $pwd = 2;

    // __toString方法本质上和serialize方法一样，是一个将对象序列化的方法
    public function __toString() {
        return "username:{$this->user}, password:{$this->pwd}";
    }
}

$a = new Account();
// 如果没有__toString方法，echo一个对象会报语法错误；
// 如果有__toString方法，echo一个对象时会自动调用__toString方法；
echo $a, PHP_EOL; //username:Tom, password:2

