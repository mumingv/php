<?php
/***********************************************************
 *     FileName: ctype_ctype_alnum.php
 *         Desc: 做字母和数字字符检测
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-14 19:14:09
 *      History:
 ***********************************************************/

# 语法：bool ctype_alnum ( string $text )
# 说明：检查$text是否全部由字母和/或数字组成

# 示例
$strings = array('AbCd1zyZ9', 'foo!#$bar');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        echo "The string $testcase consists of all letters or digits.\n";
    } else {
        echo "The string $testcase does not consist of all letters or digits.\n";
    }
}
/*
The string AbCd1zyZ9 consists of all letters or digits.
The string foo!#$bar does not consist of all letters or digits.
 */

