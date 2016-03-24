<?php

// 8个魔术常量(不区分大小写)

namespace NAMESPACE_NAME;
/**
 * __FILE__ : 文件名称, 字符串类型
 */
echo '__FILE__: ';
var_dump(__file__);  //输出：string(69) "/home/users/yinjie05/git/php/syntax/magic_constant/magic_constant.php"


/**
 * __LINE__ : 行号, 整型
 */
echo '__LINE__: ';
var_dump(__LINE__);  //输出：int(19)


/**
 * __DIR__ : 目录, 字符串类型
 * 注: 返回结果不包含结尾的"/"(根目录除外)
 */
echo '__DIR__: ';
var_dump(__DIR__);  //输出：string(50) "/home/users/yinjie05/git/php/syntax/magic_constant"


/**
 * __FUNCTION__ : 函数名称
 * 注:  1. 全局函数会
 */
function showFunction() {
    echo "__FUNCTIN__: ";
    var_dump(__FUNCTION__);  //输出：string(27) "NAMESPACE_NAME\showFunction"
}
showFunction();


/**
 * __CLASS__ : 类名称
 * __METHOD__ : 方法名称(注意和函数名称的区别: 方法名称包含类名称, 函数名称不包含类名称)
 */
class BaseClass {
    function showClass() {
        echo "__CLASS__: ";
        var_dump(__CLASS__);
    }
    function showFunction() {
        echo "&nbsp;&nbsp;__FUNCTION__ in class: ";
        var_dump(__FUNCTION__);
    }
    function showMethod() {
        echo "&nbsp;&nbsp;__METHOD__ in class: ";
        var_dump(__METHOD__);
    }
}
$obj = new BaseClass();
$obj->showClass();
$obj->showFunction();
$obj->showMethod();


/**
 * __TRAIT__ : Traits名称, 从PHP5.4.0开始支持
 */
/*
trait HelloWorld {
    public function traitName() {
        echo __TRAIT__;
	//echo "__TRAIT__";
    }
} 
class A {
    use HelloWorld;
}
echo '__TRAIT__: ';
$obj = new A();
$obj->traitName();
*/


/**
 * __NAMESPACE__ : 命名空间名称
 */
echo '__NAMESPACE__: ';
var_dump(__NAMESPACE__); 

