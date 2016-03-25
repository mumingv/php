<?php
/* =============================================================================
#     FileName: string_explode.php
#         Desc: 使用一个字符串分割另一个字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-03-25 14:36:52
#      History:
============================================================================= */

// 语法：array explode ( string $delimiter , string $string [, int $limit ] )

# 示例
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0] . PHP_EOL; //piece1
echo $pieces[1] . PHP_EOL; //piece2

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . PHP_EOL; //foo
echo $pass . PHP_EOL; //*
echo $uid . PHP_EOL; //1023
echo $gid . PHP_EOL; //1000
echo $gecos . PHP_EOL; // 
echo $home . PHP_EOL; ///home/foo
echo $shell . PHP_EOL; ///bin/sh

