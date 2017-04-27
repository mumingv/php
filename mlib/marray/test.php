<?php

require_once "marray.php";

$newsData1 = array (
  0 => 
  array (
    'id' => '17455156507597619948',
    'title' => '《拆弹专家》首映 刘德华:票房就拜托老铁了',
    'site' => '新浪娱乐',
  ),
  1 => 
  array (
    'id' => '8537029113761063042',
    //'id' => '17455156507597619948',
    'title' => '华仔伤后首“露脸”“我还是那个很帅的刘德华”',
    'site' => '网易新闻',
  ),
  2 => 
  array (
    'id' => '5407224219679834019',
    'title' => '两影帝拼演技 姜武压迫刘德华享受“爆破”感觉',
    'site' => '腾讯娱乐',
  ),
);

//$data1 = MArray::arrayUniqueWithField($newsData1, 'id');
//print_r($data1);


$newsData2 = array(
  0 => 
  array (
    'id' => '17455156507597619948',
    'title' => '《拆弹专家》首映 刘德华:票房就拜托老铁了',
    'site' => '新浪娱乐2',
  ),
  1 => 
  array (
    'id' => '8537029113761063042',
    //'id' => '17455156507597619948',
    'title' => '华仔伤后首“露脸”“我还是那个很帅的刘德华”',
    'site' => '网易新闻2',
  ),
  2 => 
  array (
    'id' => '5407224219679834019',
    'title' => '两影帝拼演技 姜武压迫刘德华享受“爆破”感觉',
    'site' => '腾讯娱乐2',
  ),
);
//$data2 = MArray::arrayUniqueWithField($newsData2, 'id');
//print_r($data2);


$data1 = MArray::changeAssoc($newsData1, 'id');
var_dump($data1);
$data2 = MArray::changeAssoc($newsData2, 'id');
var_dump($data2);
//$data = MArray::arrayMerge($data1, $data2);
//print_r($data);

//$data = array_merge($data1, $data2);
//print_r($data);

$data = $data1 + $data2;
print_r($data);
