<?php
/* =============================================================================
#     FileName: htmlspecialchars_decode.php
#         Desc: 将特殊的 HTML 实体转换回普通字符
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 15:37:53
#      History:
============================================================================= */

# 语法：string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )

# 示例：转换html标记
$str = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str)."\n";
echo htmlspecialchars_decode($str, ENT_NOQUOTES)."\n";
/*
<p>this -> "</p>
<p>this -> &quot;</p>
*/

