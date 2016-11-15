<?php
/**
 * CD策略类：JSON
 */

class CDJSONStrategy {
    // 该函数在CD类中被调用，参数为CD类对象是因为该函数中要获取CD类对象的属性
    public function get(CD $cd) {
        $json = array();
        $json['CD']['band'] = $cd->band;
        $json['CD']['title'] = $cd->title;
        echo json_encode($json).PHP_EOL;
        return json_encode($json);
    }
}
