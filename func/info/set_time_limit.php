<?php
/***********************************************************
 *     FileName: info_set_time_limit.php
 *         Desc: 设置脚本最大执行时间
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-09 22:32:30
 *      History:
 ***********************************************************/

# 语法：void set_time_limit ( int $seconds )
# 脚本最大执行时间的取值顺序：
# 1. php.ini的max_execution_time参数；
# 2. set_time_limit函数设置的值；
# 3. 默认值30秒；
# 注：如果超时会脚本会返回一个致命错误。

# 示例
set_time_limit(0); //取消时间限制

