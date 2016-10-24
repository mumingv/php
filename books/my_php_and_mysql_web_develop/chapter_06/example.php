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




