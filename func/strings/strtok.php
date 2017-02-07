<?php
/* =============================================================================
#     FileName: strtok.php
#         Desc: 标记分割字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-02-08 03:44:14
#      History:
============================================================================= */

# 语法：
# string strtok ( string $str , string $token )
# string strtok ( string $token )

# 示例：
$string = "This is\tan example\nstring";
$tok = strtok($string, " \n\t");
while ($tok !== false) {
    echo "Word=$tok"."\n";
    $tok = strtok(" \n\t");
}
/*
Word=This
Word=is
Word=an
Word=example
Word=string
*/

