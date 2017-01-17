<?php
/* =============================================================================
#     FileName: localeconv.php
#         Desc: Get numeric formatting information
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-18 05:50:33
#      History:
============================================================================= */

# 语法：array localeconv ( void )

# 示例：系统区域设置
if (false !== setlocale(LC_ALL, 'zh_CN.UTF-8')) {
    $locale_info = localeconv();
    print_r($locale_info);
}
/*
Array
(
    [decimal_point] => .
    [thousands_sep] => ,
    [int_curr_symbol] => CNY 
    [currency_symbol] => ￥
    [mon_decimal_point] => .
    [mon_thousands_sep] => ,
    [positive_sign] => 
    [negative_sign] => -
    [int_frac_digits] => 2
    [frac_digits] => 2
    [p_cs_precedes] => 1
    [p_sep_by_space] => 0
    [n_cs_precedes] => 1
    [n_sep_by_space] => 0
    [p_sign_posn] => 4
    [n_sign_posn] => 4
    [grouping] => Array
        (
            [0] => 3
        )

    [mon_grouping] => Array
        (
            [0] => 3
        )

)
*/

