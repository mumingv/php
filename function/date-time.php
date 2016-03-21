<?php

/**
 * microtime: 获取当前Unix时间戳和微秒数
 */
$date = date("Y-m-d H:i:s");
echo "<h2><b>date</b></h2>";
echo "date(\"Y-m-d H:i:s\"): ";
var_dump($date);
echo "</br>";


/**
 * microtime: 获取当前Unix时间戳和微秒数
 */
$time = microtime();
echo "<h2><b>microtime</b></h2>";
echo "micortime(): ";
var_dump($time);
echo "</br>";

$time = microtime(true);
echo "micortime(true): ";
var_dump($time);
echo "</br>";

echo "</br>
总结: </br>
1. microtime不带参数返回的是一个时间字符串(格式: msec sec);</br>
2. microtime带参数true返回的呃是时间浮点数(单位: sec);</br>
";

?>
