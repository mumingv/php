<?php
/***********************************************************
 *     FileName: self_test1.php
 *         Desc: self的用法示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 16:47:42
 *      History:
 ***********************************************************/

# self::调用的静态方法，是self关键字所在类的静态方法，而不是子类覆写的静态方法

class A {
    public static function who() {
        echo __CLASS__;
        echo "a";
    }
    public static function test() {
        self::who();
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
        self::who();
    }
}

B::test();  //输出：Aa
C::test();  //输出：Aa
D::test();  //输出：Dd

