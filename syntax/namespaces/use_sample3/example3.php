<?php
/***********************************************************
 *     FileName: example3.php
 *         Desc: 使用__NAMESPACE__动态创建名称
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-09 23:49:14
 *      History:
 ***********************************************************/
namespace MyProject;

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return $a;
}
echo get("classname");
?>
