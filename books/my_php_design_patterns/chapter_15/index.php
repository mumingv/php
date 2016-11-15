<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('CDProxy.php');

/**
 * 直接使用基类(不使用代理)
 */
$cdObj = new CD('beyond', '光辉岁月');
$cdObj->buy();

/**
 * 使用代理将数据写入代理指定的数据库
 */
$cdProxyObj = new CDProxy('周杰伦', '叶惠美');
$cdProxyObj->buy();
