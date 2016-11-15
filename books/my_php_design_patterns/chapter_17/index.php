<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('CDXMLStrategy.php');
require_once('CDJSONStrategy.php');

$cdObj = new CD('beyond', '光辉岁月');

// 使用XML策略
$cdObj->setStrategyContext(new CDXMLStrategy());
$cdObj->get();

// 使用JSON策略
$cdObj->setStrategyContext(new CDJSONStrategy());
$cdObj->get();
