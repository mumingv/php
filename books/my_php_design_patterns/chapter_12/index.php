<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('CDVisitorLogPurchase.php');
require_once('CDVisitorPopulateDiscountList.php');

date_default_timezone_set('UTC');
$cdObj = new CD('Beyond', '光辉岁月', 10);
$cdObj->buy();
$cdObj->acceptVistor(new CDVisitorLogPurchase());
$cdObj->acceptVistor(new CDVisitorPopulateDiscountList());
