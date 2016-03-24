<?php
/***********************************************************
 *     FileName: self_test3.php
 *         Desc: 非静态环境中，static的用法示例(延迟绑定不生效)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 17:15:25
 *      History:
 ***********************************************************/

# static::调用的静态方法，是子类覆写的静态方法

class A {
    private function foo() {
        echo "success_a!\n";
        echo __CLASS__ . PHP_EOL;
    }
    public function test() {
        $this->foo();
//        static::foo();
    }
}

class B extends A {
    // 注意：父类的私有方法也能继承过来
    /* foo() will be copied to B, hence its scope will still be A and
     * the call be successful */
}

class C extends A {
    private function foo() {
        /* original method is replaced; the scope of the new one is C */
        echo "success_c!\n";
        echo __CLASS__ . PHP_EOL;
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test(); // C的私有函数foo为什么没有被调用？看如下报错信息。
$c->foo();
// 报错：
// PHP Fatal error:  Call to private method C::foo() from context 'A'

