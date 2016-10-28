<?php
/**
 * 谷物类
 */
class Cereal extends SaleItemTemplate {
    public function __construct($price) {
        $this->price = $price;
    }

    // 谷物商品超重需要增加金额，需要重载该方法
    protected function oversizeAddition() {
        return round($this->price * 0.20, 2);
    }

    // 子类中必须要实现抽象方法
    protected function taxAddition() {
        return 0;
    }
}
