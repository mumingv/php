<?php
/* =============================================================================
#     FileName: string_str_repeat.php
#         Desc: 重复一个字符串
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-05-12 14:16:35
#      History:
============================================================================= */

# 语法：string str_repeat ( string $input , int $multiplier )
# 说明：$pad_type 参数的可能值为 STR_PAD_RIGHT，STR_PAD_LEFT 或 STR_PAD_BOTH

# 示例
$str = "Hello!";
$result_str = str_repeat($str, 3);
echo $result_str, "//END", PHP_EOL; //Hello!Hello!Hello!//END

// 重复次数为0时，返回空字符串
$result_str = str_repeat($str, 0);
echo $result_str, "//END", PHP_EOL;

