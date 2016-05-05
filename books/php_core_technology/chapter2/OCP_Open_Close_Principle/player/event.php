<?php
/***********************************************************
 *     FileName: event.php
 *         Desc: 播放器的事件处理类
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 18:36:40
 *      History:
 ***********************************************************/

class event {
    private $m;
    public function __construct($method) {
        $this->m = $method;
    }
    public function click() {
        switch ($this->m) {
            case "encode":
                return new playerencode();
                break;
            case "output":
                return new playeroutput();
                break;
        } 
    }
}

