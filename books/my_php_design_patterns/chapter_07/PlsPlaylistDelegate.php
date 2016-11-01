<?php
/**
 * 委托类：pls格式的播放列表 
 */
class PlsPlaylistDelegate {
    public function getPlaylist($songs) {
        $pls = "[playlist]\nNumberOfEntries=".count($songs)."\n";
        foreach ($songs as $songCount => $song) {
            $counter = $songCount + 1;
            $pls .= "File{$counter}={$song['location']}\n";
            $pls .= "Title{$counter}={$song['title']}\n";
            $pls .= "Length{$counter}=-1\n";
        }
        $pls .= "\n";
        return $pls; 
    }
}
