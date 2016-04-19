<?php
/***********************************************************
 *     FileName: classobject_method_exists.php
 *         Desc: 检查类的方法是否存在
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 20:12:44
 *      History:
 ***********************************************************/

# 语法：bool method_exists ( mixed $object , string $method_name )
# 说明：
# 1. 参数$object可以是类名称，也可以是类对象;
# 2. 如果此类不是已知类，使用此函数会使用任何已注册的 autoloader;

# 示例：
$directory = new Directory('.');
var_dump(method_exists($directory,'read')); //bool(true)
var_dump(method_exists('Directory','read')); //bool(true)

