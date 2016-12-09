<?php
namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo() {
    echo "Foo\Bar\subnamespace\\foo() is called.\n";
}
class foo
{
    static function staticmethod() {
        echo "Foo\Bar\subnamespace\\foo::staticmethod() is called.\n";
    }
}

