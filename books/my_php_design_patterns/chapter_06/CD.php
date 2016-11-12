<?php
/**
 * CD类
 */
class CD {
    public $tracks = array();  // 音乐列表
    
    public function addTrack($track) {
        $this->tracks[] = $track;
    }

    public function getTrackList() {
        $output = '';
        foreach ($this->tracks as $num => $track) {
            $output .= ($num + 1).") {$track}.\n";
        }
        return $output;
    }
}
