<?php
/***********************************************************
 *     FileName: strrchr.php
 *         Desc: 查找指定字符在字符串中的最后一次出现
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-02-08 03:21:03
 *      History:
 ***********************************************************/

# 语法：string strrchr ( string $haystack , mixed $needle )

# 示例
$PATH = "/usr/local/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/usr/java/jdk1.7.0_80/bin:/usr/java/jdk1.7.0_80/jre/bin:/usr/local/hadoop/bin:/usr/local/hadoop/sbin:/home/work/.local/bin:/home/work/bin:/usr/libexec/gcc/x86_64-redhat-linux/4.8.2";
echo substr(strrchr($PATH, ":"), 1);
/*
/usr/libexec/gcc/x86_64-redhat-linux/4.8.2
*/

