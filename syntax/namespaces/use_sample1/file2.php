<?php
namespace Foo\Bar;
include 'file1.php';

const FOO = 2;
function foo() {
    echo "Foo\Bar\\foo() is called.\n";
}
class foo
{
    static function staticmethod() {
        echo "Foo\Bar::staticmethod() is called.\n";
    }
}

/* 非限定名称 */
echo "---非限定名称---\n";
foo(); // 解析为 Foo\Bar\foo() (优先在当前命名空间下找函数名-能够找到；如果找不到才会到全局函数中寻找。) 
foo::staticmethod(); // 解析为类 Foo\Bar\foo的静态方法staticmethod (优先中当前命名空间下找类名-能够找到；如果找不到才会到全局类中寻找。)
echo FOO."\n"; // resolves to constant Foo\Bar\FOO () (优先中当前命名空间下找类名-能够找到；如果找不到才会到全局类中寻找。)

/* 限定名称 */
echo "---限定名称---\n";
subnamespace\foo(); // 解析为函数 Foo\Bar\subnamespace\foo (优先将当前命名空间进行拼接-能够找到；如果找不到会怎样？)
subnamespace\foo::staticmethod(); // 解析为类 Foo\Bar\subnamespace\foo, 以及类的方法 staticmethod
echo subnamespace\FOO."\n"; // 解析为常量 Foo\Bar\subnamespace\FOO

/* 完全限定名称 */
echo "---完全限定名称---\n";
\Foo\Bar\foo(); // 解析为函数 Foo\Bar\foo (不会拼接当前命名空间)
\Foo\Bar\foo::staticmethod(); // 解析为类 Foo\Bar\foo, 以及类的方法 staticmethod
echo \Foo\Bar\FOO."\n"; // 解析为常量 Foo\Bar\FOO

/* 在命名空间下访问全局类/函数/常量 */
echo "---在命名空间下访问全局类/函数/常量---\n";
const INI_ALL = 3;
function strlen() {
    echo "length is ?\n";
}
class Exception {
    public static function excep() {
        echo "Exception::excep() is called.\n";
    }
}

// 调用当前命名空间下的函数
strlen();
Exception::excep();
echo INI_ALL."\n";

// 调用全局函数
echo "length is: ".\strlen('Hello')."\n";
$c = new \Exception('error');
echo \INI_ALL."\n";




