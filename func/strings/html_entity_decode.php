<?php
/***********************************************************
 *     FileName: html_entity_decode.php
 *         Desc: Convert all HTML entities to their applicable characters
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-17 15:17:05
 *      History:
 ***********************************************************/

# 说明：string html_entity_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") ]] )

# 示例
$orig = "I'll \"walk\" the <b>dog</b> now";
$a = htmlentities($orig);
$b = html_entity_decode($a);
echo $a."\n"; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
echo $b."\n"; // I'll "walk" the <b>dog</b> now

