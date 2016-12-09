<?php
/***********************************************************
 *     FileName: multi_namespace_2.php
 *         Desc: [推荐]大括号方式，这种方式和定义类相似
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-09 21:43:38
 *      History:
 ***********************************************************/
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}

namespace AnotherProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}
?>
