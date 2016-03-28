<?php
/***********************************************************
 *     FileName: md5_to_8bytes.php
 *         Desc: 将长度为32的16进制MD5字符串压缩成长度为8的32进制字符串
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-28 20:38:23
 *      History:
 ***********************************************************/

function num16to32($a){
    for ($a = md5($a, true),
        $s = '0123456789ABCDEFGHIJKLMNOPQRSTUV',
        $d = '',
        $f = 0;
        $f < 8;
        $g = ord( $a[ $f ] ),
        $d .= $s[ ( $g ^ ord( $a[ $f + 8 ] ) ) - $g & 0x1F ],
        $f++
    );
    return $d;
}

$str = "apple";
$md5_str =  md5($str); //1f3870be274f6c49b3e31a0c6728957f
echo num16to32($md5_str) . PHP_EOL;

