<?php
/***********************************************************
 *     FileName: main.php
 *         Desc: 应用入口
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 18:29:53
 *      History:
 ***********************************************************/

include_once("process.php");
include_once("mp4.php");
include_once("player_process.php");
include_once("event.php");
include_once("player_function.php");

$mp4 = new mp4;
$mp4->work();

