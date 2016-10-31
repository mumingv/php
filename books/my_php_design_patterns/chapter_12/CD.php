<?php
/**
 * CD类
 */
class CD {
    public $band;  // 乐队名称
    public $title;  // 专辑名称 
    protected $_mediator;  // 中介者类对象
    
    public function __construct($mediator = null) {
        $this->_mediator = $mediator;
    }

    // 将CD类对象保存到数据库
    public function save() {
        // 具体保存步骤（略）
        echo "In class ".__CLASS__."\n";
        var_dump($this); 
    }
    
    public function changeBandName($newName) {
        // 如果存在中介者，则通知它哪些属性有变化，中介者会将这些变化同步给其他相关的类对象
        if (!is_null($this->_mediator)) {
            $this->_mediator->change($this, array('band' => $newName));
        } 
        $this->band = $newName;
        $this->save();
    }
}
