<?php
/**
 * 主程序 
 */

require_once('CD.php');
require_once('CDSearchByBandIterator.php');

// new CDSearchByBandIterator返回的是CDSearchByBandIterator对象，但是可以直接当作"$_cds"数组来使用，因为其实现了Iterator接口
$cds = new CDSearchByBandIterator('beyond');
foreach ($cds as $cd) {
    print $cd->band." --> ".$cd->title."(".count($cd->trackList).")\n"."-----------------------------\n";
    foreach ($cd->trackList as $track) {
        print $track."\n";
    }
    print "\n";
}
