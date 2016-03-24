<?php
/***********************************************************
 *     FileName: misc_exit.php
 *         Desc: 输出一个消息并且退出当前脚本
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 11:08:34
 *      History:
 ***********************************************************/

# 语法：
# void exit ([ string $status ] )
# void exit ( int $status )

# 示例：在循环中处理部分数据后退出
foreach (range(0, 9, 1) as $number) {
    if ($number == 5) {
        //exit("\nExit when number is $number.\n");  //退出时打印字符串
        //exit(1);  //退出时返回状态码(0-254)
        exit;  //退出时啥也不干
    }
    echo $number;
}

