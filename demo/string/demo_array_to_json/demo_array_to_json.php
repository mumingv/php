<?php


$arr_str = file_get_contents('input');
$arr = $arr_str;
$arr['foo'] = 'bar';
print_r($arr);
