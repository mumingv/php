<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('CDDecorator.php');

// 原有对象
$tracks = array("光辉岁月", "不再犹豫", "真的爱你");
$cd = new CD();
foreach ($tracks as $track) {
    $cd->addTrack($track);
}
print "不使用装饰器：\n";
print $cd->getTrackList();

// 装饰器对象
$decorator = new CDDecorator($cd);
$decorator->decorate();
print "使用装饰器：\n";
print $cd->getTrackList();
