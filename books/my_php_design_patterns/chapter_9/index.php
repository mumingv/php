<?php
/**
 * 主程序 
 */

require_once('StandardCD.php');
require_once('EnhancedCD.php');
require_once('CDFactory.php');

$type = 'enhanced';
$cdObj = CDFactory::getInstance($type);
$cdObj->setTitle('光辉岁月');
$cdObj->setBand('Beyond');
$cdObj->addTrack('光辉岁月');
$cdObj->addTrack('怀念你忘记你');
$cdObj->addTrack('心中的太阳');

