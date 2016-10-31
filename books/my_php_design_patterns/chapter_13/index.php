<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('BuyCDNotifyStreamObserver.php');
require_once('ActivityStream.php');

// 有人购买该CD时，通知观察者记录购买信息
$cdObj = new CD('beyond', '光辉岁月');
$observer = new BuyCDNotifyStreamObserver();  // 创建观察者
$cdObj->attachObserver('purchased', $observer);  // 绑定观察者
$cdObj->buy();  // 购买行为，内部会调用观察者的接口
