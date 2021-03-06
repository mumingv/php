<?php
/***********************************************************
 *     FileName: funchand_func_get_args.php
 *         Desc: 返回一个包含函数参数列表的数组
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 19:15:08
 *      History:
 ***********************************************************/

# 语法：array func_get_args ( void )

# 示例
function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs" . PHP_EOL; //3
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . PHP_EOL; //2
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . PHP_EOL; //1 2 3
    }
}
foo(1, 2, 3);

