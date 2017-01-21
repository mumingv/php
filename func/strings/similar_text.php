<?php
/* =============================================================================
#     FileName: similar_text.php
#         Desc: 计算两个字符串的相似度
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-21 22:55:58
#      History:
============================================================================= */

# 语法：int similar_text ( string $first , string $second [, float &$percent ] )

# 示例：计算字符串的相似度
$var_1 = 'PHP IS GREAT'; 
$var_2 = 'WITH MYSQL'; 
similar_text($var_1, $var_2, $percent); 
echo $percent."\n";
similar_text($var_2, $var_1, $percent); 
echo $percent."\n";
/*
27.272727272727
18.181818181818
*/

