<?php
/**
 * 产品 
 */
class Product {
    protected $_type = '';  // 类型
    protected $_size = '';  // 尺寸
    protected $_color = '';  // 颜色

    public function setType($type) {
        $this->_type = $type;
    }

    public function setSize($size) {
        $this->_size = $size;
    }

    public function setColor($color) {
        $this->_color = $color;
    }
}
