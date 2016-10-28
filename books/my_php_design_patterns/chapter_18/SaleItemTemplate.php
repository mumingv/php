<?php
/**
 * 销售项目模板
 */
abstract class SaleItemTemplate {
    public $price = 0;  // 商品调整的价格
    
    // 制定计算框架，使用final为了防止子类进行重写
    final public function setPriceAdjustments() {
        $this->price += $this->oversizeAddition();  // 超重需要支付的价格
        $this->price += $this->taxAddition();  // 交的税
    }

    // 大部分商品都不会超重，所以返回了默认值0
    // 但同时也支持少部分超重的商品进行重写该方法，所以使用了protected关键字
    protected function oversizeAddition() {
        return 0;
    }

    // 大部分商品都要纳税，但是纳税的金额又不是固定的，所有这里定义为抽象方法，
    // 具体的税额计算交由子类去实现
    // 注：抽象方法不能写大括号{}，因为大括号{}表示函数的具体实现，而抽象方法是没有实现的
    abstract protected function taxAddition();
}
