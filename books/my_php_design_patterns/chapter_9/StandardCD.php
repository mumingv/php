<?php
/**
 * 标准CD类
 */
class StandardCD {
    private $title = '';  // 标题
    private $band = '';  // 乐队名称
    private $tracks = array();  // 音乐列表
    
    public function __construct() {
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
