<?php
/***********************************************************
 *     FileName: info_phpversion.php
 *         Desc: 获取当前的PHP版本
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-03-25 14:09:35
 *      History:
 ***********************************************************/

# 语法：string phpversion ([ string $extension ] )
# 说明：系统定义了如下几个常量：
# PHP_VERSION
# PHP_VERSION_ID
# PHP_MAJOR_VERSION
# PHP_MINOR_VERSION
# PHP_RELEASE_VERSION

# 示例
echo 'Current PHP version: ' . phpversion() . PHP_EOL; //Current PHP version: 5.4.41
echo 'Extention tidy version: ' . phpversion('tidy') . PHP_EOL; //没有结果，因为没有安装tidy扩展或者tidy扩展未启用

// 版本由三部分组成：major_version + minor_version + release_version
echo 'PHP_VERSION: ' . PHP_VERSION . PHP_EOL; //5.4.41
echo 'PHP_VERSION_ID: ' . PHP_VERSION_ID . PHP_EOL; //50441
echo 'PHP_MAJOR_VERSION: ' . PHP_MAJOR_VERSION . PHP_EOL; //5
echo 'PHP_MINOR_VERSION: ' . PHP_MINOR_VERSION . PHP_EOL; //4
echo 'PHP_RELEASE_VERSION: ' . PHP_RELEASE_VERSION . PHP_EOL; //41

