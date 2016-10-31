<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('MP3Archive.php');
require_once('MusicContainerMediator.php');

// 创建对象时未指定中介对象
$mediator = new MusicContainerMediator();
$cdObj = new CD();
$cdObj->band = 'beyond';
$cdObj->title = '光辉岁月';
$cdObj->changeBandName('真的爱你');

// 创建对象时指定中介对象
$mediator = new MusicContainerMediator();
$cdObj = new CD($mediator);
$cdObj->band = 'beyond';
$cdObj->title = '光辉岁月';
$cdObj->changeBandName('真的爱你');
