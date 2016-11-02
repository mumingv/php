<?php
/**
 * CD类
 */
class CD {
    public $band;  // 乐队名称
    public $title;  // 专辑名称 
    public $tracks = array();  // 音乐列表
    
    public function __construct($band, $title, $tracks) {
        $this->band = $band;
        $this->title = $title;
        $this->tracks = $tracks;
    }
}
