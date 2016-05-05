<?php
/***********************************************************
 *     FileName: mp4.php
 *         Desc: 播放器的事件处理逻辑
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 18:30:48
 *      History:
 ***********************************************************/

class mp4 {
    public function work() {
        $playProcess = new playProcess();
        $playProcess->callback(new event("encode"));
        $playProcess->callback(new event("output"));
    }
}

