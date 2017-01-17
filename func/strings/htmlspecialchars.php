<?php
/* =============================================================================
#     FileName: htmlspecialchars.php
#         Desc: Convert special characters to HTML entities
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 15:41:02
#      History:
============================================================================= */

# 语法：string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

# 示例：转换html标记
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new."\n";
/*
&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
*/

