<?php
/* =============================================================================
#     FileName: sha1.php
#         Desc: 计算字符串的 sha1 散列值
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-21 22:53:50
#      History:
============================================================================= */

# 语法：string sha1 ( string $str [, bool $raw_output = false ] )

# 示例：计算字符串的散列值
$str = 'apple';
echo sha1($str);  // d0be2dc421be4fcd0172e5afceea3970e2f3d940

