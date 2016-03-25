<?php
/***********************************************************
 *     FileName: funchand_func_get_arg.php
 *         Desc: 返回参数列表的某一项
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 19:19:47
 *      History:
 ***********************************************************/

# 语法：mixed func_get_arg ( int $arg_num )

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

