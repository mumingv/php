<?php
/**
 * 委托类：m3u格式的播放列表 
 */
class M3uPlaylistDelegate {
    public function getPlaylist($songs) {
        $m3u = "#EXTM3U\n";
        foreach ($songs as $song) {
            $m3u .= "#EXTINF:-1,{$song['title']} {$song['location']}\n";
        }
        $m3u .= "\n";
        return $m3u; 
    }
}
