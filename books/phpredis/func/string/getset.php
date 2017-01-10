<?php
/***********************************************************
 *     FileName: getset.php
 *         Desc: string类型，使用新value替换旧value
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-10 22:57:52
 *      History:
 ***********************************************************/

# 语法：string getset($key, $new_value)
# 返回值：旧的value值

# 示例：
// 连接
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
    exit;
}
// 设置
$redis->set('x', '42');
$exValue = $redis->getSet('x', 'lol');  // return '42', replaces x by 'lol'
var_dump($exValue);
$newValue = $redis->get('x');       // return 'lol'
var_dump($newValue);
