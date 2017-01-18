<?php
/***********************************************************
 *     FileName: nl2br.php
 *         Desc: 在字符串所有新行之前插入 HTML 换行标记
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-19 00:02:53
 *      History:
 ***********************************************************/

# 语法：string nl2br ( string $string [, bool $is_xhtml = true ] )

# 示例：将换行替换成HTML换行标记
echo nl2br("foo isn't\n bar");
/*
foo isn't<br />
 bar
*/
echo nl2br("This\r\nis\n\ra\nstring\r");
/*
This<br />
is<br />
a<br />
string<br />
*/

