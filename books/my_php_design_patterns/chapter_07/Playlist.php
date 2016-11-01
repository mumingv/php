<?php
/**
 * 基类：播放列表 
 */
class Playlist {
    private $_songs;  // 歌曲列表
    private $_typeObject;  // 委托类的对象

    public function __construct($type) {
        $this->_songs = array();
        $type = ucfirst(strtolower($type))."PlaylistDelegate";
        $this->_typeObject = new $type;
        //$this->_typeObject = new "{$type}PlaylistDelegate";
    }
    
    public function addSong($location, $title) {
        $song = array(
            'location' => $location,
            'title' => $title,
        );
        $this->_songs[] = $song;
    }

    public function getPlaylist() {
        $playlist = $this->_typeObject->getPlaylist($this->_songs);
        echo $playlist;
        return $playlist; 
    }
}
