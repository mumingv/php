<?php

require_once "mstring.php";

$str = MString::extractChineseCharater("我来了！<body>Haha１２３４５６７８９０，123。456！789</body>");
var_dump($str);

$str = MString::filterNewsSentence("“我来了！”&euro;<body>Haha１２３４５６７８９０，123。456！789</body>&#130;TTT");
var_dump($str);
