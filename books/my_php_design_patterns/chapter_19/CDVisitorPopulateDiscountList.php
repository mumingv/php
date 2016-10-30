<?php
/**
 * 访问者类: 打折CD列表
 */
class CDVisitorPopulateDiscountList {
    // 函数名称visitCD是在基类中声明的，各访问者类必须准守，具体业务逻辑的实现由访问者类自行处理
    public function visitCD($cd) {
        if ($cd->price < 12) {
            $this->_populateDiscountList($cd);
        }
    }

    public function _populateDiscountList($cd) {
        file_put_contents('discount_list.log', "{$cd->title}\n", FILE_APPEND);
    }
}
