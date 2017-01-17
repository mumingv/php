<?php
/* =============================================================================
#     FileName: join.php
#         Desc: 将一个一维数组的值转化为字符串 (implode的别名)
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 15:47:30
#      History:
============================================================================= */

# 语法：
# string join ( string $glue , array $pieces )
# string join ( array $pieces )

# 示例
$array = array('lastname', 'email', 'phone');
$comma_separated = join(",", $array);
echo $comma_separated."\n";
/*
lastname,email,phone
*/

