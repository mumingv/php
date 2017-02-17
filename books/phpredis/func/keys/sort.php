<?php
/***********************************************************
 *     FileName: sort.php
 *         Desc: key类型，sort方法
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-17 14:09:10
 *      History:
 ***********************************************************/

# 语法：fixed sort(string $key, array $options)
# 返回值：成功返回value，失败返回false
# 说明：带排序的结构中的$value，如果不是数值型就无法使用排序。

# 示例：根据key获取value
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
} else {
    echo "connect() return successfully.\n";
}

// 设置：set
/*
$redis->delete('s');
$redis->sAdd('s', 5);
$redis->sAdd('s', 4);
$redis->sAdd('s', 2);
$redis->sAdd('s', 1);
$redis->sAdd('s', 3);

var_dump($redis->sort('s')); // 1,2,3,4,5
var_dump($redis->sort('s', array('sort' => 'desc'))); // 5,4,3,2,1
var_dump($redis->sort('s', array('sort' => 'desc', 'store' => 'out'))); // (int)5
*/

// 设置：sorted_set
$redis->delete('s');
$redis->zAdd('s', 5, 5);
$redis->zAdd('s', 4, 4);
$redis->zAdd('s', 2, 2);
$redis->zAdd('s', 1, 1);
$redis->zAdd('s', 3, 3);

/*
$redis->delete('s');
$redis->zAdd('s', 5, 'bar5');
$redis->zAdd('s', 4, 'bar4');
$redis->zAdd('s', 2, 'bar2');
$redis->zAdd('s', 1, 'bar1');
$redis->zAdd('s', 3, 'bar3');
*/

var_dump($redis->sort('s')); // 1,2,3,4,5
var_dump($redis->sort('s', array('sort' => 'desc'))); // 5,4,3,2,1
var_dump($redis->sort('s', array('sort' => 'desc', 'store' => 'out'))); // (int)5

