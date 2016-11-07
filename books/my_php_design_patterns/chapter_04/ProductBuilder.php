<?php
/**
 * 产品建造者
 */
class ProductBuilder {
    protected $_product = NULL;  // 建造的产品对象
    protected $_configs = array();  // 产品配置参数

    public function __construct($configs) {
        $this->_product = new Product();
        $this->_configs = $configs;
    }

    // 建造完整的对象
    public function build() {
        $this->_product->setType($this->_configs['type']);
        $this->_product->setSize($this->_configs['size']);
        $this->_product->setColor($this->_configs['color']);
    }

    // 获取建造的对象
    public function getProduct() {
        return $this->_product;
    }
}
