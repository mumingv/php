<?php
/***********************************************************
 *     FileName: fgets.php
 *         Desc: 从文件指针中读取一行
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-08 19:45:47
 *      History:
 ***********************************************************/

# 语法：string fgets ( resource $handle [, int $length ] )

$fp = fopen("./fgets.input", "r");
while (($line = fgets($fp, 4096)) !== false) {
    $line = str_replace(PHP_EOL, "", $line);
    $lineArr = explode("\t", $line);
    echo "Read line: ".$lineArr[0]."\n";
}    

