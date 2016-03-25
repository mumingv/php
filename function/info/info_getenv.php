<?php
/***********************************************************
 *     FileName: info_getenv.php
 *         Desc: 获取一个环境变量的值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-26 07:21:28
 *      History:
 ***********************************************************/

# 语法：string getenv ( string $varname )
# 说明：phpinfo()可以查看所有环境变量的列表, 如：
# HOME => /home/users/yinjie05

# 示例
//phpinfo();
echo getenv("HOME") . PHP_EOL; ///home/users/yinjie05

