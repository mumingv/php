<?php
/***********************************************************
 *     FileName: example.php
 *         Desc: 第6章示例程序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-10-24 17:49:33
 *      History:
 ***********************************************************/

/*
class classname {
    function __construct($param) {
        echo 'Constructor called with parameter: '.$param.PHP_EOL;
    }
    function __destruct() {
        echo 'Destructor called with no parameter'.PHP_EOL;
    }
    public $attribute1;
    public $attribute2;
    function operation1() {
    }
    function operation2($param1, $param2) {
    }
}

$obj = new classname('mumingv');
 */

/*
class classname {
    public $attribute;
    function operation($param) {
        $this->attribute = $param;
        echo $this->attribute;
    }
}

$obj = new classname();
$obj->operation('great');
 */

/*
class classname {
    protected $attribute;
    function __get($attrName) {
        echo "__get($attrName) is called.".PHP_EOL;
        return $this->$attrName;
    }
    function __set($attrName, $attrValue) {
        echo "__set($attrName, $attrValue) is called.".PHP_EOL;
        $this->$attrName = $attrValue;
    }
}

$obj = new classname();
$obj->attribute = 'mumingv';  // call __set() function
echo $obj->attribute;  // call _get() function
 */

// 继承
/*
class A {
    public $attribute1;
    public function operation1() {
        echo 'In class '.__CLASS__.', $attribute1 is '.$this->attribute1.PHP_EOL; 
    }
}

class B extends A {
    public $attribute2;
    public function operation2() {
        echo 'In class '.__CLASS__.', $attribute2 is '.$this->attribute2.PHP_EOL; 
    }
}

$b = new B();
$b->attribute1 = 10;
$b->operation1();
$b->attribute2 = 20;
$b->operation2();
 */

// 使用final关键字
/*
class A {
    public $attribute = 'attr_a';
    public function operation() {
        echo 'In class A, $attribute is '.$this->attribute.PHP_EOL; 
    }
}

class B extends A {
    public $attribute = 'attr_b';
    public function operation() {
        echo "B's operation() is called".PHP_EOL;
        parent::operation();
    }
}

$b = new B();
$b->operation();
 */


// 单个接口
/*
interface Fruit {
    public function getSize();  // 获取颜色
    public function getColor();  // 获取大小
}

class Apple implements Fruit {
    public function getSize() {
        echo 'Apple is big'.PHP_EOL;
    }
    public function getColor() {
        echo 'Apple is red'.PHP_EOL;
    }
}

class Banana implements Fruit {
    public function getSize() {
        echo 'Banana is small'.PHP_EOL;
    }
    public function getColor() {
        echo 'Banana is yellow'.PHP_EOL;
    }
}

$apple = new Apple();
$apple->getSize();
$apple->getColor();

$banana = new Banana();
$banana->getSize();
$banana->getColor();
 */


// 多个接口
/*
class Fruit {
    public function info() {
        echo "I'm a fruit".PHP_EOL;
    }
}

interface Fruit1 {
    public function getSize();  // 获取颜色
}

interface Fruit2 {
    public function getColor();  // 获取大小
}

class Apple extends Fruit implements Fruit1, Fruit2 {
    public function getSize() {
        echo 'Apple is big'.PHP_EOL;
    }
    public function getColor() {
        echo 'Apple is red'.PHP_EOL;
    }
}

$apple = new Apple();
$apple->info();
$apple->getSize();
$apple->getColor();
 */

// Per-Class常量
/*
class Math {
    const PI = 3.14159;
}
echo 'Math::PI = '.Math::PI.PHP_EOL;
 */

// static方法
/*
class Math {
    static function squared($num) {
        return ($num * $num);
    }
}
echo Math::squared(6);
 */


// 检查类的类型和类型提示
/*
class A {
    public $attribute1;
    public function operation1() {
        echo 'In class '.__CLASS__.', $attribute1 is '.$this->attribute1.PHP_EOL; 
    }
}

class B extends A {
    public $attribute2;
    public function operation2() {
        echo 'In class '.__CLASS__.', $attribute2 is '.$this->attribute2.PHP_EOL; 
    }
}

function display(B $obj) {
    $obj->operation2();
}

$a = new A();
$b = new B();
display($a);
 */


// 延迟静态绑定
/*
class A {
    static public function who() {
        echo 'In class '.__CLASS__.PHP_EOL; 
    }
    static public function test() {
        static::who();  // 延迟静态绑定
    }
}

class B extends A {
    static public function who() {
        echo 'In class '.__CLASS__.PHP_EOL; 
    }
    static public function test() {
        static::who();  // 延迟静态绑定
    }
}

A::who();
A::test();

B::who();
B::test();
 */


/*
class A {
    public function who() {
        echo 'In class '.__CLASS__.PHP_EOL; 
    }
    public function test() {
        $this->who();  // 未使用延迟静态绑定
    }
}

class B extends A {
    public function who() {
        echo 'In class '.__CLASS__.PHP_EOL; 
    }
}

$a = new A();
$a->who();
$a->test();

$b = new B();
$b->who();
$b->test();
*/


// clone
/*
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    // 在类SubObject的对象被clone时，由复制生成的对象调用
    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // 强制复制一份this->object， 否则仍然指向同一个对象
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();
print("Original Object:\n");
print_r($obj);

$obj2 = clone $obj;
print("Cloned Object:\n");
print_r($obj2);
 */

// abstract
abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";










