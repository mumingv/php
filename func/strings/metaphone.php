<?php
/***********************************************************
 *     FileName: metaphone.php
 *         Desc: Calculate the metaphone key of a string
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-18 23:50:46
 *      History:
 ***********************************************************/

# 语法：string metaphone ( string $str [, int $phonemes = 0 ] )

# 示例：根据发音创建的metaphone键
var_dump(metaphone('programming'));
var_dump(metaphone('programmer'));
/*
string(7) "PRKRMNK"
string(6) "PRKRMR"
*/

