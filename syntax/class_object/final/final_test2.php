<?php
/***********************************************************
 *     FileName: final_test1.php
 *         Desc: final关键字使用示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 16:09:08
 *      History:
 ***********************************************************/

# 说明：
# 1. 如果一个类被声明为final，则不能被继承；
# 2. 如果一个类中的方法被声明为final，则其子类不能覆写该final方法(可以继承)；
# 3. 属性不能被声明为final；

# 示例：类声明为final
class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
    }
}
# 提示错误：
# PHP Fatal error:  Cannot override final method BaseClass::moreTesting()

