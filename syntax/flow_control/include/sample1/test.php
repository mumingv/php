<?php
/***********************************************************
 *     FileName: test.php
 *         Desc: include语句示例
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-24 14:22:28
 *      History:
 ***********************************************************/

# 文件寻找的步骤
# 1. 按include参数给出的路径寻找；
# 2. 如果没有给出目录，则按照include_path指定的目录寻找；
# 3. 如果在include_path下没找到，则在调用脚本文件所在的目录和当前工作目录下寻找；
# 4. 如果最后没有找到，则会发出一条WARNING；

echo "A $color $fruit\n";  //打印：A
include "vars.php";
echo "A $color $fruit\n";  //打印：A green apple

