<?php

require_once "mstring.php";

/*
$str = MString::extractChineseCharater("我来了！<body>Haha１２３４５６７８９０，123。456！789</body>");
var_dump($str);
*/

$str = "“我来了！”&euro;<body>Haha１２３４５６７８９０，123。456！789</body>&#130;TTT";
$str = MString::filterNewsSentence("“我来了！”&euro;<body>Haha１２３４５６７８９０，123。456！789</body>&#130;TTT");
var_dump($str);

/*
$str = '四大天王中郭富城从未结过婚，原因是因为太贪玩了，一直像个长不大了孩子，这一点黄秋生曾经也为他担心过，最近盛传由于方媛已经怀孕多个月，突然间感觉到要做父亲的郭富城今年将要收心养性想要做个好爸爸。当时郭富城说要邀请刘德华过来参加节目时，刘德华以为他在开玩笑。如果结婚摆酒席要请刘德华刘德华肯定会去！';
var_dump($str);
$str = MString::mbStringSplit($str);
var_dump($str);
*/

