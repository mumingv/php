<?php
/* =============================================================================
#     FileName: get_html_translation_table.php
#         Desc: 返回使用 htmlspecialchars() 和 htmlentities() 后的转换表
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-17 15:00:36
#      History:
============================================================================= */

# 语法：array get_html_translation_table ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = 'UTF-8' ]]] )

# 示例：查看转换表
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
/*
array(1511) {
  ["    "]=>
  string(5) "&Tab;"
  ["
"]=>
  string(9) "&NewLine;"
  ["!"]=>
  string(6) "&excl;"
  ["""]=>
  string(6) "&quot;"
  ["#"]=>
  string(5) "&num;"
  ["$"]=>
  string(8) "&dollar;"
  ["%"]=>
  string(8) "&percnt;"
  ["&"]=>
  string(5) "&amp;"
  ["'"]=>
...
}

