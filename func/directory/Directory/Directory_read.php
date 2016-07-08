<?php
/***********************************************************
 *     FileName: Directory_read.php
 *         Desc: 从目录句柄中读取条目
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-04-19 20:25:47
 *      History: 示例未通过
 ***********************************************************/

# 语法：public string Directory::read ([ resource $dir_handle ] )

# 示例
$direct = new Directory('.');
$direct->read();

