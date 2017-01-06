<?php
/***********************************************************
 *     FileName: array_udiff_uassoc.php
 *         Desc: 带索引检查计算数组的差集，用回调函数比较数据和索引
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-06 09:54:53
 *      History:
 ***********************************************************/

# 语法：array array_udiff_uassoc ( array $array1 , array $array2 [, array $ ... ], callable $data_compare_func , callable $key_compare_func )
# 回调函数：int callback ( mixed $a, mixed $b )

# 示例：两个数组的差集
class cr {
    private $priv_member;
    function cr($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member)? 1:-1;
    }

    static function comp_func_key($a, $b)
    {
        if ($a === $b) return 0;
        return ($a > $b)? 1:-1;
    }
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);

$result = array_udiff_uassoc($a, $b, array("cr", "comp_func_cr"), array("cr", "comp_func_key"));
print_r($result);
/*
Array
(
    [0.1] => cr Object
        (
            [priv_member:cr:private] => 9
        )

    [0.5] => cr Object
        (
            [priv_member:cr:private] => 12
        )

    [0] => cr Object
        (
            [priv_member:cr:private] => 23
        )

)
*/


