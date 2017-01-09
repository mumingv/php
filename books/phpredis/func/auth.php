<?php
/***********************************************************
 *     FileName: auth.php
 *         Desc: 密码认证
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-08 16:34:40
 *      History:
 ***********************************************************/

# 有点问题，未成功！！

# 语法：bool auth(string $password)

# 示例：
$redis = new Redis();
if (!$redis->connect('127.0.0.1')) {
    echo "connect() return fail.\n";
} else {
    echo "connect() return successfully.\n";
}
$ret = $redis->auth('foobared');
var_dump($ret);  // bool(false)
