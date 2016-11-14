<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('MixtapeCD.php');

/**
 * 可以直接使用基类创建对象 
 */
$cdObj = new CD(2);
$cdObj->buy();


/**
 * 使用原型对象克隆新的对象 
 */

// 定制的专辑信息（歌曲由客户自己指定）
$purchaseInfo = array();
$purchaseInfo[] = array('青花瓷', '算什么男人', '红尘客栈');
$purchaseInfo[] = array('双截棍', '给我一首歌的时间', '说好的幸福呢');

// 创建原型对象
$cdProto = new MixtapeCD(2);  // 以id为2的专辑为原型
foreach($purchaseInfo as $mixed) {
    $cd = clone $cdProto;
    $cd->trackList = $mixed;
    var_dump($cd);
}
