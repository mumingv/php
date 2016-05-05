<?php
/***********************************************************
 *     FileName: player_process.php
 *         Desc: 播放器的"调度管理器"
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 18:33:29
 *      History:
 ***********************************************************/

class playProcess {
    private $message = null;
    public function __construct() {
    }
    public function callback(event $event) {
        $this->message = $event->click();
        // 运算符 instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例
        if ($this->message instanceof process) {
            $this->message->process();
        }
    }
}

