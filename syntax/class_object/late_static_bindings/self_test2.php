<?php
/***********************************************************
 *     FileName: self_test2.php
 *         Desc: 后期静态绑定中，static的用法示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 17:11:17
 *      History:
 ***********************************************************/

# static::调用的静态方法，是子类覆写的静态方法

class A {
    public static function who() {
        echo __CLASS__;
        echo "a";
    }
    public static function test() {
        static::who(); //后期静态绑定从这里开始
    }
}

class B extends A {
}

class C extends A {
    public static function who() {
        echo __CLASS__;
        echo "c";
    }
}

class D extends A {
    public static function who() {
        echo __CLASS__;
        echo "d";
    }
    public static function test() {
        static::who();
    }
}

B::test();  //输出：Aa
C::test();  //输出：Cc
D::test();  //输出：Dd

