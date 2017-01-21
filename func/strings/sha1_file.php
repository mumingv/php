<?php
/* =============================================================================
#     FileName: sha1_file.php
#         Desc: 计算文件的 sha1 散列值
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-21 22:47:45
#      History:
============================================================================= */

# 语法：
# string sha1_file ( string $filename [, bool $raw_output = false ] )

# 示例：计算目录下所有php文件的散列值
foreach(glob('./*.php') as $ent)
{
    if(is_dir($ent))
    {
        continue;
    }
    echo $ent . ' (SHA1: ' . sha1_file($ent) . ')', PHP_EOL;
}
/*
./trim.php (SHA1: f3204ce956037d97c3cd6f285bb0c0ac4f4239f3)
./ucfirst.php (SHA1: 3e414bb27d2fb26a3affcb283d22134381a24f14)
./vsprintf.php (SHA1: e7c74513998adbb93f5735f403b164cc73082080)
./wordwrap.php (SHA1: 59017fe459a484edb879f2b0b7ed4c97bac4ef95)
*/
