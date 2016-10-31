<?php
/**
 * CD类
 */
class CD {
    public $band;  // 乐队名称
    public $title;  // 专辑名称 
    protected $_observers;  // 观察者类对象数据，分类存储
    
    public function __construct($band, $title) {
        $this->band = $band;
        $this->title = $title;
    }

    // 存储观察者对象，分类存储
    public function attachObserver($type, $observer) {
        $this->_observers[$type][] = $observer; 
    }

    // [内部调用]通知观察者对象，分类通知
    public function notifyObserver($type) {
        if (isset($this->_observers[$type])) {
            foreach ($this->_observers[$type] as $observer) {
                // 其实是直接调用观察者对象的接口函数，该函数可以获取CD类对象的数据
                $observer->update($this);
            }
        } 
    } 

    // 业务接口：购买行为
    public function buy() {
        // 业务逻辑 ...

        // 通知观察者发生了什么事件
        $this->notifyObserver('purchased');
    }
}
