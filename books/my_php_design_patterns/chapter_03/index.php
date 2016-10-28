<?php
/**
 * 主程序 
 */

// 原有：写日志到终端
require_once('ErrorObject.php');
require_once('LogToConsole.php');
$errorObj = new ErrorObject('404:Not Found');
$logObj = new LogToConsole($errorObj);
$logObj->write();


// 新增：写日志到CSV文件
require_once('ErrorObjectForCSV.php');
require_once('LogToCSV.php');
$errorObjForCSV = new ErrorObjectForCSV('404:Not Found');
$logObjForCSV = new LogToCSV($errorObjForCSV);
$logObjForCSV->write();

