<?php
/***********************************************************
 *     FileName: multi_namespace_4.php
 *         Desc: 定义多个命名空间和不包含在命名空间中的代码(只能使用大括号方式)
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-09 22:10:33
 *      History:
 ***********************************************************/

// 除了开始的declare语句外，命名空间的括号外不得有任何PHP代码。

declare(encoding='UTF-8');

namespace MyProject {

const CONNECT_OK = 1;
class Connection {
    public static function start() {
        echo "Connection::start() is called.\n";
    }
}
function connect() { /* ... */  }
}

namespace { // global code
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}
?>
