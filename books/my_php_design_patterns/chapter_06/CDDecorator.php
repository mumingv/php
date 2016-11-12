<?php
/**
 * 装饰器：针对CD类的$tracks做一些修改
 */
class CDDecorator {
    private $_cd = null;  // 待装饰的CD对象（默认存放的是对象的引用）

    public function __construct(CD $cd) {
        $this->_cd = $cd;
    }

    public function decorate() {
        // 这里&$track表示引用，会直接改变数组$this->_cd->tracks中的值
        foreach ($this->_cd->tracks as &$track) {
            $track = "《".$track."》"; 
        }
    }
}
