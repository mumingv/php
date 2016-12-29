<?php
/***********************************************************
 *     FileName: system.php
 *         Desc: 执行外部程序，并且显示输出
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-30 00:07:14
 *      History:
 ***********************************************************/

# 语法：string system ( string $command [, int &$return_var ] )
# 参数：$return_var保存$command执行的返回值；
# 返回值：$command执行的输出结果的最后一行；

# 示例
$last_line = system("ls", $retval); //exec_system.php
echo "retval: ", $retval, PHP_EOL; //retval: 0
echo "last_line: ", $last_line, PHP_EOL; //last_line: exec_system.php

