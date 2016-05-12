<?php
/* =============================================================================
#     FileName: string_str_pad.php
#         Desc: 使用另一个字符串填充字符串为指定长度
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2016-05-12 14:07:38
#      History:
============================================================================= */

# 语法：string str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] )
# 说明：$pad_type 参数的可能值为 STR_PAD_RIGHT，STR_PAD_LEFT 或 STR_PAD_BOTH

# 示例
$str = "Hello world!";
$result_str = str_pad($str, 20);
echo $result_str, "//END", PHP_EOL; //Hello world!        //END

$result_str = str_pad($str, 20, "-");
echo $result_str, "//END", PHP_EOL; //Hello world!--------//END

$result_str = str_pad($str, 20, "-", STR_PAD_LEFT);
echo $result_str, "//END", PHP_EOL; //--------Hello world!//END

$result_str = str_pad($str, 20, "-*^", STR_PAD_BOTH);
echo $result_str, "//END", PHP_EOL; //-*^-Hello world!-*^-//END

