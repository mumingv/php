<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('InventoryDB.php');

/**
 * 
 */
$cdObj = new CD('beyond', '光辉岁月');
$cdObj->buy();
