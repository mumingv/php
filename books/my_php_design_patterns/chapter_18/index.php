<?php
/**
 * 主程序 
 */

require_once('SaleItemTemplate.php');
require_once('CD.php');
require_once('Cereal.php');

$cdObj = new CD('Beyond', '光辉岁月', 10);
$cdObj->setPriceAdjustments();
echo 'Cost of CD is: '.$cdObj->price.PHP_EOL;

$cerealObj = new Cereal(10);
$cerealObj->setPriceAdjustments();
echo 'Cost of cereal is: '.$cerealObj->price.PHP_EOL;
