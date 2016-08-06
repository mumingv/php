<?php
/***********************************************************
 *     FileName: array_array_multisort.php
 *         Desc: 对多个数组或多维数组进行排序
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-16 12:22:10
 *      History:
 ***********************************************************/

# 语法：bool array_multisort ( array &$arr [, mixed $arg = SORT_ASC [, mixed $arg = SORT_REGULAR [, mixed $... ]]] )
# 排序顺序标志: SORT_ASC / SORT_DESC 
# 排序类型标志: SORT_REGULAR / SORT_NUMERIC / SORT_STRING

# 示例：对多个数组进行排序
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);
var_export($ar1);
/*
array (
    0 => 0,
    1 => 10,
    2 => 100,
    3 => 100,
)
 */
var_export($ar2);
/*
array (
    0 => 4,
    1 => 1,
    2 => 2,
    3 => 3,
)
 */

# 示例：对多维数组按行进行排序
$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
);
array_multisort($ar[0], SORT_ASC, SORT_STRING,
    $ar[1], SORT_DESC, SORT_NUMERIC);
var_export($ar);
/*
array (
    0 => 
    array (
        0 => '10',
        1 => 100,
        2 => 100,
        3 => 11,
        4 => 'a',
    ),
    1 => 
    array (
        0 => 1,  // 为什么这个是第一个？
        1 => 3,
        2 => '2',
        3 => 2,
        4 => 1,
    ),
)
 */

# 示例：对多维数组按列进行排序（对数据库记录进行排序）
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);
//var_export($data);
foreach ($data as $key => $row) {
    $volume[$key] = $row['volume'];
    $edition[$key] = $row['edition'];
}
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
//var_export($volume);
//var_export($edition);
var_export($data);
/*
array (
    0 => 
    array (
        'volume' => 98,
        'edition' => 2,
    ),
    1 => 
    array (
        'volume' => 86,
        'edition' => 1,
    ),
    2 => 
    array (
        'volume' => 86,
        'edition' => 6,
    ),
    3 => 
    array (
        'volume' => 85,
        'edition' => 6,
    ),
    4 => 
    array (
        'volume' => 67,
        'edition' => 2,
    ),
    5 => 
    array (
        'volume' => 67,
        'edition' => 7,
    ),
)
 */

# 示例：不区分大小写字母排序
$array = array('Alpha', 'atomic', 'Beta', 'bank');
$array_lowercase = array_map('strtolower', $array);
array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);
print_r($array);
/*
Array
(
    [0] => Alpha
    [1] => atomic
    [2] => bank
    [3] => Beta
)
 */
print_r($array_lowercase);
/*
Array
(
    [0] => alpha
    [1] => atomic
    [2] => bank
    [3] => beta
)
 */

# 示例：名次排序(分数作为数值从高到低排序，名字作为字符串从小到大排序)
$grade = array("score" => array(70, 95, 70.0, 60, "70"),
    "name" => array("Zhang San", "Li Si", "Wang Wu", "Zhao Liu", "Liu Qi"));
array_multisort($grade["score"], SORT_NUMERIC, SORT_DESC,
    $grade["name"], SORT_STRING, SORT_ASC);
var_export($grade);
/*
array (
    'score' => 
    array (
        0 => 95,
        1 => '70',
        2 => 70,
        3 => 70,
        4 => 60,
    ),
    'name' => 
    array (
        0 => 'Li Si',
        1 => 'Liu Qi',
        2 => 'Wang Wu',
        3 => 'Zhang San',
        4 => 'Zhao Liu',
    ),
)
*/

