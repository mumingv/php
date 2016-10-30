<?php
/**
 * CD类(基类)
 */
class CD {
    // 这里的属性必须是public的，因为访问者要使用
    public $band;  // 乐队名称
    public $title;  // 专辑名称 
    public $price;  // 专辑价格
    
    public function __construct($band, $title, $price) {
        $this->band = $band;
        $this->title = $title;
        $this->price = $price;
    }

    public function buy() {
        echo 'CD::buy() is called.'.PHP_EOL;
    }

    // 基类函数接受一个访问者类对象，访问者类对象调用的方法又将基类对象作为参数，从而可以访问基类对象的属性
    public function acceptVistor($visitor) {
        // 这里要求函数visitCD必须要在访问者类当中实现
        // $this表示基类对象，在这里将其开放给访问者对象
        $visitor->visitCD($this);
    }
}
