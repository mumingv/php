<?php
/**
 * 主程序 
 */

require_once('Playlist.php');
require_once('M3uPlaylistDelegate.php');
require_once('PlsPlaylistDelegate.php');

$playlist = new Playlist('m3u');
$playlist->addSong('/path/a/hello.mp3', 'HELLO');
$playlist->addSong('/path/b/world.mp3', 'WORLD');
$playlist->getPlaylist();

$playlist = new Playlist('pls');
$playlist->addSong('/path/a/hello.mp3', 'HELLO');
$playlist->addSong('/path/b/world.mp3', 'WORLD');
$playlist->getPlaylist();
