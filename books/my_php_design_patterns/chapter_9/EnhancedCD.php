<?php
/**
 * 增强型CD类
 * 说明：与标准CD相比，增强型CD的第一首固定为'DATA TRACK'
 */
class EnhancedCD {
    private $title = '';  // 标题
    private $band = '';  // 乐队名称
    private $tracks = array();  // 音乐列表
    
    public function __construct() {
        $this->tracks[] = 'DATA TRACK';
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setBand($band) {
        $this->band = $band;
    }

    public function addTrack($track) {
        $this->tracks[] = $track;
    }
}
