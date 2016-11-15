<?php
/**
 * CD类
 */
class CD {
    public $band = '';  // 乐队名称
    public $title = '';  // 专辑名称
    public $trackList = array();  // 歌曲列表

    public function __construct($band, $title) {
        $this->band = $band;
        $this->title = $title;
    }

    public function addTrack($track) {
        $this->trackList[] = $track;
    }
}
