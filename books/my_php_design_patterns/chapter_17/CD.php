<?php
/**
 * CD类：需要设置策略才能使用
 */

class CD {
    public $band = '';  // 乐队名称
    public $title = '';  // 专辑名称 

    protected $_strategy = null;  // 策略对象
    
    public function __construct($band, $title) {
        $this->band = $band;
        $this->title = $title;
    }

    // 设置策略对象
    public function setStrategyContext($strategyObj) {
        $this->_strategy = $strategyObj;
    }

    public function get() {
        return $this->_strategy->get($this);
    }
}
