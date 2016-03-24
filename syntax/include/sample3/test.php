<?php
/***********************************************************
 *     FileName: test.php
 *         Desc: include语句示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 14:45:27
 *      History:
 ***********************************************************/

# 说明：成功返回1，失败返回FALSE并发出警告

$ret = (include "notexist.php");
var_dump($ret);  //输出：bool(false)

if ((include "vars.php") == 1) {  //成功时返回：int(1)
    echo "OK";  //输出：OK
}

