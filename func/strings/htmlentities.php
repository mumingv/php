<?php
/* =============================================================================
#     FileName: htmlentities.php
#         Desc: Convert all applicable characters to HTML entities
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 15:32:16
#      History:
============================================================================= */

# 语法：string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

# 示例：转换html标记
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str)."\n";
echo htmlentities($str, ENT_QUOTES)."\n";
/*
A 'quote' is &lt;b&gt;bold&lt;/b&gt;
A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
*/

