<?php
/**
 * CD类
 */
class CD extends SaleItemTemplate {
    public $band;  // 乐队名称
    public $title;  // 专辑名称 
    
    public function __construct($band, $title, $price) {
        $this->band = $band;
        $this->title = $title;
        $this->price = $price;
    }

    // 子类中必须要实现抽象方法
    protected function taxAddition() {
        return round($this->price * 0.05, 2);
    }
}
