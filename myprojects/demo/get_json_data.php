<?php

// TTS新闻
$nid = '18355580042987304957';
$title = '《摆渡人》梁朝伟变超级英雄 金城武爆料自己被骗拍戏';
$summary = '由王家卫监制、张嘉佳执导的贺岁爱情喜剧《摆渡人》将于2016年12月23日全国上映。影片中，梁朝伟扮演“金牌摆渡人”陈末，为了拯救落水者使出浑身解数，在此次发布的“喜剧江湖”特辑中，陈末的世界没有“不可能”，飙车、功夫、一个打五十个，用梁朝伟的话来讲“基本上和一个超级英雄没有什么分别”。';
$content = '中工娱乐12月9日报道 由王家卫监制、张嘉佳执导的贺岁爱情喜剧《摆渡人》将于2016年12月23日全国上映。影片最新曝光“喜剧江湖”特辑，梁朝伟、金城武率众主演讲述拍摄《摆渡人》的角色花絮以及影片拍摄背后的故事。《摆渡人》居然是这样的——梁朝伟变身超级英雄 金城武笑称“被骗来拍戏”影片中，梁朝伟扮演“金牌摆渡人”陈末，为了拯救落水者使出浑身解数，在此次发布的“喜剧江湖”特辑中，陈末的世界没有“不可能”，飙车、功夫、一个打五十个，用梁朝伟的话来讲“基本上和一个超级英雄没有什么分别”。';
$url = 'http://bdnews.xinmin.cn/baidunews-eco/content/30668822';

$data = array(
    'nid' => $nid,
    'title' => $title,
    'summary' => $summary,
    'content' => $content,
);

$seconds = array(1, 2, 3);
shuffle($seconds);
sleep($seconds[0]);

$data['second'] = $seconds[0];
$data['microtime'] = microtime(true);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
