<?php
/***********************************************************
 *     FileName: variable_intval.php
 *         Desc: 获取变量的整数值
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-26 07:44:21
 *      History:
 ***********************************************************/

# 语法：int intval ( mixed $var [, int $base = 10 ] )
# 说明：只有当$var是字符串时，$base参数才起作用

# 示例
echo intval(42) . PHP_EOL;                      // 42
echo intval(4.2) . PHP_EOL;                     // 4
echo intval('42') . PHP_EOL;                    // 42
echo intval('+42') . PHP_EOL;                   // 42
echo intval('-42') . PHP_EOL;                   // -42
echo intval(042) . PHP_EOL;                     // 34
echo intval('042') . PHP_EOL;                   // 42
echo intval(1e10) . PHP_EOL;                    // 10000000000
echo intval('1e10') . PHP_EOL;                  // 1
echo intval(0x1A) . PHP_EOL;                    // 26
echo intval(42000000) . PHP_EOL;                // 42000000
echo intval(420000000000000000000) . PHP_EOL;   // 0
echo intval('420000000000000000000') . PHP_EOL; // 9223372036854775807
echo intval(42, 8) . PHP_EOL;                   // 42
echo intval('42', 8) . PHP_EOL;                 // 34
echo intval(array()) . PHP_EOL;                 // 0
echo intval(array('foo', 'bar')) . PHP_EOL;     // 1

